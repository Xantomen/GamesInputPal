
<?php 

	include_once '../../includes/db_connect.php';
	include_once '../../includes/functions.php';
	
	sec_session_start();

	if (isset($_POST['controllerChosen']) 
	&& isset($_POST['gameTitle'])
	&& isset($_POST['previousControllerChosen'])
	&& isset($_POST['previousGameTitle'])
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
	&& isset($_POST['gameColorLines'])
	&& isset($_POST['playstyleMode']))
	{
		
				
		//Fixes encoding issue that was happening only in the Hostgator server but not in localhost
		mysqli_set_charset($mysqli,"utf8");
		
		$gameTitle = $_POST['gameTitle'];
		$gameTitle = mysqli_real_escape_string($mysqli,$gameTitle);
		
		$previousGameTitle = $_POST['previousGameTitle'];
		$previousGameTitle = mysqli_real_escape_string($mysqli,$previousGameTitle);
		
		
		$gameCreator = $_POST['gameCreator'];
		$gameCreator = mysqli_real_escape_string($mysqli,$gameCreator);
		
		$controllerChosen = $_POST['controllerChosen']; 
		$controllerChosen = mysqli_real_escape_string($mysqli,$controllerChosen);
		
		$previousControllerChosen = $_POST['previousControllerChosen'];
		$previousControllerChosen = mysqli_real_escape_string($mysqli,$previousControllerChosen);
		
		$templateAuthorName = $_POST['templateAuthorName'];
		$templateAuthorName = mysqli_real_escape_string($mysqli,$templateAuthorName);
		if(isset($_SESSION['username']))
		{
			$templateAuthorName = $_SESSION['username'];
		}
		$minGamePlayers = $_POST['minGamePlayers'];
		$minGamePlayers = mysqli_real_escape_string($mysqli,$minGamePlayers);
		$maxGamePlayers = $_POST['maxGamePlayers'];
		$maxGamePlayers = mysqli_real_escape_string($mysqli,$maxGamePlayers);
		$gameDescriptionPrimary = $_POST['gameDescriptionPrimary'];
		$gameDescriptionPrimary = mysqli_real_escape_string($mysqli,$gameDescriptionPrimary);
		$gameDescriptionSecondary = $_POST['gameDescriptionSecondary'];
		$gameDescriptionSecondary = mysqli_real_escape_string($mysqli,$gameDescriptionSecondary);
		$gameLabelsTextPrimary = $_POST['gameLabelsTextPrimary'];
		$gameLabelsTextPrimary = mysqli_real_escape_string($mysqli,$gameLabelsTextPrimary);
		$gameLabelsTextSecondary = $_POST['gameLabelsTextSecondary'];
		$gameLabelsTextSecondary = mysqli_real_escape_string($mysqli,$gameLabelsTextSecondary);
		$gameLabelLinks = $_POST['gameLabelLinks'];
		$gameLabelLinks = mysqli_real_escape_string($mysqli,$gameLabelLinks);
		$gameColorScheme = $_POST['gameColorScheme'];
		$gameColorScheme = mysqli_real_escape_string($mysqli,$gameColorScheme);
		$gameColorLines = $_POST['gameColorLines'];
		$gameColorLines = mysqli_real_escape_string($mysqli,$gameColorLines);
		$playstyleMode = $_POST['playstyleMode'];
		$playstyleMode = mysqli_real_escape_string($mysqli,$playstyleMode);
						
			
		$sql="SELECT * FROM `GameTemplate` WHERE `gameTitle` = '".$previousGameTitle."' AND `controllerChosen` = '".$previousControllerChosen."'";
		
		$result = mysqli_query($mysqli,$sql);
		  
		$row = mysqli_fetch_array($result);
		
		if(empty($row))
		{			
			
			echo "TEMPLATE NOT FOUND!"; 
			
			
		}		
		else if(isset($_SESSION['username']))
		{
			if($row['templateAuthorName'] == $_SESSION['username'])	
			{
				$sql="UPDATE `GameTemplate` SET `gameTitle`='value01', `gameCreator`='value02', `controllerChosen`='value03',
				`templateAuthorName`='value04',`minGamePlayers`='value05', `maxGamePlayers` = 'value06', 
				`gameDescriptionPrimary` = 'value07', `gameDescriptionSecondary` = 'value08', 
				`gameLabelsTextPrimary` = 'value09',`gameLabelsTextSecondary` = 'value10', `gameLabelLinks` = 'value11', 
				`gameColorScheme` = 'value12', `gameColorLines` = 'value13',`playstyleMode` = 'value14' 
				WHERE gameTitle='".$previousGameTitle."' AND controllerChosen='".$previousControllerChosen."' AND templateAuthorName='".$_SESSION['username']."'";
				
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
				$sql = str_replace("value14",$playstyleMode,$sql);
				
				
			}	
			
			$result = mysqli_query($mysqli,$sql);
			
			if($result == FALSE)
		    {
		        die('Error : ' . mysql_error());
	
		    }
			else {
				echo json_encode($result); 
			}

			
		}
		else {
				
			echo "TEMPLATE OWNED BY A DIFFERENT USER";
		}
		
		
								  
		mysqli_close($mysqli);
		  
	} 
				
?>
