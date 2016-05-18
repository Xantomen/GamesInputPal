
<?php 

	include_once '../../../../gamesinputpal/includes/db_connect.php';
	include_once '../../../../gamesinputpal/includes/functions.php';

	if (isset($_POST['property']) && isset($_POST['string_value']))
	{
				
		//Fixes encoding issue that was happening only in the Hostgator server but not in localhost
		mysqli_set_charset($mysqli,"utf8");
		
		$property = $_POST['property'];
		$property = mysqli_real_escape_string($mysqli,$property);
	  	$string_value = $_POST['string_value'];
		$string_value = mysqli_real_escape_string($mysqli,$string_value);

		
		$sql="SELECT * FROM `GameTemplate` WHERE ".$property." = '".$string_value."'";
		
		$result = mysqli_query($mysqli,$sql);
		  
		$row = mysqli_fetch_array($result);
		
		if(empty($row))
		{
			echo json_encode("TEMPLATE NOT FOUND");
		}		
		else 
		{
			echo json_encode($row);
		}
								  
		mysqli_close($mysqli);
		  
	} 
				
?>
