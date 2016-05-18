<?php
         
    include_once 'db_connect.php';
	include_once 'psl-config.php';
              
    if(isset($_POST['email']) && !empty($_POST['email']) AND isset($_POST['hash']) && !empty($_POST['hash'])){
	    // Verify data
	    $email = mysqli_escape_string($mysqli,$_POST['email']); // Set email variable
	    $hash = mysqli_escape_string($mysqli,$_POST['hash']); // Set hash variable
	              
	    $sql = "SELECT email, salt, active FROM members WHERE email='".$email."' AND salt='".$hash."' AND active='0'";
	
	    $search = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli)); 
	    $match  = mysqli_num_rows($search);
	                 
	    if($match > 0){
	        // We have a match, activate the account
	        mysqli_query($mysqli,"UPDATE members SET active='1' WHERE email='".$email."' AND salt='".$hash."' AND active='0'") or die(mysqli_error($mysqli));
	        echo 'Your account has been activated, you can now login';
	    }else{
	        // No match -> invalid url or account has already been activated.
	        echo 'The url is either invalid or you already have activated your account.';
	    }
	                 
	}else{
	    // Invalid approach
	    echo 'Invalid approach, please use the link that has been send to your email.';
	}
     
?>