
<?php 

	if (isset($_POST['property']) && isset($_POST['string_value']))
	{
		$property = $_POST['property'];
		//$property = mysql_real_escape_string($property);
	  	$string_value = $_POST['string_value'];
		//$string_value = mysql_real_escape_string($string_value);
				
		$con = mysqli_connect('192.254.183.35','xantomen_user','testscheme','xantomen_gamesinputschemer');
		if (!$con) {
		    die('Could not connect: ' . mysqli_error($con));
		}
		
		mysqli_select_db($con,"xantomen_gamesinputschemer");
		
		$sql="SELECT * FROM `GameTemplate` WHERE ".$property." = '".$string_value."'";
		
		$result = mysqli_query($con,$sql);
		  
		$row = mysqli_fetch_array($result);
				
		echo json_encode($row);
								  
		mysqli_close($con);
		  
	} 
				
?>
