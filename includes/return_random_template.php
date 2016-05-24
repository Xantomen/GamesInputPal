
<?php 

	include_once 'db_connect.php';
	include_once 'functions.php';

		
	//Fixes encoding issue that was happening only in the Hostgator server but not in localhost
	mysqli_set_charset($mysqli,"utf8");
	
	$sql="SELECT * FROM `GameTemplate` ORDER BY RAND() LIMIT 0,1";
	
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
				
?>
