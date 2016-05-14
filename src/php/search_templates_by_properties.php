
<?php 

	include_once '../../includes/psl-config.php';

	if (isset($_POST['gameTitle']) || 
	isset($_POST['gameCreator']) ||
	isset($_POST['controllerChosen']) ||
	isset($_POST['templateAuthorName']) ||
	isset($_POST['minGamePlayers']) ||
	isset($_POST['maxGamePlayers']))
	{

		$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
		if (!$con) {
		    die('Could not connect: ' . mysqli_error($con));
		}
		
		//Fixes encoding issue that was happening only in the Hostgator server but not in localhost
		mysqli_set_charset($con,"utf8");
		
		$gameTitle = $_POST['gameTitle'];
		$gameTitle = mysqli_real_escape_string($con,$gameTitle);
		$gameCreator = $_POST['gameCreator'];
		$gameCreator = mysqli_real_escape_string($con,$gameCreator);
		$controllerChosen = $_POST['controllerChosen']; 
		$controllerChosen = mysqli_real_escape_string($con,$controllerChosen);
		$templateAuthorName = $_POST['templateAuthorName']; 
		$templateAuthorName = mysqli_real_escape_string($con,$templateAuthorName);
		$numPlayers = $_POST['numPlayers'];
		$numPlayers = mysqli_real_escape_string($con,$numPlayers);
		$numPlayers = (int)$numPlayers;
	
		$propertiesToSearchFor = "";
			
		
		if($gameTitle != "")
		{
			$propertiesToSearchFor = "`gameTitle`='".$gameTitle."'";
		}
		if($propertiesToSearchFor != "" && $gameCreator != "")
		{
			$propertiesToSearchFor = $propertiesToSearchFor." AND ";
		}
		if($gameCreator != "")
		{
			$propertiesToSearchFor = $propertiesToSearchFor."`gameCreator`='".$gameCreator."'";
		}
		if($propertiesToSearchFor != "" && $controllerChosen != "")
		{
			$propertiesToSearchFor = $propertiesToSearchFor." AND ";
		}
		if($controllerChosen != "")
		{
			$propertiesToSearchFor = $propertiesToSearchFor."`controllerChosen`='".$controllerChosen."'";
		}
		if($propertiesToSearchFor != "" && $templateAuthorName != "")
		{
			$propertiesToSearchFor = $propertiesToSearchFor." AND ";
		}
		if($templateAuthorName != "")
		{
			$propertiesToSearchFor = $propertiesToSearchFor."`templateAuthorName`='".$templateAuthorName."'";
		}
		if($propertiesToSearchFor != "" && $numPlayers != "" && $numPlayers != -1)
		{
			$propertiesToSearchFor = $propertiesToSearchFor." AND ";
		}
		if($numPlayers != "" && $numPlayers != -1)
		{
			$propertiesToSearchFor = $propertiesToSearchFor.$numPlayers." BETWEEN `minGamePlayers` AND `maxGamePlayers`";
		}
		
				
		if($propertiesToSearchFor != "")
		{
			
			mysqli_select_db($con,"xantomen_gamesinputschemer");
			
			
			$sql="SELECT `ID`,`gameTitle`,`gameCreator`,`controllerChosen` FROM `GameTemplate` 
			WHERE ".$propertiesToSearchFor;
			

			$result = mysqli_query($con,$sql);
			
			$num_rows = mysqli_num_rows($result);
			
			//If not finding any templates that fit the parameters
			if($num_rows == 0)
			{
				echo $num_rows;
			}
			else {
				
				$data = array();
				
				while ($row = mysqli_fetch_array($result)) {
				   $data[] = $row;
				}
				
				echo json_encode($data);
				
			}
			
			mysqli_free_result($result);
			  
			mysqli_close($con);
		}
		
		  
	} 
	else {
		echo json_encode("No Values Given For Search");
	}
				
?>
