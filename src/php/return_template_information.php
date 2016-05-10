
<?php 

	if (isset($_POST['property']) && isset($_POST['string_value']))
	{
		$con = mysqli_connect('localhost','xantomen_user','testscheme','xantomen_gamesinputschemer');
		if (!$con) {
		    die('Could not connect: ' . mysqli_error($con));
		}
		
		$property = $_POST['property'];
		$property = mysqli_real_escape_string($con,$property);
	  	$string_value = $_POST['string_value'];
		$string_value = mysqli_real_escape_string($con,$string_value);

		mysqli_select_db($con,"xantomen_gamesinputschemer");
		
		$sql="SELECT * FROM `GameTemplate` WHERE ".$property." = '".$string_value."'";
		
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
