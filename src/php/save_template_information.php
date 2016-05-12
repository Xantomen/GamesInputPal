
<?php 

	if (isset($_POST['controllerChosen']) 
	&& isset($_POST['gameTitle'])
	&& isset($_POST['gameCreator'])
	&& isset($_POST['templateAuthorName'])
	&& isset($_POST['minGamePlayers'])
	&& isset($_POST['maxGamePlayers'])
	&& isset($_POST['gameDescriptionPrimary'])
	&& isset($_POST['gameDescriptionSecondary'])
	&& isset($_POST['gameLabelsTextPrimary'])
	&& isset($_POST['gameLabelsTextSecondary'])
	&& isset($_POST['gameLabelLinks'])
	&& isset($_POST['gameColorScheme'])
	&& isset($_POST['gameColorLines']))
	{
		
		$con = mysqli_connect('192.254.183.35','xantomen_user','testscheme','xantomen_gamesinputschemer');
		if (!$con) {
		    die('Could not connect: ' . mysqli_error($con));
		}
		
		//Fixes encoding issue that was happening only in the Hostgator server but not in localhost
		mysqli_set_charset($con,"utf8");
		
		$gameTitle = $_POST['gameTitle'];
		
		$gameCreator = $_POST['gameCreator'];
		$gameCreator = mysqli_real_escape_string($con,$gameCreator);
		$controllerChosen = $_POST['controllerChosen']; 
		$controllerChosen = mysqli_real_escape_string($con,$controllerChosen);
		$templateAuthorName = $_POST['templateAuthorName'];
		$templateAuthorName = mysqli_real_escape_string($con,$templateAuthorName);
		$minGamePlayers = $_POST['minGamePlayers'];
		$minGamePlayers = mysqli_real_escape_string($con,$minGamePlayers);
		$maxGamePlayers = $_POST['maxGamePlayers'];
		$maxGamePlayers = mysqli_real_escape_string($con,$maxGamePlayers);
		$gameDescriptionPrimary = $_POST['gameDescriptionPrimary'];
		$gameDescriptionPrimary = mysqli_real_escape_string($con,$gameDescriptionPrimary);
		$gameDescriptionSecondary = $_POST['gameDescriptionSecondary'];
		$gameDescriptionSecondary = mysqli_real_escape_string($con,$gameDescriptionSecondary);
		$gameLabelsTextPrimary = $_POST['gameLabelsTextPrimary'];
		$gameLabelsTextPrimary = mysqli_real_escape_string($con,$gameLabelsTextPrimary);
		$gameLabelsTextSecondary = $_POST['gameLabelsTextSecondary'];
		$gameLabelsTextSecondary = mysqli_real_escape_string($con,$gameLabelsTextSecondary);
		$gameLabelLinks = $_POST['gameLabelLinks'];
		$gameLabelLinks = mysqli_real_escape_string($con,$gameLabelLinks);
		$gameColorScheme = $_POST['gameColorScheme'];
		$gameColorScheme = mysqli_real_escape_string($con,$gameColorScheme);
		$gameColorLines = $_POST['gameColorLines'];
		$gameColorLines = mysqli_real_escape_string($con,$gameColorLines);
						
		
		mysqli_select_db($con,"xantomen_gamesinputschemer");
		
		$sql="SELECT * FROM `GameTemplate` WHERE `gameTitle` = '".$gameTitle."' AND `controllerChosen` = '".$controllerChosen."'";
		
		$result = mysqli_query($con,$sql);
		  
		$row = mysqli_fetch_array($result);
		
		if(empty($row))
		{			
			/*$sql="INSERT INTO `GameTemplate`(`gameTitle`, `gameCreator`, `controllerChosen`, `minGamePlayers`, 
			`maxGamePlayers`, `gameDescriptionPrimary`, `gameDescriptionSecondary`, `gameLabelsTextPrimary`, 
			`gameLabelsTextSecondary`, `gameLabelLinks`, `gameColorScheme`, `gameColorLines`) 
			VALUES ('$gameTitle','$gameCreator','$controllerChosen','$minGamePlayers','$maxGamePlayers',
			'$gameDescriptionPrimary','$gameDescriptionSecondary','$gameLabelsTextPrimary','$gameLabelsTextSecondary',
			'$gameLabelLinks','$gameColorScheme','$gameColorLines')";*/
			
			$sql="INSERT INTO `GameTemplate`(`gameTitle`, `gameCreator`, `controllerChosen`, `templateAuthorName`,`minGamePlayers`, 
			`maxGamePlayers`, `gameDescriptionPrimary`, `gameDescriptionSecondary`, `gameLabelsTextPrimary`, 
			`gameLabelsTextSecondary`, `gameLabelLinks`, `gameColorScheme`, `gameColorLines`) 
			VALUES ('value01','value02','value03','value04','value05',
			'value06','value07','value08','value09',
			'value10','value11','value12','value13')";
			
			$sql = str_replace("value01",$gameTitle,$sql);
			$sql = str_replace("value02",$gameCreator,$sql);
			$sql = str_replace("value03",$controllerChosen,$sql);
			$sql = str_replace("value04",$templateAuthorName,$sql);
			$sql = str_replace("value05",$minGamePlayers,$sql);
			$sql = str_replace("value06",$maxGamePlayers,$sql);
			$sql = str_replace("value07",$gameDescriptionPrimary,$sql);
			$sql = str_replace("value08",$gameDescriptionSecondary,$sql);
			$sql = str_replace("value09",$gameLabelsTextPrimary,$sql);
			$sql = str_replace("value10",$gameLabelsTextSecondary,$sql);
			$sql = str_replace("value11",$gameLabelLinks,$sql);
			$sql = str_replace("value12",$gameColorScheme,$sql);
			$sql = str_replace("value13",$gameColorLines,$sql);
			
			//Adding this replace to prevent fringe cases html code injection
			//It won't matter as long as I keep using .val() to get values.
			//Not using it for now, for cleaner code, less chasing arpund the special characters
			//$sql = str_replace("<","&lt",$sql); 
			
			$result = mysqli_query($con,$sql);
			
			if(!$result)
		    {
		        die('Error : ' . mysql_error());
	
		    }
			else {
				echo json_encode($result); 
			}
			
		}		
		else 
		{

			echo json_encode("TEMPLATE ALREADY EXISTS");
		}
		
		
								  
		mysqli_close($con);
		  
	} 
				
?>
