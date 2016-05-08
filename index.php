
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
						
			
			<div id="choose_controller_dropdown" class="dropdown">
			  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose Controller
			  <span class="caret"></span></button>
			  <ul class="dropdown-menu">
			    <li class="controller_item selected" controller_name="xbox360_controller"><img class="image-responsive controller_thumbnail" src="res/img/xbox360_controller.png" > XBOX360</li>
			    <li class="controller_item" controller_name="playstation3_controller"><img class="image-responsive controller_thumbnail" src="res/img/playstation3_controller.png" > PLAYSTATION3</li>
			  </ul>
			</div>
			
			<div id="choose_color_scheme_dropdown" class="dropdown">
			  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose Color Scheme
			  <span class="caret"></span></button>
			  <ul class="dropdown-menu">
			    <li class="color_scheme_row selected" colors="#000000;#6699ff" color_scheme="1"><div color_scheme="1" color_value = "#000000" class="color_scheme_display color_thumbnail"></div><div color_scheme="1" color_value = "#6699ff" class="color_scheme_lines_display color_thumbnail"></div><div class="color_scheme_text">Black with Blue Lines</div></li>
			    <li class="color_scheme_row" colors="#005580;#33cc33"  color_scheme="2"><div color_scheme="2" color_value = "#005580" class="color_scheme_display color_thumbnail"></div><div color_scheme="2" color_value = "#33cc33" class="color_scheme_lines_display color_thumbnail"></div><div class="color_scheme_text">Blue with Green Lines</div></li>
			  	<li class="color_scheme_row" colors="#cc0099;#6699ff"  color_scheme="3"><div color_scheme="3" color_value = "#cc0099" class="color_scheme_display color_thumbnail"></div><div color_scheme="3" color_value = "#6699ff" class="color_scheme_lines_display color_thumbnail"></div><div class="color_scheme_text">Purple with Blue Lines</div></li>

			  </ul>
			</div>

	  		<div id="print_button" type="button" class="btn btn-primary">
	  			Print Now!
	  		</div>
	  		
  			<div id="load_button" type="button" class="btn btn-primary">
	  			Load!
	  		</div>
	  		
	  		<input id="search_text" name="search_text" class="h5 text-center" 
  			value="Best Game Ever" placeholder="Search by Game Title" type="text">
  			
  			<div id="save_button" type="button" class="btn btn-primary">
	  			Save!
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
	    				<input label_pair_match="1" name="first_description" class="h5 text-center center-block 
	    				description_first_language_button_text left_position_text" value="" 
	    				placeholder="Description in native language" type="text">
			  			<input label_pair_match="1" name="second_description" class="h5 text-center center-block 
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
	    				<input label_pair_match="2" name="first_description" class="h5 text-center center-block 
	    				description_first_language_button_text left_position_text" value="" 
	    				placeholder="Description in native language" type="text">
			  			<input label_pair_match="2" name="second_description" class="h5 text-center center-block 
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
	    				<input label_pair_match="3" name="first_description" class="h5 text-center center-block 
	    				description_first_language_button_text left_position_text" value="" 
	    				placeholder="Description in native language" type="text">
			  			<input label_pair_match="3" name="second_description" class="h5 text-center center-block 
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
	    				<input label_pair_match="4" name="first_description" class="h5 text-center center-block 
	    				description_first_language_button_text left_position_text" value="" 
	    				placeholder="Description in native language" type="text">
			  			<input label_pair_match="4" name="second_description" class="h5 text-center center-block 
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
	    				<input label_pair_match="5" name="first_description" class="h5 text-center center-block 
	    				description_first_language_button_text left_position_text" value="" 
	    				placeholder="Description in native language" type="text">
			  			<input label_pair_match="5" name="second_description" class="h5 text-center center-block 
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
	    				<input label_pair_match="6" name="first_description" class="h5 text-center center-block 
	    				description_first_language_button_text left_position_text" value="" 
	    				placeholder="Description in native language" type="text">
			  			<input label_pair_match="6" name="second_description" class="h5 text-center center-block 
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
  					<img id="controllers_image" src="res/img/xbox360_controller.svg" 
  					class="svg img-responsive center-block max_height" alt="Controller IMAGE">
  				</div>
			    
	    	</div>
  			
	    	<div id="right_text_container">
	    		<div id="label_pair" class="label_pair">
	    			<div label_pair_match="11" class="right_position_label label_pair_texts_container non_display half_visible">
	    				<input label_pair_match="11" name="first_description" class="h5 text-center center-block 
	    				description_first_language_button_text right_position_text" value="" 
	    				placeholder="Description in native language" type="text">
			  			<input label_pair_match="11" name="second_description" class="h5 text-center center-block 
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
	    				<input label_pair_match="12" name="first_description" class="h5 text-center center-block 
	    				description_first_language_button_text right_position_text" value="" 
	    				placeholder="Description in native language" type="text">
			  			<input label_pair_match="12" name="second_description" class="h5 text-center center-block 
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
	    				<input label_pair_match="13" name="first_description" class="h5 text-center center-block 
	    				description_first_language_button_text right_position_text" value="" 
	    				placeholder="Description in native language" type="text">
			  			<input label_pair_match="13" name="second_description" class="h5 text-center center-block 
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
	    				<input label_pair_match="14" name="first_description" class="h5 text-center center-block 
	    				description_first_language_button_text right_position_text" value="" 
	    				placeholder="Description in native language" type="text">
			  			<input label_pair_match="14" name="second_description" class="h5 text-center center-block 
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
	    				<input label_pair_match="15" name="first_description" class="h5 text-center center-block 
	    				description_first_language_button_text right_position_text" value="" 
	    				placeholder="Description in native language" type="text">
			  			<input label_pair_match="15" name="second_description" class="h5 text-center center-block 
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
	    				<input label_pair_match="16" name="first_description" class="h5 text-center center-block 
	    				description_first_language_button_text right_position_text" value="" 
	    				placeholder="Description in native language" type="text">
			  			<input label_pair_match="16" name="second_description" class="h5 text-center center-block 
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
    	    	
    	  
    	var buttonActive = "none";
    	
    	var controllerChosen = "xbox360_controller";
    	
    	var gameColorScheme = "#000000";
    	var gameColorLines = "#6699ff";
    	    	
    	var drawnLineArray = [];
    	
    	var blueLineCoords = [856,368,359,339];
    	
    	$(document).ready(function(){
		
    		function reload_screen(){
    	
			  location.reload(true);
			}
			//setTimeout(reload_screen, 250);
	    	
	    	prepareSvgControllerImage();
	    	
	    	createAnchorsEventListener();
	    	
	    	implementChangesInColorScheme();
	    	
			//Change Controller Selection
			
			$(".controller_item").click(function(){
				
				var controller_name = $(this).attr("controller_name");
				
				resetAllObjectValues();
				
				replaceSvgControllerImageForSource("res/img/"+controller_name+".svg");
				
				controllerChosen = controller_name;
				
				prepareSvgControllerImage();
				
				$(".controller_item").each(function(){
					
					$(this).removeClass("selected");
					
				});
				
				$(this).addClass("selected");
				
			});
			
			//Preparing the Default Color Scheme Thumbnails
			
			$(".color_thumbnail").each(function(){
				
				var color_value_hexadecimal = $(this).attr("color_value");
				
				$(this).css("background-color",color_value_hexadecimal);
				
			});
		
			
			//Changing color of elements by Color Scheme
			
			$(".color_scheme_row").click(function(){
				
				$(".color_scheme_row").each(function(){
					
					$(this).removeClass("selected");
					
				});
				
				$(this).addClass("selected");

				var color_scheme_id = $(this).attr("color_scheme");
				
				var color_value_scheme = $(".color_scheme_display[color_scheme='"+color_scheme_id+"']").attr("color_value");
				var color_value_lines = $(".color_scheme_lines_display[color_scheme='"+color_scheme_id+"']").attr("color_value");
			
				gameColorScheme = color_value_scheme;
				
				gameColorLines = color_value_lines;
			
				implementChangesInColorScheme();
			
			});
		
			function implementChangesInColorScheme()
			{
				//Changing color of Game Title and SVG's
				
				$("#game_title_text").css("color",gameColorScheme);
				
				$("#controllers_image").css("fill",gameColorScheme);

				//Changing color of the Lines
				
				updateDrawnLineObjects();
				
				//Select the appropriate cell in Color Choosing Dropdown Menu
				
				$(".color_scheme_row").each(function(){
					
					$(this).removeClass("selected");
					
				});
				
				$(".color_scheme_row[colors='"+gameColorScheme+";"+gameColorLines+"']").addClass("selected");
				
			}
					
			//loadTemplateByStringAndProperty("gameTitle","Best Game Ever");
			
			//loadTemplateByStringAndProperty("gameTitle","Best Game Ever");
			
			$("#load_button").click(function(){
				
				var search_property = "gameTitle";
				
				var search_value = $("#search_text").val();
				
				loadTemplateByStringAndProperty(search_property,search_value);
				
			});
			
			function loadTemplateByStringAndProperty(property,string_value)
			{
				  $.ajax({  
				    type: "POST",  
				    url: "src/php/return_template_information.php",  
				    data: { 'string_value':string_value,'property':property},      
				    success: function(json_data){ // <-- note the parameter here, not in your code
				       //$('#box2').html(data);
				       console.log(json_data);
				       
				       onLoadInitiateNewController(json_data);
				       //onLoadEmbedValuesAndLines(json_data);
				       
				    },
				    error: function() {
			
				    }
				});
				    	
			}
			
			function onLoadInitiateNewController(json_data)
			{
				var parsed_data = $.parseJSON(json_data);
		
				//Getting the chosen controller, clearing the canvas and changing it for the new one
				
				var controller_name = parsed_data.controllerChosen;
				
				controllerChosen = controller_name;
				
				$(".controller_item").each(function(){
					
					$(this).removeClass("selected");
					
				});
				
				$(".controller_item[controller_name='"+controller_name+"']").addClass("selected");
				
				resetAllObjectValues();
			
				replaceSvgControllerImageForSource("res/img/"+controller_name+".svg");
								
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
				
				    }).done(function() {
				    	
					    onLoadEmbedValuesAndLines(parsed_data);
					    
						updateDrawnLineObjects();
								
						prepareSvgClickEvents();

					 });
				});

			}
			
			function onLoadEmbedValuesAndLines(parsed_data)
			{
				
				//Embedding Text Values in their appropriate places for Title, Creator
				//Min Players, Max Players, First Description and Second Description
				
				$("#game_title_text").val(parsed_data.gameTitle);
				$("#creator_name_text").val(parsed_data.gameCreator);
				
				$("#number_players_min_text").val(parsed_data.minGamePlayers);
				$("#number_players_max_text").val(parsed_data.maxGamePlayers);
				
				$("#description_first_language_text").val(parsed_data.gameDescriptionPrimary);
				$("#description_second_language_text").val(parsed_data.gameDescriptionSecondary);
				
				//Embedding Text Values for all active labels and making them visible
				
				if(parsed_data.gameLabelsTextPrimary!="")
				{
					var activeLabelsPrimaryArray = parsed_data.gameLabelsTextPrimary.split("*");
				
					for(var i=0;i < activeLabelsPrimaryArray.length; i++)
					{
						var dividedData = activeLabelsPrimaryArray[i].split(";");
						
						var label_pair_match = dividedData[0];
						var label_text = dividedData[1];
						
						var $matched_label_pair = $(".label_pair_texts_container[label_pair_match="+label_pair_match+"]");
						var $matched_label_primary = $(".description_first_language_button_text[label_pair_match="+label_pair_match+"]");
					
						$matched_label_pair.removeClass("non_display").removeClass("half_visible");
						$matched_label_primary.val(label_text);
					}
				}
				
				
				if(parsed_data.gameLabelsTextSecondary!="")
				{
					var activeLabelsSecondaryArray = parsed_data.gameLabelsTextSecondary.split("*");
					
					for(var i=0;i < activeLabelsSecondaryArray.length; i++)
					{
						var dividedData = activeLabelsSecondaryArray[i].split(";");
						
						var label_pair_match = dividedData[0];
						var label_text = dividedData[1];
						
						var $matched_label_secondary = $(".description_second_language_button_text[label_pair_match="+label_pair_match+"]");
					
						$matched_label_secondary.val(label_text);
					}
				}
				
				if(parsed_data.gameLabelLinks!="")
				{
					//Making the appropriate anchors visible, then linking anchors and buttons,
					//then giving the appropriate classes to anchors (make them visible)
					
					var labelLinksArray = parsed_data.gameLabelLinks.split("*");
					
					for(var i=0;i < labelLinksArray.length; i++)
					{
						var dividedData = labelLinksArray[i].split(";");
						
						var selectedAnchorCommonId = dividedData[0];
						var selectedAnchorPositionId = dividedData[1];
						var selectedButtonId = dividedData[2];
						
						var $matched_anchor = $(".label_pair_anchor[label_pair_match="+selectedAnchorCommonId+
						"][anchor_position="+selectedAnchorPositionId+"]");
																												
						var selected_button = document.getElementById(selectedButtonId);
					
						var selected_button_bounding_box = selected_button.getBoundingClientRect();
																					
						createNewDrawnLineObject(selectedButtonId,selectedAnchorCommonId,selectedAnchorPositionId,
							selected_button,$matched_anchor);
							
										
						var num_links = parseInt($matched_anchor.attr("num_links"));
						$matched_anchor.attr("num_links",""+(num_links+1));
						$matched_anchor.addClass("completed_link");
						
					}
				}
				
				//If Color Scheme has a value (hexadecimal, hopefully)
				if(parsed_data.gameColorScheme!="")
				{
					gameColorScheme = parsed_data.gameColorScheme;
					
				}
				
				//If Color Lines has a value
				if(parsed_data.gameColorLines!="")
				{
					gameColorLines = parsed_data.gameColorLines;
					
				}
				
				implementChangesInColorScheme();
				
			}
	    	
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
	    		    	
	    	//Assigning click event to Save Button
	    	
	    	$("#save_button").click(function(){
	    		
	    		onSaveTemplateToDatabase();
	    		
	    	});
	    		    	
	    	function onSaveTemplateToDatabase()
			{
			
				var completed_necessary_fields = true;
				
				var gameTemplateObject = new Object();
				
				gameTemplateObject.controllerChosen = controllerChosen;
				
				gameTemplateObject.gameTitle = $("#game_title_text").val();
				gameTemplateObject.gameCreator = $("#creator_name_text").val();
				
				if(controllerChosen.length == 0 || controllerChosen == "none" ||
				gameTemplateObject.gameTitle == "")
				{
					completed_necessary_fields = false;
				}
				else
				{
					gameTemplateObject.minGamePlayers = $("#number_players_min_text").val();
					gameTemplateObject.maxGamePlayers = $("#number_players_max_text").val();
					
					gameTemplateObject.gameDescriptionPrimary = $("#description_first_language_text").val();
					gameTemplateObject.gameDescriptionSecondary = $("#description_second_language_text").val();
					
					
					var gameLabelsTextPrimary = "";
					var gameLabelsTextSecondary = "";
					
					var gameLabelLinks = "";
					
					for(var i=0; i<drawnLineArray.length;i++)
					{
						var label_pair_match = drawnLineArray[i].selectedAnchorCommonId;
						
						var $matched_label_primary_text = $(".description_first_language_button_text[label_pair_match="+label_pair_match+"]").val();
						var $matched_label_secondary_text = $(".description_second_language_button_text[label_pair_match="+label_pair_match+"]").val();
				
						if($matched_label_primary_text != "")
						{
							if(gameLabelsTextPrimary != "") gameLabelsTextPrimary += "*";
							
							gameLabelsTextPrimary += label_pair_match+";"+$matched_label_primary_text;
							
							if($matched_label_secondary_text != "")
							{
								if(gameLabelsTextSecondary != "") gameLabelsTextSecondary += "*";
								
								gameLabelsTextSecondary += label_pair_match+";"+$matched_label_secondary_text;
							}
							
							if(gameLabelLinks != "") gameLabelLinks += "*";
							
							gameLabelLinks += label_pair_match+";"+drawnLineArray[i].selectedAnchorPositionId+
							";"+drawnLineArray[i].selectedButtonId;
		    				
						}
						
				
					}
					
					gameTemplateObject.gameLabelsTextPrimary = gameLabelsTextPrimary;
					gameTemplateObject.gameLabelsTextSecondary = gameLabelsTextSecondary;
					gameTemplateObject.gameLabelLinks = gameLabelLinks;
					
					gameTemplateObject.gameColorScheme = gameColorScheme;
					gameTemplateObject.gameColorLines = gameColorLines;
	        		
				}
				
				if(completed_necessary_fields)
				{
					console.log(gameTemplateObject);
					
					$.ajax({  
					    type: "POST",  
					    url: "src/php/save_template_information.php",  
					    data: { 
					    	'controllerChosen':gameTemplateObject.controllerChosen,
					    	'gameTitle':gameTemplateObject.gameTitle,
					    	'gameCreator':gameTemplateObject.gameCreator,
					    	'minGamePlayers':gameTemplateObject.minGamePlayers,
					    	'maxGamePlayers':gameTemplateObject.maxGamePlayers,
					    	'gameDescriptionPrimary':gameTemplateObject.gameDescriptionPrimary,
					    	'gameDescriptionSecondary':gameTemplateObject.gameDescriptionSecondary,
					    	'gameLabelsTextPrimary':gameTemplateObject.gameLabelsTextPrimary,
					    	'gameLabelsTextSecondary':gameTemplateObject.gameLabelsTextSecondary,
					    	'gameLabelLinks':gameTemplateObject.gameLabelLinks,
					    	'gameColorScheme':gameTemplateObject.gameColorScheme,
					    	'gameColorLines':gameTemplateObject.gameColorLines
					    	},      
					    success: function(message){ // <-- note the parameter here, not in your code

					       console.log(message);
					       
					       
					    },
					    error: function() {
				
							console.log("FAIL SAVE INCOMPLETE DETAILS");
					    }
					});
				}
				else
				{
					console.log("FAIL SAVE");
				}
				

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
				
				        prepareSvgClickEvents();
		
				    });
				});
	    	}
					
			function prepareSvgClickEvents()
			{
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
			  canvas.setColor(gameColorLines);
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
				
				/*:after {
    				color: #000 !important;
    			}*/
    			
    			var desired_title_color = $("#game_title_text").css("color");
    			
				
				$('<style id="print-style-tag" media="print">#game_title_text {color: '+desired_title_color+' !important;}</style>').appendTo('head');
			  	
		  		window.print();
		  		
		  		$('#print-style-tag').remove();
		  		
		  		setTimeout(returnContainerToScreenValues, 10);
			});
			
			$( window ).keypress(function( e) {
			  			  
			  	if(e.which == 13)
			  	{
			  		$("#print_button").click();
			  		

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
			
			function createAnchorsEventListener()
			{
				//Function that occurs when linking a Button with a Laber Pair Anchor
						
				$('.label_pair_anchor').click(function(){
							
					//When a successful link occurs:
						
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
			}
			
			
			
			
			
			
			    		
    	});
    	
    	
    	
    </script>
  </body>
</html>