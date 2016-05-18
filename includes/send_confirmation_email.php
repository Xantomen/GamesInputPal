<?php

include_once 'db_connect.php';
include_once 'psl-config.php';

date_default_timezone_set('Etc/UTC');

require '../../public_html/gamesinputpal/libs/PHPMailer/PHPMailerAutoload.php';

if (isset($_POST['email'], $_POST['password'], $_POST['username'] , $_POST['hash'] , $_POST['resend'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$password = $_POST['password'];
	$username = $_POST['username'];
    $hash = $_POST['hash']; // The hashed password.
    $resend = $_POST['resend'];
    
	if($resend == "resend")
	{
		$sql = "SELECT username,email,salt FROM members WHERE email='".$email."' AND active='0'";
	
	    $search = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli)); 
	    $match  = mysqli_num_rows($search);
	                 
	    if($match > 0){
	        // We have a match, resend the verification email
	        
	        $row = mysqli_fetch_array($search);
	        	        	  
			$username = $row['username'];
			$hash = $row['salt'];
							   
			$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->SMTPDebug = 2;
			$mail->Debugoutput = 'html';
			$mail->Host = 'mail.xantomen.com';
			$mail->Port = 587;
			$mail->SMTPSecure = 'tls';
			$mail->SMTPAuth = true;
			
			$mail->Username = MAILUSER;
			$mail->Password = MAILPASSWORD;
			$mail->setFrom('gamesinputpal@xantomen.com', 'Games Input Pal');
			$mail->addReplyTo('gamesinputpal@xantomen.com', 'Games Input Pal');
			$mail->addAddress($email, '');
			$mail->Subject = 'Resend Account verification Email Games Input Pal';
			$mail->Body = '
			<br /> 
			Thanks for signing up!<br />
			This is a resending of the verification email, you can login after you have activated your account by pressing the url below.
			<br /><br /> 
			
			Please click this link to activate your account:<br />
			http://www.xantomen.com/gamesinputschemer/index.php#action=verify&email='.$email.'&hash='.$hash.'<br /><br />';
			
			
			
			$mail->AltBody = 'Thanks for signing up! 
			Your account has been created, you can login after you have activated your account by pressing the url below.
			 ';
		    
			if (!$mail->send()) {
			    echo "Mailer Error: " . $mail->ErrorInfo;
			} else {
			    echo "SENT CONFIRMATION EMAIL";
			}
		}else{
	        // No match -> invalid url or account has already been activated.
	        echo 'The email is either invalid or you already have activated your account.';
	    }
	}
	else {
		$mail = new PHPMailer;
		$mail->isSMTP();
		$mail->SMTPDebug = 2;
		$mail->Debugoutput = 'html';
		$mail->Host = 'mail.xantomen.com';
		$mail->Port = 587;
		$mail->SMTPSecure = 'tls';
		$mail->SMTPAuth = true;
		
		$mail->Username = MAILUSER;
		$mail->Password = MAILPASSWORD;
		$mail->setFrom('gamesinputpal@xantomen.com', 'Games Input Pal');
		$mail->addReplyTo('gamesinputpal@xantomen.com', 'Games Input Pal');
		$mail->addAddress($email, '');
		$mail->Subject = 'Account verification Email Games Input Pal';
		$mail->Body = '
		<br /> 
		Thanks for signing up!<br />
		Your account has been created, you can login after you have activated your account by pressing the url below.
		<br /><br /> 
		
		Please click this link to activate your account:<br />
		http://www.xantomen.com/gamesinputschemer/index.php#action=verify&email='.$email.'&hash='.$hash.'<br /><br />';
		
		
		
		$mail->AltBody = 'Thanks for signing up! 
		Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
		 ';
	    
		if (!$mail->send()) {
		    echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
		    echo "SENT CONFIRMATION EMAIL";
		}
	}
    
    
    
} else {
    // The correct POST variables were not sent to this page. 
    echo "INCORRECT INPUT!";
    exit();
}