
<?php 

	include_once '../../../../gamesinputpal/includes/db_connect.php';
	include_once '../../../../gamesinputpal/includes/functions.php';

	if (isset($_POST['gameTitle']) && isset($_POST['controllerChosen']))
	{
				
		//Fixes encoding issue that was happening only in the Hostgator server but not in localhost
		mysqli_set_charset($mysqli,"utf8");
		
		$gameTitle = $_POST['gameTitle'];
		$gameTitle = mysqli_real_escape_string($mysqli,$gameTitle);
		$gameTitle = str_replace("%20"," ",$gameTitle);
		$gameTitle = str_replace("%3C","<",$gameTitle);
		$gameTitle = str_replace("%3E",">",$gameTitle);
		//$property = mysql_real_escape_string($property);
	  	$controllerChosen = $_POST['controllerChosen'];
		$controllerChosen = mysqli_real_escape_string($mysqli,$controllerChosen);
		//$string_value = mysql_real_escape_string($string_value);

		
		$sql="SELECT * FROM `GameTemplate` WHERE `gameTitle` = '".$gameTitle."' AND `controllerChosen` = '".$controllerChosen."'";
		
		$result = mysqli_query($mysqli,$sql);
		  
		$row = mysqli_fetch_array($result);
				
		if(empty($row))
		{
			echo "TEMPLATE NOT FOUND";
		}		
		else 
		{
			echo json_encode($row);
		}
								  
		mysqli_close($mysqli);
		  
	} 
				
?>
