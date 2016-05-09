
<?php 

	if (isset($_POST['controllerChosen']) 
	&& isset($_POST['gameTitle'])
	&& isset($_POST['gameCreator'])
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
		$gameTitle = $_POST['gameTitle'];
		//$gameTitle = mysql_real_escape_string($gameTitle);
		$gameCreator = $_POST['gameCreator'];
		//$gameCreator = mysql_real_escape_string($gameCreator);
		$controllerChosen = $_POST['controllerChosen']; 
		//$controllerChosen = mysql_real_escape_string($controllerChosen);
		$minGamePlayers = $_POST['minGamePlayers'];
		//$minGamePlayers = mysql_real_escape_string($minGamePlayers);
		$maxGamePlayers = $_POST['maxGamePlayers'];
		//$maxGamePlayers = mysql_real_escape_string($maxGamePlayers);
		$gameDescriptionPrimary = $_POST['gameDescriptionPrimary'];
		//$gameDescriptionPrimary = mysql_real_escape_string($gameDescriptionPrimary);
		$gameDescriptionSecondary = $_POST['gameDescriptionSecondary'];
		//$gameDescriptionSecondary = mysql_real_escape_string($gameDescriptionSecondary);
		$gameLabelsTextPrimary = $_POST['gameLabelsTextPrimary'];
		//$gameLabelsTextPrimary = mysql_real_escape_string($gameLabelsTextPrimary);
		$gameLabelsTextSecondary = $_POST['gameLabelsTextSecondary'];
		//$gameLabelsTextSecondary = mysql_real_escape_string($gameLabelsTextSecondary);
		$gameLabelLinks = $_POST['gameLabelLinks'];
		//$gameLabelLinks = mysql_real_escape_string($gameLabelLinks);
		$gameColorScheme = $_POST['gameColorScheme'];
		//$gameColorScheme = mysql_real_escape_string($gameColorScheme);
		$gameColorLines = $_POST['gameColorLines'];
		//$gameColorLines = mysql_real_escape_string($gameColorLines);
						
		$con = mysqli_connect('localhost','xantomen_user','testscheme','xantomen_gamesinputschemer');
		if (!$con) {
		    die('Could not connect: ' . mysqli_error($con));
		}
		
		mysqli_select_db($con,"xantomen_gamesinputschemer");
		
		/*$sql="INSERT INTO `GameTemplate`(`gameTitle`, `gameCreator`, `controllerChosen`, `minGamePlayers`, 
		`maxGamePlayers`, `gameDescriptionPrimary`, `gameDescriptionSecondary`, `gameLabelsTextPrimary`, 
		`gameLabelsTextSecondary`, `gameLabelLinks`, `gameColorScheme`, `gameColorLines`) 
		VALUES ('$gameTitle','$gameCreator','$controllerChosen','$minGamePlayers','$maxGamePlayers',
		'$gameDescriptionPrimary','$gameDescriptionSecondary','$gameLabelsTextPrimary','$gameLabelsTextSecondary',
		'$gameLabelLinks','$gameColorScheme','$gameColorLines')";*/
		
		$sql="INSERT INTO `GameTemplate`(`gameTitle`, `gameCreator`, `controllerChosen`, `minGamePlayers`, 
		`maxGamePlayers`, `gameDescriptionPrimary`, `gameDescriptionSecondary`, `gameLabelsTextPrimary`, 
		`gameLabelsTextSecondary`, `gameLabelLinks`, `gameColorScheme`, `gameColorLines`) 
		VALUES ('value01','value02','value03','value04','value05',
		'value06','value07','value08','value09',
		'value10','value11','value12')";
		
		$sql = str_replace("value01",$gameTitle,$sql);
		$sql = str_replace("value02",$gameCreator,$sql);
		$sql = str_replace("value03",$controllerChosen,$sql);
		$sql = str_replace("value04",$minGamePlayers,$sql);
		$sql = str_replace("value05",$maxGamePlayers,$sql);
		$sql = str_replace("value06",$gameDescriptionPrimary,$sql);
		$sql = str_replace("value07",$gameDescriptionSecondary,$sql);
		$sql = str_replace("value08",$gameLabelsTextPrimary,$sql);
		$sql = str_replace("value09",$gameLabelsTextSecondary,$sql);
		$sql = str_replace("value10",$gameLabelLinks,$sql);
		$sql = str_replace("value11",$gameColorScheme,$sql);
		$sql = str_replace("value12",$gameColorLines,$sql);
		
		$result = mysqli_query($con,$sql);
		
		if(!$result)
	    {
	        die('Error : ' . mysql_error());
			
			echo json_encode("ERROR IN SAVING TO DATABASE"); 
	    }
		else {
			echo json_encode($result); 
		}
								  
		mysqli_close($con);
		  
	} 
				
?>
