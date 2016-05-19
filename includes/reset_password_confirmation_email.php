<?php

include_once 'db_connect.php';
include_once 'psl-config.php';

date_default_timezone_set('Etc/UTC');

require '../libs/PHPMailer/PHPMailerAutoload.php';

if (isset($_POST['email'], $_POST['password'])) {
    	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	        // Not a valid email
	        $error_msg .= '<p class="error">The email address you entered is not valid</p>';
	    }
	
		$sql = "SELECT email FROM members WHERE email='".$email."' AND active='1'";
	
	    $search = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli)); 
	    $match  = mysqli_num_rows($search);
	                 
	    if($match == 1){
	    	
			$resetPassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
		    if (strlen($resetPassword) != 128) {
		        // The hashed pwd should be 128 characters long.
		        // If it's not, something really odd has happened
		        $error_msg .= '<p class="error">Invalid password configuration.</p>';
		    }
			
			if (empty($error_msg)) {
		        // Create a random salt
		        $random_salt = hash('sha512', uniqid(openssl_random_pseudo_bytes(16), TRUE));
		
		        // Create salted password 
		        $resetPassword = hash('sha512', $resetPassword . $random_salt);
		
				$active = '0';
				echo $resetPassword;
				echo $email;
				mysqli_query($mysqli,"UPDATE members SET reset_password='".$resetPassword."',salt='".$random_salt."' WHERE email='".$email."' AND active='1'") or die(mysqli_error($mysqli));
		        // Insert the new user into the database 
		        /*if ($insert_stmt = $mysqli->prepare("UPDATE members SET (reset_password, salt) VALUES (?,?)")) {
		            $insert_stmt->bind_param('ss', $resetPassword, $random_salt);
		            // Execute the prepared query.
		            if (! $insert_stmt->execute()) {
		                echo "RESET PASSWORD FAILED: UPDATE!";
		                exit();
		            }
		        }*/
		        echo "RESET PASSWORD SUCCESS!";
				
				// Send the reset password confirmation email
	        
		        	        	  
				$username = $email;
				$hash = $random_salt;
								   
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
				Thanks for using Games Input Pal!<br />
				Someone requested a change of password to this account, you can login with the following email:
				<br /><br /> 
				------------------------<br />
				Username: '.$username.' <br />
				------------------------<br />
				<br />
				If you have not requested a change of password, ignore this message.
				If you have, your new password will be applied after clicking on this link:<br />
				http://www.xantomen.com/gamesinputpal/index.php#action=confirm_reset_password&email='.$email.'&hash='.$hash.'<br /><br />';
				
				$mail->AltBody = 'Thanks for using Games Input Pal! 
				Someone requested a change of password to this account, you can login with the following email:
				 ';
			
				if (!$mail->send()) {
				    echo "Mailer Error: " . $mail->ErrorInfo;
				} else {
				    echo "SENT RESEND CONFIRMATION EMAIL!";
				}
				
		        exit();
		    }
			else 
			{
				echo $error_msg;
			}
		}else{
	        // No match -> invalid url or account has already been activated.
	        echo 'The email is either invalid or you did not activate your account.';
	    }
	mysqli_close($mysqli);
    
} else {
    // The correct POST variables were not sent to this page. 
    echo "INCORRECT INPUT!";
	mysqli_close($mysqli);
    exit();
}