
<?php 

	include_once '../../includes/psl-config.php';

	if (isset($_POST['gameTitle']) && isset($_POST['controllerChosen']))
	{
		$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
		if (!$con) {
		    die('Could not connect: ' . mysqli_error($con));
		}
		
		//Fixes encoding issue that was happening only in the Hostgator server but not in localhost
		mysqli_set_charset($con,"utf8");
		
		$gameTitle = $_POST['gameTitle'];
		$gameTitle = mysqli_real_escape_string($con,$gameTitle);
		$gameTitle = str_replace("%20"," ",$gameTitle);
		$gameTitle = str_replace("%3C","<",$gameTitle);
		$gameTitle = str_replace("%3E",">",$gameTitle);
		//$property = mysql_real_escape_string($property);
	  	$controllerChosen = $_POST['controllerChosen'];
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
