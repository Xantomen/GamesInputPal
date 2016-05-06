<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Games Input Schemer</title>

    <!-- Bootstrap -->
    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="src/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="libs/jsgraphics/wz_jsgraphics.js"></script>
  </head>
  <body>
  	
  	<?php echo '<p>Hello World</p>'; ?> 
  	<!--<?php
		$q = intval($_GET['q']);
		
		$con = mysqli_connect('localhost','peter','abc123','my_db');
		if (!$con) {
		    die('Could not connect: ' . mysqli_error($con));
		}
		
		/*mysqli_select_db($con,"ajax_demo");
		$sql="SELECT * FROM user WHERE id = '".$q."'";
		$result = mysqli_query($con,$sql);
		
		echo "<table>
		<tr>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Age</th>
		<th>Hometown</th>
		<th>Job</th>
		</tr>";
		while($row = mysqli_fetch_array($result)) {
		    echo "<tr>";
		    echo "<td>" . $row['FirstName'] . "</td>";
		    echo "<td>" . $row['LastName'] . "</td>";
		    echo "<td>" . $row['Age'] . "</td>";
		    echo "<td>" . $row['Hometown'] . "</td>";
		    echo "<td>" . $row['Job'] . "</td>";
		    echo "</tr>";
		}*/
		echo "LALALALA";
		//mysqli_close($con);
		?> -->
  	
  	
  	<div id="container_all">
  		
		
		<div id="headers">
			<div id="tool_name">
  				Made with Games Input Schemer
	  		</div>

	  		<div id="webpage_name">
	  			<a href="http://xantomen.com/gamesinputschemer">http://xantomen.com/gamesinputschemer</a>
	  		</div>
			
		</div>
		<div id="buttons_bar">
						
			
			<div id="choose_controller_dropdown" class="dropdown text-center">
			  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose Controller
			  <span class="caret"></span></button>
			  <ul class="dropdown-menu">
			    <li class="controller_item" controller_name="xbox360_controller"><img class="image-responsive controller_thumbnail" src="res/img/xbox360_controller.png" > XBOX360</li>
			    <li class="controller_item" controller_name="playstation3_controller"><img class="image-responsive controller_thumbnail" src="res/img/playstation3_controller.png" > PLAYSTATION3</li>
			  </ul>
			</div>

	  		<div id="print_button" type="button" class="btn btn-primary">
	  			Print Now!
	  		</div>
			
		</div>
  		<div id="container_top" class="center-block">
  
  				<input id="game_title_text" name="game_title" class="h1 text-center center-block" 
  				value="" placeholder="Write your Game Title here" type="text">
  				
  				<input id="creator_name_text" name="creator_name" class="h2 text-center center-block" 
  				value="" placeholder="Write the Game Creator's name and/or Twitter Handle here" type="text">
  	
  		</div>
  		<div id="container_middle" class="center-block">
  			
  			<div id="left_text_container">
	    		<div id="label_pair" class="label_pair">
	    			<div label_pair_match="1" class="left_position_label label_pair_texts_container non_display half_visible">
	    				<input name="game_title" class="h5 text-center center-block 
	    				description_first_language_button_text left_position_text" value="" 
	    				placeholder="Description in native language" type="text">
			  			<input name="game_title_secondary" class="h5 text-center center-block 
			  			description_second_language_button_text left_position_text" value="" 
			  				placeholder="Description in English" type="text">
	    			</div>
	    			<div label_pair_match="1" anchor_position="1" num_links="0" class="left_position_right_anchor label_pair_anchor_right label_pair_anchor non_display">
	    				
	    			</div>	
	    			<!--<div label_pair_match="1" anchor_position="2" class="left_position_bottom_anchor label_pair_anchor_bottom label_pair_anchor non_display">
	    				
	    			</div>	-->
	    		</div>
	    		<div id="label_pair" class="label_pair">
	    			<div label_pair_match="2" class="left_position_label label_pair_texts_container non_display half_visible">
	    				<input name="game_title_secondary" class="h5 text-center center-block 
	    				description_first_language_button_text left_position_text" value="" 
	    				placeholder="Description in native language" type="text">
			  			<input name="game_title" class="h5 text-center center-block 
			  			description_second_language_button_text left_position_text" value="" 
			  				placeholder="Description in English" type="text">
	    			</div>
	    			<div label_pair_match="2" anchor_position="1" num_links="0" class="left_position_right_anchor label_pair_anchor_right label_pair_anchor non_display">
	    				
	    			</div>	
	    			<!--<div label_pair_match="2" anchor_position="2" class="left_position_bottom_anchor label_pair_anchor_bottom label_pair_anchor non_display">
	    				
	    			</div>	-->
	    		</div>
	    		<div class="label_pair">
	    			<div label_pair_match="3" class="left_position_label label_pair_texts_container non_display half_visible">
	    				<input name="game_title" class="h5 text-center center-block 
	    				description_first_language_button_text left_position_text" value="" 
	    				placeholder="Description in native language" type="text">
			  			<input name="game_title_secondary" class="h5 text-center center-block 
			  			description_second_language_button_text left_position_text" value="" 
			  				placeholder="Description in English" type="text">
	    			</div>
	    			<div label_pair_match="3" anchor_position="1" num_links="0" class="left_position_right_anchor label_pair_anchor_right label_pair_anchor non_display">
	    				
	    			</div>	
	    			<!--<div label_pair_match="3" anchor_position="2" class="left_position_bottom_anchor label_pair_anchor_bottom label_pair_anchor non_display">
	    				
	    			</div>	-->
	    		</div>
	    		<div class="label_pair">
	    			<div label_pair_match="4" class="left_position_label label_pair_texts_container non_display half_visible">
	    				<input name="game_title" class="h5 text-center center-block 
	    				description_first_language_button_text left_position_text" value="" 
	    				placeholder="Description in native language" type="text">
			  			<input name="game_title_secondary" class="h5 text-center center-block 
			  			description_second_language_button_text left_position_text" value="" 
			  				placeholder="Description in English" type="text">
	    			</div>
	    			<div label_pair_match="4" anchor_position="1" num_links="0" class="left_position_right_anchor label_pair_anchor_right label_pair_anchor non_display">
	    				
	    			</div>	
	    			<!--<div label_pair_match="4" anchor_position="2" class="left_position_bottom_anchor label_pair_anchor_bottom label_pair_anchor non_display">
	    				
	    			</div>	-->
	    		</div>
	    		<div class="label_pair">
	    			<div label_pair_match="5" class="left_position_label label_pair_texts_container non_display half_visible">
	    				<input name="game_title" class="h5 text-center center-block 
	    				description_first_language_button_text left_position_text" value="" 
	    				placeholder="Description in native language" type="text">
			  			<input name="game_title_secondary" class="h5 text-center center-block 
			  			description_second_language_button_text left_position_text" value="" 
			  				placeholder="Description in English" type="text">
	    			</div>
	    			<div label_pair_match="5" anchor_position="1" num_links="0" class="left_position_right_anchor label_pair_anchor_right label_pair_anchor non_display">
	    				
	    			</div>	
	    			<!--<div label_pair_match="5" anchor_position="2" class="left_position_bottom_anchor label_pair_anchor_bottom label_pair_anchor non_display">
	    				
	    			</div>	-->
	    		</div>
	    		<div class="label_pair">
	    			<div label_pair_match="6" class="left_position_label label_pair_texts_container non_display half_visible">
	    				<input name="game_title" class="h5 text-center center-block 
	    				description_first_language_button_text left_position_text" value="" 
	    				placeholder="Description in native language" type="text">
			  			<input name="game_title_secondary" class="h5 text-center center-block 
			  			description_second_language_button_text left_position_text" value="" 
			  				placeholder="Description in English" type="text">
	    			</div>
	    				    			
	    			<div label_pair_match="6" anchor_position="1" num_links="0" class="left_position_right_anchor label_pair_anchor_right label_pair_anchor non_display">
	    				
	    			</div>	
	    			<!--<div label_pair_match="6" anchor_position="2" class="left_position_bottom_anchor label_pair_anchor_bottom label_pair_anchor non_display">
	    				
	    			</div>	-->
	    		</div>
	    	</div>
  			<div id="controllers_images_container">
  				<div id="controllers_image_container">
  					<img id="controllers_image" src="res/img/playstation3_controller.svg" 
  					class="svg img-responsive center-block max_height" alt="Controller IMAGE">
  				</div>
			    
	    	</div>
  			
	    	<div id="right_text_container">
	    		<div id="label_pair" class="label_pair">
	    			<div label_pair_match="11" class="right_position_label label_pair_texts_container non_display half_visible">
	    				<input name="game_title" class="h5 text-center center-block 
	    				description_first_language_button_text right_position_text" value="" 
	    				placeholder="Description in native language" type="text">
			  			<input name="game_title_secondary" class="h5 text-center center-block 
			  			description_second_language_button_text right_position_text" value="" 
			  				placeholder="Description in English" type="text">
	    			</div>
	    			<div label_pair_match="11" anchor_position="1" num_links="0" class="right_position_right_anchor label_pair_anchor_right label_pair_anchor non_display">
	    				
	    			</div>	
	    			<!--<div label_pair_match="11" anchor_position="2" class="right_position_bottom_anchor label_pair_anchor_bottom label_pair_anchor non_display">
	    				
	    			</div>	-->
	    		</div>
	    		<div id="label_pair" class="label_pair">
	    			<div label_pair_match="12" class="right_position_label label_pair_texts_container non_display half_visible">
	    				<input name="game_title" class="h5 text-center center-block 
	    				description_first_language_button_text right_position_text" value="" 
	    				placeholder="Description in native language" type="text">
			  			<input name="game_title_secondary" class="h5 text-center center-block 
			  			description_second_language_button_text right_position_text" value="" 
			  				placeholder="Description in English" type="text">
	    			</div>
	    			<div label_pair_match="12" anchor_position="1" num_links="0" class="right_position_right_anchor label_pair_anchor_right label_pair_anchor non_display">
	    				
	    			</div>	
	    			<!--<div label_pair_match="12" anchor_position="2" class="right_position_bottom_anchor label_pair_anchor_bottom label_pair_anchor non_display">
	    				
	    			</div>	-->
	    		</div>
	    		<div class="label_pair">
	    			<div label_pair_match="13" class="right_position_label label_pair_texts_container non_display half_visible">
	    				<input name="game_title" class="h5 text-center center-block 
	    				description_first_language_button_text right_position_text" value="" 
	    				placeholder="Description in native language" type="text">
			  			<input name="game_title_secondary" class="h5 text-center center-block 
			  			description_second_language_button_text right_position_text" value="" 
			  				placeholder="Description in English" type="text">
	    			</div>
	    			<div label_pair_match="13" anchor_position="1" num_links="0" class="right_position_right_anchor label_pair_anchor_right label_pair_anchor non_display">
	    				
	    			</div>	
	    			<!--<div label_pair_match="13" anchor_position="2" class="right_position_bottom_anchor label_pair_anchor_bottom label_pair_anchor non_display">
	    				
	    			</div>	-->
	    		</div>
	    		<div class="label_pair">
	    			<div label_pair_match="14" class="right_position_label label_pair_texts_container non_display half_visible">
	    				<input name="game_title" class="h5 text-center center-block 
	    				description_first_language_button_text right_position_text" value="" 
	    				placeholder="Description in native language" type="text">
			  			<input name="game_title_secondary" class="h5 text-center center-block 
			  			description_second_language_button_text right_position_text" value="" 
			  				placeholder="Description in English" type="text">
	    			</div>
	    			<div label_pair_match="14" anchor_position="1" num_links="0" class="right_position_right_anchor label_pair_anchor_right label_pair_anchor non_display">
	    				
	    			</div>	
	    			<!--<div label_pair_match="14" anchor_position="2" class="right_position_bottom_anchor label_pair_anchor_bottom label_pair_anchor non_display">
	    				
	    			</div>	-->
	    		</div>
	    		<div class="label_pair">
	    			<div label_pair_match="15" class="right_position_label label_pair_texts_container non_display half_visible">
	    				<input name="game_title" class="h5 text-center center-block 
	    				description_first_language_button_text right_position_text" value="" 
	    				placeholder="Description in native language" type="text">
			  			<input name="game_title_secondary" class="h5 text-center center-block 
			  			description_second_language_button_text right_position_text" value="" 
			  				placeholder="Description in English" type="text">
	    			</div>
	    			<div label_pair_match="15" anchor_position="1" num_links="0" class="right_position_right_anchor label_pair_anchor_right label_pair_anchor non_display">
	    				
	    			</div>	
	    			<!--<div label_pair_match="15" anchor_position="2" class="right_position_bottom_anchor label_pair_anchor_bottom label_pair_anchor non_display">
	    				
	    			</div>	-->
	    		</div>
	    		<div class="label_pair">
	    			<div label_pair_match="16" class="right_position_label label_pair_texts_container non_display half_visible">
	    				<input name="game_title" class="h5 text-center center-block 
	    				description_first_language_button_text right_position_text" value="" 
	    				placeholder="Description in native language" type="text">
			  			<input name="game_title_secondary" class="h5 text-center center-block 
			  			description_second_language_button_text right_position_text" value="" 
			  				placeholder="Description in English" type="text">
	    			</div>
	    				    			
	    			<div label_pair_match="16" anchor_position="1" num_links="0" class="right_position_right_anchor label_pair_anchor_right label_pair_anchor non_display">
	    				
	    			</div>	
	    			<!--<div label_pair_match="16" anchor_position="2" class="right_position_bottom_anchor label_pair_anchor_bottom label_pair_anchor non_display">
	    				
	    			</div>	-->
	    		</div>
	    	</div>
	    	
	    	<div id="number_players_container">
		    	<div id="number_players_image_container">
		    		<img id="players_image" src="res/img/players.png" 
				class="img-responsive center-block max_height" alt="Controller IMAGE">
		    	</div>
	    		
	    		<div id="number_players_inputs_container">
	    			<input id="number_players_min_text" name="number_players_min" class="h1 text-center center-block" 
  					value="1" placeholder="Write your Game Title here" type="text">
  					<div id="number_players_line_text_container">
  						<div id="number_players_line_text" class="h1 text-center center-block">-</div>
					</div>
  					<input id="number_players_max_text" name="number_players_max" class="h1 text-center center-block" 
  					value="2" placeholder="Write your Game Title here" type="text">
	    		</div>
				
	    	</div>
  			
  		</div>
  		<div id="container_bottom" class="center-block">
  			
  			<input id="description_first_language_text" name="game_title" class="h3 text-center center-block" 
  				value="" 
  				placeholder="Write a short description of the gameplay in the native language" type="text">
  			<input id="description_second_language_text" name="game_title" class="h3 text-center center-block" 
  				value="" 
  				placeholder="Write a short description of the gameplay in English" type="text">
  		</div>
  		
  		
  	</div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
    	
		var xanto_explorer;

    	var buttonActive = "none";
    	
    	/*
    	 * Database GameTemplate Object Architecture:
    	 * 
    	 * gameId ** Not passed, created automatically by db
    	 * creationDate ** Not passed, created automatically by db
    	 * 
    	 * gameTitle = String 
    	 * gameCreator = String
    	 * controllerChosen = String
    	 * minGamePlayers = String
    	 * maxGamePlayers = String
    	 * 
    	 * gameDescriptionPrimary = String 
    	 * gameDescriptionSecondary = String
    	 * 
    	 * gameLabelsTextPrimary = String ( format: label_pair_match;label_text#label_pair_match;label_text)
    	 * 									; separates attributes, # separates elements
    	 * 									Ex: 1;Jump/Strafe*12;Hide )
    	 * gameLabelsTextSecondary = String ( format: same as gameLabelsTextPrimary)
    	 * 
    	 * gameLabelLinks = String ( format: selectedAnchorCommonId;selectedAnchorPositionId;selectedButtonId* 
    	 * 							Ex: 1;2;LeftAnalog)
    	 * 
    	 * gameColorScheme = String
    	 * gameColorLines = String
    	 * 
    	 */
    	
    	/* DrawnLine Object Architecture:
    	 * 
    	 * Fields that would be parsed on Json as save state for the server
    	 * 
    	 * "renderedLineObject":jsGraphicsObject,
    	 * "chosenControllerId":"playstation3_controller",
    	 * "selectedButtonId":"LeftAnalog",
    	 * "selectedAnchorCommonId":"1" Where 1 is the shared label_pair_mark 
    	 * "selectedAnchorPositionId":"2" Where 1 indicates right anchor, 2 indicates bottom anchor
    	 * 
    	 * Fields to use while operating with the app (after loading from server)
    	 * 
    	 * "selectedButton": selectedButtonObject,
    	 * "selectedAnchor": selectedAnchorObject
    	 * 
    	 */
    	    	
    	var drawnLineArray = [];
    	
    	var blueLineCoords = [856,368,359,339];
    	
    	$(document).ready(function(){
		
    		function reload_screen(){
    	
			  location.reload(true);
			}
			//setTimeout(reload_screen, 250);
	    	
	    	prepareSvgControllerImage();
	    	
			//Change Controller Selection
			
			$(".controller_item").click(function(){
				
				var controller_name = $(this).attr("controller_name");
				
				resetAllObjectValues();
				
				replaceSvgControllerImageForSource("res/img/"+controller_name+".svg");
				
				prepareSvgControllerImage();
				
			});
	    	
	    	function replaceSvgControllerImageForSource(image_sourcepath)
	    	{
	    		
	    		/*
	    		 * Delete existing SVG Controller element
	    		 */
	    		$("#controllers_image").remove();
	    		
	    		var s = "<img id='controllers_image' src='"+image_sourcepath+"'";
	    		s += "class='svg img-responsive center-block max_height' alt='Controller IMAGE'>";

				$("#controllers_image_container").append(s);
	    				
	    	}
	    	
	    	function prepareSvgControllerImage()
	    	{
	    		
	    		/*
				 * Replace all SVG images with inline SVG
				 */
				$('#controllers_image').each(function(){
				    var $img = jQuery(this);
				    var imgID = $img.attr('id');
				    var imgClass = $img.attr('class');
				    var imgURL = $img.attr('src');
				
				    $.get(imgURL, function(data) {
				        // Get the SVG tag, ignore the rest
				        var $svg = $(data).find('svg');
				
				        // Add replaced image's ID to the new SVG
				        if(typeof imgID !== 'undefined') {
				            $svg = $svg.attr('id', imgID);
				        }
				        // Add replaced image's classes to the new SVG
				        if(typeof imgClass !== 'undefined') {
				            $svg = $svg.attr('class', imgClass+' replaced-svg');
				        }
				
				        // Remove any invalid XML tags as per http://validator.w3.org
				        $svg = $svg.removeAttr('xmlns:a');
				
				        // Replace image with new SVG
				        $img.replaceWith($svg);
				
				        // Add a handler
				        $('path').each(function() {
				        				        	
				        	//On SVG Element Click
				            $(this).click(function() {
				            			
				            	var id = $(this).attr('id');
				            			            				            	
				            	$('path').each(function(){
				            		
				            		if($(this).attr('id') != id)
				            		{
				            			$(this).attr("stroke","none");
				            			$(this).attr("stroke-width","6");
				            		}
				            					            		
				            	});
				            	
				            	destroyDrawnLineObject(id);
				            	
				            	if($(this).attr("stroke") == "red")
				            	{
				            		buttonActive = "none";
				            		
				            		$(this).attr("stroke","none");
				            		$(this).attr("stroke-width","8");
				            		
				            		$(".label_pair_anchor_right").each(function(){
				            		
				            			$(this).addClass("non_display");
					            	});
					            	
					            	$(".label_pair_anchor_bottom").each(function(){
					            		
					            		$(this).addClass("non_display");
					            	});
				            	}
				            	else
				            	{
				            					            					            		
				            		buttonActive = id;
				            		
				            		$(this).attr("stroke","red");
				            		$(this).attr("stroke-width","8");
				            		
				            		$(".label_pair_anchor_right").each(function(){
				            		
					            		$(this).removeClass("non_display");
					            	});
					            	
					            	$(".label_pair_anchor_bottom").each(function(){
					            		
					            		$(this).removeClass("non_display");
					            	});
					            	
				            	}
	
				            	
				            });                       
				        });
		
				    });
				});
	    	}
					
			function drawLineFunction(canvas,x1,y1,x2,y2)
			{
				
			  var adapted_x1 = Math.floor(x1);
			  var adapted_x2 = Math.floor(x2);
			  var adapted_y1 = Math.floor(y1);
			  var adapted_y2 = Math.floor(y2);
			  
			  //console.log("x1: "+adapted_x1+" y1: "+adapted_y1+" x2: "+adapted_x2+" y2: "+adapted_y2);
			  
			  //jg_doc.drawPolyline(new Array(50, 10, 120), new Array(10, 50, 70));
			  canvas.setPrintable(true);
			  canvas.setColor("#6699ff");
			  canvas.setStroke(6);
			  canvas.drawLine(adapted_x1, adapted_y1, adapted_x2, adapted_y2);
			  canvas.paint(); // draws, in this case, directly into the document
			
			}

			
			$( window ).resize(function() {
			  
			    updateDrawnLineObjects();
			  
			});
			
			function prepareContainerToPrint()
			{
				$("#container_all").css("height","190mm");
			  	$("#container_all").css("width","285mm");
			  	
			  	updateDrawnLineObjects();
			}
			
			function returnContainerToScreenValues()
			{
				$("#container_all").css("height","100%");
			  	$("#container_all").css("width","100%");
			  	
			  	updateDrawnLineObjects();
			}
			
			$("#print_button").click(function(){
				
				prepareContainerToPrint();
			  		
		  		window.print();
		  		
		  		setTimeout(returnContainerToScreenValues, 10);
			});
			
			$( window ).keypress(function( e) {
			  			  
			  	if(e.which == 13)
			  	{
			  		prepareContainerToPrint();
			  		
			  		window.print();
			  		
			  		setTimeout(returnContainerToScreenValues, 10);

			  	}

			});
			
			function createNewDrawnLineObject(selectedButtonId,selectedAnchorCommonId,selectedAnchorPositionId,
				selectedButton,selectedAnchor)
			{
				var jsGraphCanvas = new jsGraphics("container_all");
								
				var newDrawnLineObject = new Object();
			            		
			    newDrawnLineObject.renderedLineObject = jsGraphCanvas;
        		newDrawnLineObject.selectedButtonId = selectedButtonId;
        		newDrawnLineObject.selectedAnchorCommonId = selectedAnchorCommonId;
        		newDrawnLineObject.selectedAnchorPositionId = selectedAnchorPositionId;
        		
        		newDrawnLineObject.selectedButton = selectedButton;
        		newDrawnLineObject.selectedAnchor = selectedAnchor;
        		
        		drawnLineArray.push(newDrawnLineObject);
			}
			
			function resetAllObjectValues()
			{
				destroyAllDrawnLineObjects();
				
				$('.label_pair_texts_container').addClass("non_display").addClass("half_visible");
				$('.label_pair_anchor').attr("num_links","0");
				$('.label_pair_anchor').removeClass("completed_link");
			}
			
			function destroyAllDrawnLineObjects()
			{
				var newArray = [];
				
				for(var i = 0; i < drawnLineArray.length; i++) {
				    
				    	drawnLineArray[i].renderedLineObject.clear();
				    	
				}
				
				drawnLineArray = newArray;
				

			}
			
			function destroyDrawnLineObject(id_string)
			{
				var newArray = [];
				
				for(var i = 0; i < drawnLineArray.length; i++) {
				    
				
				    if(drawnLineArray[i].selectedButtonId != id_string) {
				        
				        newArray.push(drawnLineArray[i]);
				    }
				    else
				    {
				    	drawnLineArray[i].renderedLineObject.clear();
				    	
				    	var num_links = parseInt(drawnLineArray[i].selectedAnchor.attr("num_links"));
							drawnLineArray[i].selectedAnchor.attr("num_links",""+(num_links-1));
				    	
				    	if(parseInt(drawnLineArray[i].selectedAnchor.attr("num_links"))<1)
				    	{
				    		drawnLineArray[i].selectedAnchor.removeClass("completed_link");
				    		
				    		var label_pair_texts_container = $('.label_pair_texts_container[label_pair_match='
				    		+drawnLineArray[i].selectedAnchorCommonId+']');
				    		
				    		label_pair_texts_container.addClass("non_display").addClass("half_visible");
				    	}
				    	
				    	
				    					    	
				    	/*if(!$('.label_pair_anchor.completed_link[label_pair_match='
				    	+drawnLineArray[i].selectedAnchorCommonId+']').length)
				    	{

				    		var label_pair_texts_container = $('.label_pair_texts_container[label_pair_match='
				    		+drawnLineArray[i].selectedAnchorCommonId+']');
				    		
				    		label_pair_texts_container.addClass("non_display").addClass("half_visible");
				    	}*/
				    	
				    	
				    }
				}
				
				drawnLineArray = newArray;
			}
			
			function updateDrawnLineObjects()
			{				
				for(var i=0;i<drawnLineArray.length;i++)
				{
					var selected_button_bounding_box = drawnLineArray[i].selectedButton.getBoundingClientRect();

					var x_value = selected_button_bounding_box.x;
					
					if(x_value == null) x_value = selected_button_bounding_box.left;	
					
					var y_value = selected_button_bounding_box.y;
					
					if(y_value == null) y_value = selected_button_bounding_box.top;
							
					drawnLineArray[i].renderedLineObject.clear();
								
					var $label_pair_anchor = drawnLineArray[i].selectedAnchor;
																					
					drawLineFunction(drawnLineArray[i].renderedLineObject,
						x_value + (selected_button_bounding_box.width/2), 
						y_value + (selected_button_bounding_box.height/2),
						$label_pair_anchor.offset().left + ($label_pair_anchor.width()/2), 
						$label_pair_anchor.offset().top + ($label_pair_anchor.height()/2));
				}
			}
			
			//Function that occurs when linking a Button with a Laber Pair Anchor
						
			$('.label_pair_anchor').click(function(){
							
				if(buttonActive != "none")
				{
					var selected_button = document.getElementById(buttonActive);
				
					var selected_button_bounding_box = selected_button.getBoundingClientRect();
					
					var $label_pair_anchor = $(this);
	
					var label_pair_match = $label_pair_anchor.attr("label_pair_match");
					
					var anchor_position = $label_pair_anchor.attr("anchor_position");
					
					var label_pair_texts_container = $('.label_pair_texts_container[label_pair_match='+label_pair_match+']');
											
					createNewDrawnLineObject(buttonActive,label_pair_match,anchor_position,
						selected_button,$label_pair_anchor);
									
					updateDrawnLineObjects();
						
					label_pair_texts_container.removeClass("non_display").removeClass("half_visible");
					
					var num_links = parseInt($label_pair_anchor.attr("num_links"));
					$label_pair_anchor.attr("num_links",""+(num_links+1));
					$label_pair_anchor.addClass("completed_link");
					
					buttonActive = "none";
				            		
				    $('path').each(function(){
	        		
	        			$(this).attr("stroke","none");
	        			$(this).attr("stroke-width","8");
	            	});
	
	        		$(".label_pair_anchor_right").each(function(){
	        		
	        			$(this).addClass("non_display");
	            	});
	            	
	            	$(".label_pair_anchor_bottom").each(function(){
	            		
	            		$(this).addClass("non_display");
	            	});

				}
							
			});
			
			
			    		
    	});
    	
    	
    	
    </script>
  </body>
</html>