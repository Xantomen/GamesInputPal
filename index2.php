<?php
/**
 * Copyright (C) 2013 peredur.net
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Secure Login: Log In</title>
        <link rel="stylesheet" href="src/styles/main.css" />
        <script type="text/JavaScript" src="src/js/sha512.js"></script> 
        <script type="text/JavaScript" src="src/js/ajax_helpers.js"></script> 
    </head>
    <body>
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?> 
        <form action="includes/process_login.php" method="post" name="login_form"> 			
            Email: <input type="text" id="email" value="xantomen@gmail.com" /><br>
            Password: <input type="password" id="password" value="Testing1"/><br>
            <input type="button" value="Login" id="login_button" /><br>
                   
            Username: <input type='text' id='username' value="Xantomen" /><br> 
            Confirm password: <input type="password" id="conf_password" value="Testing1" /><br>
            
            <input type="button" value="Register" id="register_button" /> 
                   
             <input type="button" value="Logout" id="logout_button" /> 
             
             <input type="button" value="Resend Verification Email" id="resend_verification_button" /> 
        </form>
        
        <p>You are currently logged <?php echo $logged ?>.</p>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        
        <script type="application/javascript">
        
        	$(document).ready(function(){

	        	checkUrlForActions();
		    	
		    	function checkUrlForActions()
		    	{
		    		var action = getURLParameter("action");
		    		
		    		switch(action)
		    		{
		    			case "verify":
		    			
		    				var email = getURLParameter("email");
		    				var hash = getURLParameter("hash");
		    			
		    				console.log(email);
		    				console.log(hash);
		    			
		    				if(email && hash)
		    				{
				    			$.ajax({  
								    type: "POST",  
								    url: "includes/verify_user_email.php", 
								    data: { 'email':email,
								    'hash':hash },
								    success: function(data){ 
								       
										//$("#alert_messages_modal").modal("hide");
										
										//alert(msg);
										console.log(data);
										
								    },
								    error: function(data) {
										
										alert(data);
								    }
								});
								
		    				}
	
		    			break;
		    			default:
		    			break;
		    		}
		    		
		    		
		    	}
					
	        	$("#login_button").click(function(){
	        		
	        		var email = $("#email").val();
	        		var password = formhash($("#password").val());
	
	        		$.ajax({  
					    type: "POST",  
					    url: "includes/process_login.php",  
					    data: { 'email':email,
					    'password':password},    
					    success: function(data){ 
					       console.log("SUCCESS");
					       console.log(data);
					       
					       if(data == "SUCCESFULLY LOGGED IN!")
					       {
					       		alert(data);
					       		location.reload();
					       }
					       else if(data == "LOGIN FAILED!")
					       {
					       		alert("Login Failed. Invalid email or password, or the account doesn't exist or has not been activated");
					       }
					       else if(data == "INCORRECT INPUT!")
					       {
					       		alert(data);
					       }
							//$("#alert_messages_modal").modal("hide");
							
					    },
					    error: function(data) {
							console.log("ERROR");
							console.log(data);
							
							alert(data);
					    }
					});
	        	});
	        	
	        	$("#register_button").click(function(){
	        		  		
					var username = $("#username").val();
	        		var email = $("#email").val();
	        		
	        		var original_password = $("#password").val();
	        		
	        		var password = regformhash(username,email,original_password,$("#conf_password").val());
	        		
	        		if(password != false)
	        		{
	        			$.ajax({  
						    type: "POST",  
						    url: "includes/register.inc.php",  
						    data: { 'email':email,
						    'username':username,
						    'password':password},    
						    success: function(data){ 
						       console.log("SUCCESS");
						       //console.log(data);
						       						       
						       if(data.indexOf("REGISTRATION SUCCESS!")>-1)
						       {
						       		var hash = data.split("#")[1];
						       						       	
						       		// Return Success - Valid Email
									var msg = 'Your account has been made, please verify it by clicking the activation link that has been send to your email.';
	
									$.ajax({  
									    type: "POST",  
									    url: "includes/send_confirmation_email.php", 
									    data: { 'email':email,
									    'username':username,
									    'password':original_password,
									    'hash':hash,
									    'resend':'false'},
									    success: function(temp_data){ 
									       
											//$("#alert_messages_modal").modal("hide");
											
											alert(msg);
											
											if(temp_data=="SENT CONFIRMATION EMAIL")
											{
												console.log(temp_data);
											}
											else
											{
												console.log(temp_data);
												//alert("Couldn't send your email!");
											}
											
											
											
									    },
									    error: function(temp_data) {
											
											alert(temp_data);
									    }
									});
		
						       		//location.reload();
						       }
						       else if(data == "REGISTRATION FAILED: INSERT!")
						       {
						       		alert(data);
						       }
						       else
						       {
						       		alert(data);
						       }
								//$("#alert_messages_modal").modal("hide");
								//location.reload();
								
						    },
						    error: function() {
								console.log("ERROR");
								console.log(data);
								
								alert(data);
						    }
						});
	        		}
	        		
	        		
	        	});
	        	
	        	$("#logout_button").click(function(){
	        		
	        		$.ajax({  
					    type: "POST",  
					    url: "includes/logout.php",  
					        
					    success: function(data){ 
					       
							//$("#alert_messages_modal").modal("hide");
							location.reload();
							
					    },
					    error: function() {
							
							alert(data);
					    }
					});
	        	});
	        	
	        	$("#resend_verification_button").click(function(){
	        		  		
	        		var email = $("#email").val();
	        		
					$.ajax({  
					    type: "POST",  
					    url: "includes/send_confirmation_email.php", 
					    data: { 'email':email,
					    'username':'',
					    'password':'',
					    'hash':'',
					    'resend':'resend'},
					    success: function(temp_data){ 
					       
							//$("#alert_messages_modal").modal("hide");
														
							if(temp_data=="SENT CONFIRMATION EMAIL")
							{
								console.log(temp_data);
							}
							else
							{
								console.log(temp_data);
								//alert("Couldn't send your email!");
							}
							
							
							
					    },
					    error: function(temp_data) {
							
							alert(temp_data);
					    }
					});

	        		
	        	});
        	});

        </script>
    </body>
</html>
