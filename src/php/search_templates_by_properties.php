
<?php 

	if (isset($_POST['gameTitle']) || 
	isset($_POST['gameCreator']) ||
	isset($_POST['controllerChosen']) ||
	isset($_POST['minGamePlayers']) ||
	isset($_POST['maxGamePlayers']))
	{
		$gameTitle = $_POST['gameTitle'];
		//$gameTitle = mysql_real_escape_string($gameTitle);
		$gameCreator = $_POST['gameCreator'];
		//$gameCreator = mysql_real_escape_string($gameCreator);
		$controllerChosen = $_POST['controllerChosen']; 
		//$controllerChosen = mysql_real_escape_string($controllerChosen);
		$numPlayers = $_POST['numPlayers'];
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
			//'192.254.183.35'
			$con = mysqli_connect('localhost','xantomen_user','testscheme','xantomen_gamesinputschemer');
			if (!$con) {
			    die('Could not connect: ' . mysqli_error($con));
			}

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
