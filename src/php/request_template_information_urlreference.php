
<?php 

	if (isset($_POST['gameTitle']) && isset($_POST['controllerChosen']))
	{
		$con = mysqli_connect('192.254.183.35','xantomen_user','testscheme','xantomen_gamesinputschemer');
		if (!$con) {
		    die('Could not connect: ' . mysqli_error($con));
		}
		
		//Fixes encoding issue that was happening only in the Hostgator server but not in localhost
		mysqli_set_charset($con,"utf8");
		
		$gameTitle = $_POST['gameTitle'];
		$gameTitle = mysqli_real_escape_string($con,$gameTitle);
		$gameTitle = str_replace("%20"," ",$gameTitle);
		//$property = mysql_real_escape_string($property);
	  	$controllerChosen = $_POST['controllerChosen']."_controller";
		$controllerChosen = mysqli_real_escape_string($con,$controllerChosen);
		//$string_value = mysql_real_escape_string($string_value);

		mysqli_select_db($con,"xantomen_gamesinputschemer");
		
		$sql="SELECT * FROM `GameTemplate` WHERE `gameTitle` = '".$gameTitle."' AND `controllerChosen` = '".$controllerChosen."'";
		
		$result = mysqli_query($con,$sql);
		  
		$row = mysqli_fetch_array($result);
				
		if(empty($row))
		{
			echo json_encode("TEMPLATE NOT FOUND");
		}		
		else 
		{
			echo json_encode($row);
		}
								  
		mysqli_close($con);
		  
	} 
				
?>
