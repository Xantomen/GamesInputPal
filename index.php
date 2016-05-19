<?php

include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}

mysqli_close($mysqli);

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Games Input Pal</title>
    <link rel="icon" href="res/img/playstation4_controller_pink.ico">

    <!-- Bootstrap -->
    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="src/css/gamesinput_style.css" rel="stylesheet">

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
  				Using @GamesInputPal
	  		</div>
	  		<div id="call_to_action">
  				Make yours!:
	  		</div>
	  		<div id="webpage_name">
	  			<a href="http://xantomen.com/gamesinputpal">http://xantomen.com/gamesinputpal</a>
	  		</div>
	  		<div id="author_name" author_name="">Mapped by</div>
			
		</div>
		<div id="buttons_bar">
									
			<div id="choose_controller_dropdown" class="dropdown">
			  <button title="Choose Controller" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
			  <div id="controller_button_image"></div><span class="caret button_arrow"></span></button>
			  <ul class="dropdown-menu">
			    <li class="controller_item selected" controller_name="xbox360_controller"><img class="image-responsive controller_thumbnail" src="res/img/xbox360_controller.png" > XBOX360</li>
			    <li class="controller_item" controller_name="playstation4_controller"><img class="image-responsive controller_thumbnail" src="res/img/playstation4_controller.png" > PLAYSTATION4</li>
			  	<li class="controller_item" controller_name="stickofjoy_controller" style="display:none;"><img class="image-responsive controller_thumbnail" src="res/img/stickofjoy_controller.png" > STICK OF JOY</li>
			  </ul>
			</div>
			
			<div id="choose_color_scheme_dropdown" class="dropdown">
			  <button title="Choose Color Scheme" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
			  <div id="color_button_image_container"><span color_scheme="1" color_value = "#000000" id="color_button_image1" class="color_thumbnail"></span><span color_scheme="1" color_value = "#6699ff" id="color_button_image2" class="color_thumbnail"></span></div><span class="caret button_arrow"></span></button>
			  <ul class="dropdown-menu">
			    <li class="color_scheme_row selected" colors="#000000;#6699ff" color_scheme="1"><div color_scheme="1" color_value = "#000000" class="color_scheme_display color_thumbnail"></div><div color_scheme="1" color_value = "#6699ff" class="color_scheme_lines_display color_thumbnail"></div><div class="color_scheme_text">Black with Blue Lines</div></li>
			    <li class="color_scheme_row" colors="#005580;#33cc33"  color_scheme="2"><div color_scheme="2" color_value = "#005580" class="color_scheme_display color_thumbnail"></div><div color_scheme="2" color_value = "#33cc33" class="color_scheme_lines_display color_thumbnail"></div><div class="color_scheme_text">Blue with Green Lines</div></li>
			  	<li class="color_scheme_row" colors="#cc0099;#6699ff"  color_scheme="3"><div color_scheme="3" color_value = "#cc0099" class="color_scheme_display color_thumbnail"></div><div color_scheme="3" color_value = "#6699ff" class="color_scheme_lines_display color_thumbnail"></div><div class="color_scheme_text">Purple with Blue Lines</div></li>

			  </ul>
			</div>
			
			<div id="choose_multiplayer_type_dropdown" class="dropdown">
			  <button title="Choose Playstyle" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
			  <div id="multiplayer_button_image"></div><span class="caret button_arrow"></span></button>
			  <ul class="dropdown-menu">
			    <li class="playstyle_item_row" playstyle="singleplayer" multiplayer_type=""><img class="image-responsive multiplayer_thumbnail" src="res/img/singleplayer.svg" > SINGLEPLAYER</li>
			    <li class="playstyle_item_row selected" playstyle="multiplayer" multiplayer_type=""><img class="image-responsive multiplayer_thumbnail" src="res/img/multiplayer.svg" > MULTIPLAYER</li>
			    <li class="playstyle_item_row" playstyle="multiplayer" multiplayer_type="coop"><img class="image-responsive multiplayer_thumbnail" src="res/img/multiplayer_coop.svg" > COOP</li>
			    <li class="playstyle_item_row" playstyle="multiplayer" multiplayer_type="versus"><img class="image-responsive multiplayer_thumbnail" src="res/img/multiplayer_versus.svg" > VERSUS</li>
			  </ul>
			</div>
			
			
			<div id="search_dropdown" class="dropdown">
			  <button title="Search Options" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
			  <div id="search_button_image"></div><span class="caret button_arrow"></span></button>
			  <ul class="dropdown-menu">
			    <li class="search_row"><input id="search_by_name_text" class="search_row_text h6 text-center center-block" value="" placeholder="Search by game title" type="text"></li>
			    <li class="search_row"><input id="search_by_creator_text" class="search_row_text  h6 text-center center-block" value="" placeholder="Search by game creator" type="text"></li>
			    <li class="search_row"><input id="search_by_controller_text" class="search_row_text  h6 text-center center-block" value="" placeholder="Search by game controller" type="text"></li>
			    <li class="search_row"><input id="search_by_author_text" class="search_row_text  h6 text-center center-block" value="" placeholder="Search by template author" type="text"></li>
			    <li class="search_row"><input id="search_by_numplayers_text" class="search_row_text  h6 text-center center-block" value="" placeholder="Search by num. players (n)" type="text"></li>
			    <li class="search_row"><div id="search_button" class="btn btn-primary center-block">Go!</div></li>
			  </ul>
			</div>
			
			<div id="search_results_dropdown" class="dropdown">
			  <button title="Last Search Results" id="search_results_dropdown_button" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
			  <div id="search_results_button_image"></div><span class="caret button_arrow"></span></button>
			  <ul id="search_results_list" class="dropdown-menu">
			    <li id="search_results_none" class="h6 text-center">
			    	---No Results. Use Search Options first.---
			    </li>
			  </ul>
			</div>
			
			<div id="print_dropdown" class="dropdown">
			  <button title="Print Options" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
			  <div id="print_button_image"></div><span class="caret button_arrow"></span></button>
			  <ul class="dropdown-menu">
			    <li class="print_row">
			    	<?php
			    	if($logged == 'in') {
			    		echo '<input id="author_checkbox" class="template_author_text h6 text-center center-block" value="" type="checkbox" checked>';
			    		echo '<label id="author_checkbox_label" for="author_checkbox"> Include Template Author Name? (If available, has to be a saved template) </label>';
			    	}?>
			    </li>
			   	<li class="print_row"><div title="Or press Enter" id="print_button" class="btn btn-primary center-block">Print/Export Now!</div></li>
			  </ul>
			</div>

	  		
  			<!--<div id="load_button" type="button" class="btn btn-primary">
	  			Load!
	  		</div>-->
	  		
	  		<!--<input id="search_text" name="search_text" class="h5 text-center" 
  			value="Best Game Ever" placeholder="Search by Game Title" type="text">-->
  			
  			<div id="save_dropdown" class="dropdown">
			  <button title="Save Options" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
			  <div id="save_button_image"></div><span class="caret button_arrow"></span></button>
			  <ul class="dropdown-menu">
			    <li class="save_row"><input id="template_author_text" class="template_author_text h6 text-center center-block non_display" value="" placeholder="Your name/nickname (Optional)" type="text"></li>
			   	<li class="save_row"><div id="save_button" class="btn btn-primary center-block">Save New Template!</div></li>
			  	<?php
					if ($logged == 'in') {
						echo '<li class="divider"></li>';
			            echo '<li class="save_row"><div id="update_button" class="btn btn-primary center-block">Overwrite Template!</div></li>';
			        }
		        ?> 
			  </ul>
			</div>
  				  		
	  		<div id="about_dropdown" class="dropdown">
			  <button title="About" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
			  <div id="about_button_image"></div><span class="caret button_arrow"></span></button>
			  <ul id="about_list" class="dropdown-menu">
			  	<li id="about_row" class="h6 text-center">
			    	Built by:
			    </li>
			    <li id="about_row" class="h6 text-center">
			    	Xantomen Nemot
			    </li>
			    <li id="about_row" class="h6 text-center">
			    	@xantomen
			    </li>
			    <li class="divider"></li>
			  	<li id="about_row" class="h6 text-center">
			    	Using the Template Design by:
			    </li>
			    <li id="about_row" class="h6 text-center">
			    	Lorenzo Pilia
			    </li>
			    <li class="divider"></li>
			  	<li id="about_row" class="h6 text-center">
			    	SVG Graphics Credits:
			    </li>
			    <li id="about_row" class="h6 text-center">
			    	Xbox360 Icon by Mark Davis ; The Noun Project
			    </li>
			    <li id="about_row" class="h6 text-center">
			    	Playstation3 Icon by Regan Warner ; The Noun Project
			    </li>
			    <li id="about_row" class="h6 text-center">
			    	Save Icon by Matt Wilson ; The Noun Project
			    </li>
			    <li id="about_row" class="h6 text-center">
			    	Print Icon by Musaplated ; The Noun Project
			    </li>
			    <li id="about_row" class="h6 text-center">
			    	Info Icon by Alex Auda Samora ; The Noun Project
			    </li>
			    <li id="about_row" class="h6 text-center">
			    	Lock Icon by Edward Boatman ; The Noun Project
			    </li>
			    <li class="divider"></li>
			    <li id="about_row" class="h6 text-center">
			    	JS Graphics Library by:
			    </li>
			    <li id="about_row" class="h6 text-center">
			    	Walter Zorn
			    </li>
			    <li class="divider"></li>
			    <li id="about_row" class="h6 text-center">
			    	Also utilizing PHPMailer and phpSecureLogin
			    </li>
			    <li class="divider"></li>
			    <li id="about_row" class="h6 text-center">
			    	Operating under GNU General Public License v3.0
			    </li>
			    <li id="about_row" class="h6 text-center">
			    	Visit the Public Repo <a style="color:blue" href="https://github.com/Xantomen/GamesInputPal">on Github</a>
			    </li>
			    <li class="divider"></li>
			    <li id="about_row" class="h6 text-center">
			    	I reserve the rights to use, alter and distribute  <br> the game/controller data, input maps, <br>
			    	and any other content generated <br> by the use of this app. <br> (Not private personal data (emails)).
			    </li>
			    
			  </ul>
			</div>
			<?php
			
				echo '<div id="account_dropdown" class="dropdown">';
				
				if ($logged == 'in') {
					echo '<button title="Account Options" class="btn btn-primary dropdown-toggle logged_in" type="button" data-toggle="dropdown">';
		            echo '<div id="account_button_image" class="closed"></div><span class="caret button_arrow"></span></button>';
		        }
				else {
					echo '<button title="Account Options" class="btn btn-primary dropdown-toggle logged_out" type="button" data-toggle="dropdown">';
					echo '<div id="account_button_image" class="opened"></div><span class="caret button_arrow"></span></button>';
				}
				
				echo '<ul class="dropdown-menu">';
				
	
				echo '<li class="account_row"><input id="email" class="account_row_text h6 text-center center-block" value="" placeholder="Write your Email here" type="text"/></li>';
				
				if ($logged == 'in') {
					echo '<li class="account_row"><input id="password" class="account_row_text h6 text-center center-block" value="" placeholder="Write your New Password" type="password"/></li>';
				}
				else {
					echo '<li class="account_row"><input id="password" class="account_row_text h6 text-center center-block" value="" placeholder="Write your Password" type="password"/></li>';
				}	
				
				if($logged != 'in') {
					
					echo '<li class="account_row"><div id="login_button" class="btn btn-primary center-block">Login!</div></li>';
					
					echo '<li class="account_row"><input id="username" class="account_row_text h6 text-center center-block" value="" placeholder="Write your Username" type="text"/></li>';
				}
				
				if ($logged == 'in') {
					echo '<li class="account_row"><input id="conf_password" class="account_row_text h6 text-center center-block" value="" placeholder="Write your New Password Again" type="password"/></li>';
				}
				else {
					echo '<li class="account_row"><input id="conf_password" class="account_row_text h6 text-center center-block" value="" placeholder="Write your Password Again" type="password"/></li>';
				}
					
				if ($logged == 'out') {
		           	echo '<li class="account_row"><div id="register_button" class="btn btn-primary center-block">Register!</div></li>';
				}
					
				if ($logged == 'out') {
					echo '<li class="divider"></li>';
		           	echo '<li class="account_row"><div id="resend_verification_button" class="btn btn-primary center-block">Resend Verification!</div></li>';
				}
					
				echo '<li class="account_row"><div id="reset_password_button" class="btn btn-primary center-block">Reset Password!</div></li>';
				
				
				if ($logged == 'in') {
					echo '<li class="divider"></li>';
		            echo '<li class="account_row"><div id="logout_button" class="btn btn-primary center-block">Logout!</div></li>';
		        }
				echo '</ul>';
				echo '</div>';	
	        ?> 

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
	    			<div label_pair_match="1" num_links="0" class="label_pair_anchor_box left_position_right_anchor_box non_display"></div>
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
	    			<div label_pair_match="2" num_links="0" class="label_pair_anchor_box left_position_right_anchor_box non_display"></div>
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
	    			<div label_pair_match="3" num_links="0" class="label_pair_anchor_box left_position_right_anchor_box non_display"></div>
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
	    			<div label_pair_match="4" num_links="0" class="label_pair_anchor_box left_position_right_anchor_box non_display"></div>
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
	    			<div label_pair_match="5" num_links="0" class="label_pair_anchor_box left_position_right_anchor_box non_display"></div>
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
	    				    			
	    			<div label_pair_match="6" num_links="0" class="label_pair_anchor_box left_position_right_anchor_box non_display"></div>
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
	    			<div label_pair_match="11" num_links="0" class="label_pair_anchor_box right_position_left_anchor_box non_display"></div>
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
	    			<div label_pair_match="12" num_links="0" class="label_pair_anchor_box right_position_left_anchor_box non_display"></div>
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
	    			<div label_pair_match="13" num_links="0" class="label_pair_anchor_box right_position_left_anchor_box non_display"></div>
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
	    			<div label_pair_match="14" num_links="0" class="label_pair_anchor_box right_position_left_anchor_box non_display"></div>
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
	    			<div label_pair_match="15" num_links="0" class="label_pair_anchor_box right_position_left_anchor_box non_display"></div>
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
	    			<div label_pair_match="16" num_links="0" class="label_pair_anchor_box right_position_left_anchor_box non_display"></div>	    			
	    			<div label_pair_match="16" anchor_position="1" num_links="0" class="right_position_right_anchor label_pair_anchor_right label_pair_anchor non_display">
	    				
	    			</div>	
	    			<!--<div label_pair_match="16" anchor_position="2" class="right_position_bottom_anchor label_pair_anchor_bottom label_pair_anchor non_display">
	    				
	    			</div>	-->
	    		</div>
	    	</div>
	    	
	    	<div id="number_players_container">
		    	<div id="number_players_image_container">
		    		<img id="players_image" src="res/img/multiplayer.svg"
				class="img-responsive max_height" alt="Controller IMAGE">
		    	</div>
	    		
	    		<div id="number_players_inputs_container">
	    			<input id="number_players_min_text" name="number_players_min" class="h1 text-center center-block" 
  					value="" placeholder="Min" type="number" onkeypress="this.style.width = ((this.value.length + 1) * 10) + 40 + 'px';">
  					<div id="number_players_line_text_container">
  						<div id="number_players_line_text" class="h1 text-center center-block">-</div>
					</div>
  					<input id="number_players_max_text" name="number_players_max" class="h1 text-center center-block" 
  					value="" placeholder="Max" type="number" onkeypress="this.style.width = ((this.value.length + 1) * 10) + 40 + 'px';">
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
  		
  		<div id="alert_messages_modal" class="modal fade in" role="dialog">
		  <div id="alert_messages_modal_dialog" class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 id="alert_modal_header" class="modal-title">Modal Header</h4>
		      </div>
		      <div class="modal-body">
		        <p id="alert_modal_text">Some text in the modal.</p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		
		  </div>
		</div>
  		
  		
  	</div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/JavaScript" src="src/js/sha512.js"></script> 
    <script type="text/JavaScript" src="src/js/ajax_helpers.js"></script> 
    
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
    	 * 
    	 * templateAuthorName = String
    	 * 
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
    	 * playstyleMode = String
    	 * 
    	 */
    	
    	/* DrawnLine Object Architecture:
    	 * 
    	 * Fields that would be parsed on Json as save state for the server
    	 * 
    	 * "renderedLineObject":jsGraphicsObject,
    	 * "chosenControllerId":"playstation4_controller",
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
    	    	
    	var originalUrl = window.location.href.split("#")[0];
    	  
    	var buttonActive = "none";
    	
    	var controllerChosen = "xbox360_controller";
    	
    	var previousControllerChosen = "xbox360_controller";
    	var previousGameTitle = "";
    	
    	var gameColorScheme = "#000000";
    	var gameColorLines = "#6699ff";
    	    	
    	var drawnLineArray = [];
    	
    	var searchResultArray = [];
    	
    	var playstyleMode = "multiplayer";
    	
    	var blueLineCoords = [856,368,359,339];
    	
    	var needsRebootForLogin = false;
    	    	    	
    	$(document).ready(function(){
		
		
			function restart_url() {
				window.location.hash = window.location.hash.split("#")[0];
			}
		
    		function reload_screen(){
    	
    		  //restart_url();
			  location.reload(true);
			}
			//setTimeout(reload_screen, 250);
	    	
	    	/*
	    	 * URL Actions Block
	    	 * 
	    	 * 
	    	 */
	    	
	    	checkUrlForActions();
	    	
	    	function checkUrlForActions()
	    	{
	    		var action = getURLParameter("action");
	    		
	    		switch(action)
	    		{
	    			case "verify":
	    			
	    				$("#alert_modal_header").text("");
						$("#alert_modal_text").text("Verifying Account...");
						$("#alert_messages_modal").modal("show");
	    			
	    				var email = getURLParameter("email");
	    				var hash = getURLParameter("hash");
	    				    			
	    				if(email && hash)
	    				{
			    			$.ajax({  
							    type: "POST",  
							    url: "includes//verify_user_email.php", 
							    data: { 'email':email,
							    'hash':hash },
							    success: function(data){ 
							       
									$("#alert_modal_header").text("ACCOUNT VERIFIED!");
									$("#alert_modal_text").html("We have verified your Account!. Please Log In and enjoy all the advanced features, like Overwriting Templates and Print with/without Author's Name");
									restart_url();
							    },
							    error: function(data) {
									
									$("#alert_modal_header").text("VERIFICATION ERROR!");
									$("#alert_modal_text").html(data);

							    }
							});
							
	    				}

	    			break;
	    			case "request_template":
	    			
	    				var gameTitle = getURLParameter("gameTitle");
	    				var controllerChosen = getURLParameter("controllerChosen");
	    				
	    				if(gameTitle && controllerChosen)
	    				{
	    					requestTemplateByTitleAndController(gameTitle,controllerChosen);	
	    				}
	    				    		
			    	
			    		
			    		break;

	    			case "confirm_reset_password":
	    			
	    				$("#alert_modal_header").text("");
						$("#alert_modal_text").text("Verifying Reset Password Change...");
						$("#alert_messages_modal").modal("show");
	    			
	    				var email = getURLParameter("email");
	    				var hash = getURLParameter("hash");
	    				    			
	    				if(email && hash)
	    				{
			    			$.ajax({  
							    type: "POST",  
							    url: "includes//reset_password.php",
							    data: { 'email':email,
							    'hash':hash },
							    success: function(data){ 
							       
									$("#alert_modal_header").text("PASSWORD CHANGED VERIFIED!");
									$("#alert_modal_text").html("We have changed your Password!. Please Log In and enjoy all the advanced features, like Overwriting Templates and Print with/without Author's Name");
									restart_url();
							    },
							    error: function(data) {
									
									$("#alert_modal_header").text("VERIFICATION ERROR!");
									$("#alert_modal_text").html(data);

							    }
							});
							
	    				}

			    		
			    		break;
	    			
	    			default:
	    			break;
	    		}
	    		
	    		
	    	}
	    	
	    	
	    	function getURLParameter(sParam)
			{
				if(window.location.href.indexOf("#")>-1)
				{
					var sPageURL = window.location.href.split("#")[1];
			    
			    
			    	var sURLVariables = sPageURL.split('&');
				    for (var i = 0; i < sURLVariables.length; i++) 
				    {
				        var sParameterName = sURLVariables[i].split('=');
				        if (sParameterName[0] == sParam) 
				        {
				            return sParameterName[1];
				        }
				    }
				}
			
			}
	    	
	    	function requestTemplateByTitleAndController(gameTitle,controllerChosen)
			{
					$("#alert_modal_header").text("");
					$("#alert_modal_text").text("Requesting Template...");
					$("#alert_messages_modal").modal("show");
				
				  $.ajax({  
				    type: "POST",  
				    url: "includes//request_template_information_urlreference.php",  
				    data: { 'gameTitle':addSlashesToString(gameTitle),'controllerChosen':addSlashesToString(controllerChosen)},      
				    success: function(json_data){ // <-- note the parameter here, not in your code
				       //$('#box2').html(data);
				       
				       if(json_data.indexOf("TEMPLATE NOT FOUND") == -1)
						{
				       		onLoadInitiateNewController(json_data);
				       		
				       		$("#alert_messages_modal").modal("hide");
						}
						else
						{
							var gameTitleFixed = gameTitle.split("%20").join(" ");
							
							$("#alert_modal_header").text("ERROR");
							$("#alert_modal_text").html("Template with Game Title "+gameTitleFixed+" and Controller "+controllerChosen+" doesn't seem to exist.<br /> Please write a different Game Title or Controller or search the desired template with Search Options.");
						}
				       
				    },
				    error: function() {
				    	
						
				       $("#alert_messages_modal").modal("hide");
				    }
				});
				    	
			}
			
			/*
			 * Auth Block
			 * 
			 * 
			 */
			
			//Focus on Email text input from the beginning when clicking on Account Options Dropdown
	    	
	    	$('#account_dropdown').on('shown.bs.dropdown', function () {
			    $("#email").focus();
			});
	    	
			
			prepareAuthListeners();
			
			function prepareAuthListeners()
			{
				$("#login_button").click(function(){
	        		
	        		$("#alert_modal_header").text("");
					$("#alert_modal_text").text("Logging in...");
					$("#alert_messages_modal").modal("show");
	        		
	        		var email = $("#email").val();
	        		var password = formhash($("#password").val());
	
	        		$.ajax({  
					    type: "POST",  
					    url: "includes//process_login.php",  
					    data: { 'email':email,
					    'password':password},    
					    success: function(data){
					       
					       if(data.indexOf("SUCCESFULLY LOGGED IN!")>-1)
					       {

					       		$("#alert_modal_header").text("SUCCESFULLY LOGGED IN!");
								$("#alert_modal_text").html("Now you can enjoy all the features.");
						
								needsRebootForLogin = true;
																
								if($("#game_title_text").val()!="")
								{
									onSaveTemplateToDatabase();
									//$("#game_title_text").val("UnknownGameTitle"+Math.random().toString(36));
								}
								else location.reload();
								
					       }
					       else if(data == "LOGIN FAILED!")
					       {
					       		$("#alert_modal_header").text("ERROR LOGGING IN");
								$("#alert_modal_text").html("Login Failed. Invalid email or password, or the account doesn't exist or has not been activated.");
						
					       }
					       else if(data == "INCORRECT INPUT!")
					       {
					       		$("#alert_modal_header").text("ERROR LOGGING IN");
					       		$("#alert_modal_text").html("A valid email and password must be typed in.");
						
					       }
							
							
					    },
					    error: function(data) {
					    	
							$("#alert_modal_header").text("ERROR LOGGING IN");
					       	$("#alert_modal_text").html(data);
					    }
					});
	        	});
	        	
	        	$("#logout_button").click(function(){
	        		
	        		$("#alert_modal_header").text("");
					$("#alert_modal_text").text("Logging out...");
					$("#alert_messages_modal").modal("show");
	        		
	        		$.ajax({  
					    type: "POST",  
					    url: "includes//logout.php",  
					        
					    success: function(data){ 
					       
							$("#alert_modal_header").text("SUCCESFULLY LOGGED OUT!");
							$("#alert_modal_text").html("See you soon!");
					
				       		location.reload();
							
					    },
					    error: function(data) {
							
							$("#alert_modal_header").text("ERROR LOGGING OUT!");
					       	$("#alert_modal_text").html(data);
					    }
					});
	        	});
	        	
	        	$("#register_button").click(function(){
	        		  		
	        				
					var username = $("#username").val();
	        		var email = $("#email").val();
	        		
	        		var original_password = $("#password").val();
	        		
	        		var password = regformhash(username,email,original_password,$("#conf_password").val());
	        		
	        		if(password != false)
	        		{
	        			$("#alert_modal_header").text("");
						$("#alert_modal_text").text("Attempting to Register...");
						$("#alert_messages_modal").modal("show");
	        			
	        			$.ajax({  
						    type: "POST",  
						    url: "includes//register.inc.php",  
						    data: { 'email':email,
						    'username':username,
						    'password':password},    
						    success: function(data){ 
						   
						       //console.log(data);
						       						       
						       if(data.indexOf("REGISTRATION SUCCESS!")>-1)
						       {
						       		var hash = data.split("#")[1];
						       						       	
									
									$.ajax({  
									    type: "POST",  
									    url: "includes//send_confirmation_email.php", 
									    data: { 'email':email,
									    'username':username,
									    'password':original_password,
									    'hash':hash,
									    'resend':'false'},
									    success: function(temp_data){ 
									       
											//$("#alert_messages_modal").modal("hide");
											
											if(temp_data.indexOf("SENT CONFIRMATION EMAIL")>-1)
											{
								
												$("#alert_modal_header").text("SUCCESFULLY REGISTERED!");
												$("#alert_modal_text").html("Your account has been made, please verify it by clicking the activation link that has been sent to your email.");
	
											}
											else
											{
												$("#alert_modal_header").text("ERROR!");
												$("#alert_modal_text").html("Your account has been made, however we couldn't send an email to verify your account. Please make sure your email is written in the proper field and press Resend Confirmation Email.");
	
												//alert("Couldn't send your email!");
											}
											
											
											
									    },
									    error: function(temp_data) {
											
											$("#alert_modal_header").text("DELIVERY ERROR!");
											$("#alert_modal_text").html("Your account has been made, however we couldn't send an email to verify your account. Please make sure your email is written in the proper field and press Resend Confirmation Email.");
	
									    }
									});
		
						       		//location.reload();
						       }
						       else if(data == "REGISTRATION FAILED: INSERT!")
						       {
						       		$("#alert_modal_header").text("REGISTRATION FAILED!");
									$("#alert_modal_text").html("Seems like this Email already exists in our database. Try a different one or make sure your email is written in the proper field and press Resend Password");
						       }
						       else
						       {
						       		$("#alert_modal_header").text("REGISTRATION FAILED!");
									$("#alert_modal_text").html(data);
						       }
								//$("#alert_messages_modal").modal("hide");
								//location.reload();
								
						    },
						    error: function() {
								$("#alert_modal_header").text("REGISTRATION FAILED!");
								$("#alert_modal_text").html(data);
						    }
						});
	        		}
	        		
	        		
	        	});
	        	
	        	$("#resend_verification_button").click(function(){
	        		  		
	        		$("#alert_modal_header").text("");
					$("#alert_modal_text").text("Resending Account Validation by Email...");
					$("#alert_messages_modal").modal("show");
	        		  		
	        		var email = $("#email").val();
	        		
					$.ajax({  
					    type: "POST",  
					    url: "includes//send_confirmation_email.php", 
					    data: { 'email':email,
					    'username':'',
					    'password':'',
					    'hash':'',
					    'resend':'resend'},
					    success: function(temp_data){ 
					       
							//$("#alert_messages_modal").modal("hide");
														
							if(temp_data.indexOf("SENT CONFIRMATION EMAIL")>-1)
							{
								$("#alert_modal_header").text("DELIVERY SUCCESS!");
								$("#alert_modal_text").html("Please verify your account by clicking the activation link that has been sent to your email.");
	
							}
							else
							{
								$("#alert_modal_header").text("DELIVERY ERROR!");
								$("#alert_modal_text").html("We couldn't send a Verify Account email. Please try again.");
	
								//alert("Couldn't send your email!");
							}
							
							
							
					    },
					    error: function(temp_data) {
							
							$("#alert_modal_header").text("DELIVERY ERROR!");
							$("#alert_modal_text").html("We couldn't send a Verify Account email. Please try again.");
	
					    }
					});

	        		
	        	});
	        	$("#reset_password_button").click(function(){
	        		  		
	        		var email = $("#email").val();
	        		
	        		var original_password = $("#password").val();
	        		
	        		var password = regformhashnousername(email,original_password,$("#conf_password").val());
	        		
	        		
	        		
	        		if(password != false)
	        		{
	        			$("#alert_modal_header").text("");
						$("#alert_modal_text").text("Attempting to Send a Reset Password Email...");
						$("#alert_messages_modal").modal("show");
	        			
	        			$.ajax({  
						    type: "POST",  
						    url: "includes//reset_password_confirmation_email.php",  
						    data: { 'email':email,
						    'password':password},    
						    success: function(data){ 
						       	       
						       if(data.indexOf("SENT RESEND CONFIRMATION EMAIL!")>-1 && data.indexOf("RESET PASSWORD SUCCESS!")>-1 )
						       {

									$("#alert_modal_header").text("SUCCESFULLY SENT!");
									$("#alert_modal_text").html("Your password will reset as soon as you click the link that has been sent to your email.");

						       		//location.reload();
						       }						       
						       else
						       {
						       		$("#alert_modal_header").text("RESET PASSWORD EMAIL FAILED!");
									$("#alert_modal_text").html("We couldn't send a confirmation email to your address. Please make sure both your email, password and repeat password fields are filled and try again.");
						       }
								//$("#alert_messages_modal").modal("hide");
								//location.reload();
								
						    },
						    error: function() {
						    	
								$("#alert_modal_header").text("RESET PASSWORD EMAIL FAILED!");
									$("#alert_modal_text").html("We couldn't send a confirmation email to your address. Please make sure both your email, password and repeat password fields are filled and try again.");
						    }
						});
	        		}
	        		
	        		
	        	});
			}
			
			
	    	 
	    	/*
	    	 * Initializing Block
	    	 * 
	    	 * 
	    	 */
	    	 
	    	//Initiating SVG's, anchor events and colors
	    	 	
	    	prepareSvgControllerImage();
	    	
	    	createAnchorsEventListener();
	    	
	    	implementChangesInColorScheme();
	    	
	    	
	    	//Focus on Game Title text input from the beginning
	    	
	    	$("#game_title_text").focus();
	    	
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
				
				$("#controller_button_image").css("background-image","url('res/img/"+controller_name+".svg')");
				
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
			
				$("#color_button_image1").attr("color_value",color_value_scheme);
				$("#color_button_image1").css("background-color",color_value_scheme);
				$("#color_button_image2").attr("color_value",color_value_lines);
				$("#color_button_image2").css("background-color",color_value_lines);
				
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
			
			//Making the Playstyle Dropdown a Multichoice mechanism
			
			$(".playstyle_item_row").unbind();
			
			$(".playstyle_item_row").click(function(e){
				
				e.stopPropagation();
				
				$(this).toggleClass("selected");
				
				var playstyle_state = "";
								
				$(".playstyle_item_row").each(function(){
					
					if($(this).hasClass("selected"))
					{
						var playstyle = $(this).attr("playstyle");
						
						if(playstyle == "singleplayer")
						{
							playstyle_state += playstyle;
						}
						
						if(playstyle == "multiplayer")
						{
							if(playstyle_state.indexOf(playstyle) == -1)
							{
								if(playstyle_state.length != 0)
								{
									playstyle_state += "_";
								}
								playstyle_state += playstyle;
							}
							
							var multiplayer_type = $(this).attr("multiplayer_type");
							
							if(multiplayer_type != "")
							{
								playstyle_state += "_";
								playstyle_state += multiplayer_type;
							}
							
						}
					}
				});
				
				playstyleMode = playstyle_state;
							
				
				presentPlaystyleModeSelection(playstyle_state);
				

			});
						
			function presentPlaystyleModeSelection(playstyle_state)
			{
				
				$(".playstyle_item_row").removeClass("selected");
				
				switch(playstyle_state)
				{
					case "singleplayer":
						
						$("#number_players_min_text").val("1");
						$("#number_players_min_text").keypress();
						$("#number_players_max_text").val("");
						
						$("#number_players_min_text").prop('readonly', true);
						$("#number_players_line_text_container").css("display","none");
						$("#number_players_max_text").css("display","none");
						
						
						$("#multiplayer_button_image").css("background-image","url('res/img/"+playstyle_state+".svg')");
						$("#players_image").attr("src","res/img/"+playstyle_state+".svg");
						
						$(".playstyle_item_row[playstyle='singleplayer'][multiplayer_type='']").addClass("selected");
					
						break;
					case "multiplayer":
										
						$("#number_players_min_text").prop('readonly', false);
						$("#number_players_line_text_container").css("display","table");
						$("#number_players_max_text").css("display","inline-block");
						
						$("#multiplayer_button_image").css("background-image","url('res/img/"+playstyle_state+".svg')");
						$("#players_image").attr("src","res/img/"+playstyle_state+".svg");
						
						$(".playstyle_item_row[playstyle='multiplayer'][multiplayer_type='']").addClass("selected");
					
						break;
					case "singleplayer_multiplayer":
										
						$("#number_players_min_text").prop('readonly', false);
						$("#number_players_line_text_container").css("display","table");
						$("#number_players_max_text").css("display","inline-block");
						
						$("#multiplayer_button_image").css("background-image","url('res/img/"+playstyle_state+".svg')");
						$("#players_image").attr("src","res/img/"+playstyle_state+".svg");
						
						$(".playstyle_item_row[playstyle='singleplayer'][multiplayer_type='']").addClass("selected");
						$(".playstyle_item_row[playstyle='multiplayer'][multiplayer_type='']").addClass("selected");
					
						break;
					case "singleplayer_multiplayer_versus":
										
						$("#number_players_min_text").css("display","inline-block");
						$("#number_players_line_text_container").css("display","table");
						$("#number_players_max_text").css("display","inline-block");
						
						$("#multiplayer_button_image").css("background-image","url('res/img/"+playstyle_state+".svg')");
						$("#players_image").attr("src","res/img/"+playstyle_state+".svg");
						
						$(".playstyle_item_row[playstyle='singleplayer'][multiplayer_type='']").addClass("selected");
						$(".playstyle_item_row[playstyle='multiplayer'][multiplayer_type='']").addClass("selected");
						$(".playstyle_item_row[playstyle='multiplayer'][multiplayer_type='versus']").addClass("selected");
					
						break;
					case "singleplayer_multiplayer_coop":
										
						$("#number_players_min_text").css("display","inline-block");
						$("#number_players_line_text_container").css("display","table");
						$("#number_players_max_text").css("display","inline-block");
						
						$("#multiplayer_button_image").css("background-image","url('res/img/"+playstyle_state+".svg')");
						$("#players_image").attr("src","res/img/"+playstyle_state+".svg");
						
						$(".playstyle_item_row[playstyle='singleplayer'][multiplayer_type='']").addClass("selected");
						$(".playstyle_item_row[playstyle='multiplayer'][multiplayer_type='']").addClass("selected");
						$(".playstyle_item_row[playstyle='multiplayer'][multiplayer_type='coop']").addClass("selected");
					
						break;
					case "singleplayer_multiplayer_coop_versus":
										
						$("#number_players_min_text").css("display","inline-block");
						$("#number_players_line_text_container").css("display","table");
						$("#number_players_max_text").css("display","inline-block");
						
						$("#multiplayer_button_image").css("background-image","url('res/img/"+playstyle_state+".svg')");
						$("#players_image").attr("src","res/img/"+playstyle_state+".svg");
						
						$(".playstyle_item_row[playstyle='singleplayer'][multiplayer_type='']").addClass("selected");
						$(".playstyle_item_row[playstyle='multiplayer'][multiplayer_type='']").addClass("selected");
						$(".playstyle_item_row[playstyle='multiplayer'][multiplayer_type='versus']").addClass("selected");
						$(".playstyle_item_row[playstyle='multiplayer'][multiplayer_type='coop']").addClass("selected");
					
						break;
					case "multiplayer_coop":
										
						$("#number_players_min_text").css("display","inline-block");
						$("#number_players_line_text_container").css("display","table");
						$("#number_players_max_text").css("display","inline-block");
						
						$("#multiplayer_button_image").css("background-image","url('res/img/"+playstyle_state+".svg')");
						$("#players_image").attr("src","res/img/"+playstyle_state+".svg");
						
						$(".playstyle_item_row[playstyle='multiplayer'][multiplayer_type='']").addClass("selected");
						$(".playstyle_item_row[playstyle='multiplayer'][multiplayer_type='coop']").addClass("selected");
					
						break;
					case "multiplayer_versus":
										
						$("#number_players_min_text").css("display","inline-block");
						$("#number_players_line_text_container").css("display","table");
						$("#number_players_max_text").css("display","inline-block");
						
						$("#multiplayer_button_image").css("background-image","url('res/img/"+playstyle_state+".svg')");
						$("#players_image").attr("src","res/img/"+playstyle_state+".svg");
						
						$(".playstyle_item_row[playstyle='multiplayer'][multiplayer_type='']").addClass("selected");
						$(".playstyle_item_row[playstyle='multiplayer'][multiplayer_type='versus']").addClass("selected");
					
						break;
					case "multiplayer_coop_versus":
										
						$("#number_players_min_text").css("display","inline-block");
						$("#number_players_line_text_container").css("display","table");
						$("#number_players_max_text").css("display","inline-block");
						
						$("#multiplayer_button_image").css("background-image","url('res/img/"+playstyle_state+".svg')");
						$("#players_image").attr("src","res/img/"+playstyle_state+".svg");
						
						$(".playstyle_item_row[playstyle='multiplayer'][multiplayer_type='']").addClass("selected");
						$(".playstyle_item_row[playstyle='multiplayer'][multiplayer_type='versus']").addClass("selected");
						$(".playstyle_item_row[playstyle='multiplayer'][multiplayer_type='coop']").addClass("selected");
					
						break;
					default:
						break;
				}
			}
				
			//loadTemplateByStringAndProperty("gameTitle","Best Game Ever");
			
			//loadTemplateByStringAndProperty("gameTitle","Best Game Ever");
			
			/*$("#search_dropdown").click(function(){
				
				$("#search_by_name_text").focus();
			});*/
			
			$('#search_dropdown').on('shown.bs.dropdown', function () {
			    $("#search_by_name_text").focus();
			});
			
			//Resizing Search Row Text input text fields to never exceed the size of the panel
			//(and actually resize the panel itself)
			$('.search_row_text').keypress(function(){
				
				var desired_width = ((($(this).val().length) + 1) * 7) + 6;
				
				this.style.width = desired_width + 'px';
			});
			    
			
			
			$("#search_button").click(function(){
				
				var gameTitleToSearch = $("#search_by_name_text").val();
				var gameCreatorToSearch = $("#search_by_creator_text").val();
				var controllerChosenToSearch = $("#search_by_controller_text").val();
				var templateAuthorName = $("#search_by_author_text").val();
				
				if(controllerChosenToSearch != "") 
				{
					controllerChosenToSearch = controllerChosenToSearch.toLowerCase()+"_controller";
				}
				
				var numPlayers = $("#search_by_numplayers_text").val();
								
				if(isNaN(numPlayers))
				{
					numPlayers = "-1";
				}
				
				searchTemplatesByProperties(gameTitleToSearch,gameCreatorToSearch,
				controllerChosenToSearch,templateAuthorName,numPlayers);
				
				
				
			});
						
			function searchTemplatesByProperties(gameTitleToSearch,gameCreatorToSearch,controllerChosenToSearch,templateAuthorName,numPlayers)
			{
				  if(gameTitleToSearch !="" || 
				  gameCreatorToSearch != "" || 
				  controllerChosenToSearch != "" ||
				  templateAuthorName != "" ||
				  numPlayers != "" )
				  {

					  $("#alert_modal_header").text("");
					  $("#alert_modal_text").text("Searching Results...");
					  $("#alert_messages_modal").modal("show");
					  

					  $.ajax({  
						    type: "POST",  
						    url: "includes//search_templates_by_properties.php",  
						    data: { 'gameTitle':addSlashesToString(gameTitleToSearch),
						    'gameCreator':addSlashesToString(gameCreatorToSearch),
						    'controllerChosen':addSlashesToString(controllerChosenToSearch),
						    'templateAuthorName':addSlashesToString(templateAuthorName),
						     'numPlayers':addSlashesToString(numPlayers)},    
						    success: function(json_data){ // <-- note the parameter here, not in your code
						       //$('#box2').html(data);
			
						       	onReceiveSearchResults(json_data);
						       	
								$("#alert_messages_modal").modal("hide");
		
						       //onLoadInitiateNewController(json_data);
						       //onLoadEmbedValuesAndLines(json_data);
						       
						    },
						    error: function() {
					
						    }
						});
				 } 
				 else
				 {
				 	$("#alert_modal_header").text("ERROR");
					$("#alert_modal_text").text("You must fill at least one Search Field in order to execute this operation.");
					$("#alert_messages_modal").modal("show");
				 }
			}
			
			function onReceiveSearchResults(json_data)
			{
				
				if(json_data == 0)
				{
					$("#search_results_none").css("display","block");
					
					$(".search_results_row").remove();
					
				}
				else
				{
				
					var parsed_data = $.parseJSON(json_data);
					
					//Get the results into an array that we will use later for the visual element
					//Object contains ID,gameTitle,gameCreator,controllerChosen
					
					searchResultArray = parsed_data;

					
					$("#search_results_none").css("display","none");
					
					//Destroying previous Search Result Html elements to leave place for the new Results
					
					$(".search_results_row").remove();
					
					//Adding one list element with the available data per element retrieved
					
					for(var i=0;i<searchResultArray.length;i++)
					{
						var s = '<li class="search_results_row">';
						s += '<img class="image-responsive controller_thumbnail_search_results" ';
						s+='src="res/img/'+searchResultArray[i].controllerChosen+'.png">';
						s += '<div class="results_information_container">';
						s += 	'<div class="game_title_information text-center">';
						s += ''+searchResultArray[i].gameTitle;
						s += '</div>';
						s += '<div class="game_creator_information text-center">';
						s += ''+searchResultArray[i].gameCreator;
						s += '</div>';
						s += '</div>';
						s += '<div search_value = "'+searchResultArray[i].ID+'" '
						s += 'class="load_button btn btn-primary">Load Template</div>';
						s += '</div>';
						
						$("#search_results_list").append(s);
					}
					
					$(".load_button").click(function(){
					
						var search_property = "ID";
						
						var search_value = $(this).attr("search_value");
												
						loadTemplateByStringAndProperty(search_property,search_value);
						
					});
				}
					
				$("#search_results_dropdown_button").click();
				
				

			}
			
			
						
			function loadTemplateByStringAndProperty(property,string_value)
			{
					$("#alert_modal_header").text("");
					$("#alert_modal_text").text("Loading Template...");
					$("#alert_messages_modal").modal("show");
				
				  $.ajax({  
				    type: "POST",  
				    url: "includes//return_template_information.php",  
				    data: { 'string_value':addSlashesToString(string_value),'property':addSlashesToString(property)},      
				    success: function(json_data){ // <-- note the parameter here, not in your code
				       //$('#box2').html(data);
				       
				       $("#alert_messages_modal").modal("hide");
				       
				       
				       if(json_data.indexOf("TEMPLATE NOT FOUND") == -1)
						{
				       
							onLoadInitiateNewController(json_data);
							
							
						}
				    
				       //onLoadEmbedValuesAndLines(json_data);
				       
				    },
				    error: function() {
				    	
						
				       $("#alert_messages_modal").modal("hide");
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
								
				//Changing the URL to the appropriate one given the loaded object
				
				var transformedSpacesTitle = parsed_data.gameTitle.split(" ").join("%20");
	       		//var transformedController = parsed_data.controllerChosen.replace("_controller","");
	       		var transformedController = parsed_data.controllerChosen;
	       		previousControllerChosen = transformedController;
	       	
	       		var newUrl = "#action=request_template&gameTitle="+transformedSpacesTitle+"&controllerChosen="+transformedController;
	       	
				window.location.hash = newUrl;
								
				//Embedding Text Values in their appropriate places for Title, Creator
				//Min Players, Max Players, First Description and Second Description
				
				previousGameTitle = parsed_data.gameTitle;
				
				$("#game_title_text").val(parsed_data.gameTitle);
				$("#creator_name_text").val(parsed_data.gameCreator);
				
				$("#author_name").val("Mapped by "+parsed_data.templateAuthorName);
				if(parsed_data.templateAuthorName!="") 
				{
					$("#author_name").addClass("author_name_available");
					$("#author_name").attr("author_name",parsed_data.templateAuthorName);
					
				}
				else
				{
					$("#author_name").removeClass("author_name_available");
					$("#author_name").attr("author_name","");
				}
				
				
				$("#number_players_min_text").val(parsed_data.minGamePlayers);
				$("#number_players_max_text").val(parsed_data.maxGamePlayers);
				
				$("#description_first_language_text").val(parsed_data.gameDescriptionPrimary);
				$("#description_second_language_text").val(parsed_data.gameDescriptionSecondary);
				
				
				//Erasing previous information from all label text fields
				
				$(".description_first_language_button_text").each(function(){
					$(this).val("");
				});
				$(".description_second_language_button_text").each(function(){
					$(this).val("");
				});
				
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
				
				//If Playstyle Mode has a value
				if(parsed_data.playstyleMode!="")
				{
					playstyleMode = parsed_data.playstyleMode;
					
				}
				
				implementChangesInColorScheme();
				
				presentPlaystyleModeSelection(playstyleMode);
				
				$("#number_players_min_text").keypress();
				$("#number_players_max_text").keypress();
				
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
	    	
	    	//Focus on author text when opening Save Dropdown
	    	
	    	$('#save_dropdown').on('shown.bs.dropdown', function () {
			    $("#template_author_text").focus();
			});
	    		    
	    	//Resizing Save Row Text input text field to never exceed the size of the panel
			//(and actually resize the panel itself)
			$('#template_author_text').keypress(function(){
				
				var desired_width = ((($(this).val().length) + 1) * 7) + 6;
				
				this.style.width = desired_width + 'px';
			}); 
	    		   	
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
					
					gameTemplateObject.templateAuthorName = $("#template_author_text").val();
					
					
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
					
					gameTemplateObject.playstyleMode = playstyleMode;
	        		
				}
				
				if(completed_necessary_fields)
				{
					
					$("#alert_modal_header").text("");
					$("#alert_modal_text").text("Saving Template for "+gameTemplateObject.gameTitle+"...");
					$("#alert_messages_modal").modal("show");
						
					$.ajax({  
					    type: "POST",  
					    url: "includes//save_template_information.php",  
					    data: { 
					    	'controllerChosen':addSlashesToString(gameTemplateObject.controllerChosen),
					    	'gameTitle':addSlashesToString(gameTemplateObject.gameTitle),
					    	'gameCreator':addSlashesToString(gameTemplateObject.gameCreator),
					    	'templateAuthorName':addSlashesToString(gameTemplateObject.templateAuthorName),
					    	'minGamePlayers':addSlashesToString(gameTemplateObject.minGamePlayers),
					    	'maxGamePlayers':addSlashesToString(gameTemplateObject.maxGamePlayers),
					    	'gameDescriptionPrimary':addSlashesToString(gameTemplateObject.gameDescriptionPrimary),
					    	'gameDescriptionSecondary':addSlashesToString(gameTemplateObject.gameDescriptionSecondary),
					    	'gameLabelsTextPrimary':addSlashesToString(gameTemplateObject.gameLabelsTextPrimary),
					    	'gameLabelsTextSecondary':addSlashesToString(gameTemplateObject.gameLabelsTextSecondary),
					    	'gameLabelLinks':addSlashesToString(gameTemplateObject.gameLabelLinks),
					    	'gameColorScheme':addSlashesToString(gameTemplateObject.gameColorScheme),
					    	'gameColorLines':addSlashesToString(gameTemplateObject.gameColorLines),
					    	'playstyleMode':addSlashesToString(gameTemplateObject.playstyleMode)
					    	},      
					    success: function(message){ // <-- note the parameter here, not in your code

					       if(message.indexOf("Error") > -1)
					       {
						       	$("#alert_modal_header").text("ERROR");
								$("#alert_modal_text").html("Couldn't save Template for "+gameTemplateObject.gameTitle+".<br /> There might already be a Template with the same Game Title and Controller Chosen in the database. <br /><br /> Please choose a different Game Title or Controller");
					       
					       		if(needsRebootForLogin)
								{
									$("#alert_modal_header").text("LOGGED IN BUT COULDN'T SAVE PROGRESS");
									$("#alert_modal_text").html("Couldn't save Template for "+gameTemplateObject.gameTitle+".<br /> There might already be a Template with the same Game Title and Controller Chosen in the database. <br /><br /> Please choose a different Game Title or Controller");
					       
									location.reload();
								}
					       }
					       else if(message.indexOf("TEMPLATE ALREADY EXISTS") > -1)
					       {
					       		$("#alert_modal_header").text("ERROR");
								$("#alert_modal_text").html("Couldn't save Template for "+gameTemplateObject.gameTitle+".<br /> There is a Template with the same Game Title and Controller Chosen in the database. <br /><br /> Please choose a different Game Title or Controller");
					       
					       		if(needsRebootForLogin)
								{
									$("#alert_modal_header").text("LOGGED IN BUT COULDN'T SAVE PROGRESS");
									$("#alert_modal_text").html("Couldn't save Template for "+gameTemplateObject.gameTitle+".<br /> There is a Template with the same Game Title and Controller Chosen in the database. <br /><br /> Please choose a different Game Title or Controller");
					       
									location.reload();
								}
					       }
					       else
					       {
					       		
					       		previousControllerChosen = gameTemplateObject.controllerChosen;
					       		previousGameTitle = gameTemplateObject.gameTitle;
					       	
					       		var transformedSpacesTitle = gameTemplateObject.gameTitle.split(" ").join("%20");
					       		//var transformedController = gameTemplateObject.controllerChosen.replace("_controller","");
					       		var transformedController = gameTemplateObject.controllerChosen;
					       	
					       		var newHash = "#action=request_template&gameTitle="+transformedSpacesTitle+"&controllerChosen="+transformedController;
					       		//var newUrl = originalUrl+"\n"+"#"+transformedSpacesTitle+"+"+transformedController;
					       	
					       		$("#alert_modal_header").text("SAVED!");
								$("#alert_modal_text").html("The permanent link for this Template is: <br /><br />"+originalUrl+newHash);
																
								window.location.hash = newHash;
					       
					       		//$("#alert_messages_modal").modal("hide");
					       		
					       		$("#author_name").val("Mapped by "+gameTemplateObject.templateAuthorName);
					       		
					       		if(gameTemplateObject.templateAuthorName!="") 
								{
									$("#author_name").addClass("author_name_available");
									$("#author_name").attr("author_name",gameTemplateObject.templateAuthorName);
									//alert($("#author_name").attr());
								}
								else
								{
									$("#author_name").removeClass("author_name_available");
									$("#author_name").attr("author_name","");
								}
								
								if(needsRebootForLogin)
								{
									location.reload();
								}
					       }
					       
					    },
					    error: function() {
				
							$("#alert_modal_header").text("ERROR");
							$("#alert_modal_text").html("Couldn't save Template for "+gameTemplateObject.gameTitle+".<br /> Templates must have at least a Game Title and Controller chosen to be Saved.");
							console.log("FAIL SAVE INCOMPLETE DETAILS");
					    }
					});
				}
				else
				{
					$("#alert_modal_header").text("ERROR");
					$("#alert_modal_text").text("Templates must have at least a Game Title and Controller chosen to be Saved.");
					$("#alert_messages_modal").modal("show");
					
					console.log("FAIL SAVE");
				}

			}
			
			//Assigning click event to Update Button
	    	
	    	$("#update_button").click(function(){
	    		
	    		onUpdateTemplateToDatabase();
	    		
	    	});
	    	
	    	function onUpdateTemplateToDatabase()
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
					
					gameTemplateObject.templateAuthorName = $("#template_author_text").val();
					
					
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
					
					gameTemplateObject.playstyleMode = playstyleMode;
	        		
				}
				
				if(completed_necessary_fields)
				{
					
					$("#alert_modal_header").text("");
					$("#alert_modal_text").text("Updating Template for "+previousGameTitle+"...");
					$("#alert_messages_modal").modal("show");
						
					$.ajax({  
					    type: "POST",  
					    url: "includes//update_template_information.php",  
					    data: { 
					    	
					    	
					    	'previousControllerChosen':addSlashesToString(previousControllerChosen),
					    	'previousGameTitle':addSlashesToString(previousGameTitle),
					    	'controllerChosen':addSlashesToString(gameTemplateObject.controllerChosen),
					    	'gameTitle':addSlashesToString(gameTemplateObject.gameTitle),
					    	'gameCreator':addSlashesToString(gameTemplateObject.gameCreator),
					    	'templateAuthorName':addSlashesToString(gameTemplateObject.templateAuthorName),
					    	'minGamePlayers':addSlashesToString(gameTemplateObject.minGamePlayers),
					    	'maxGamePlayers':addSlashesToString(gameTemplateObject.maxGamePlayers),
					    	'gameDescriptionPrimary':addSlashesToString(gameTemplateObject.gameDescriptionPrimary),
					    	'gameDescriptionSecondary':addSlashesToString(gameTemplateObject.gameDescriptionSecondary),
					    	'gameLabelsTextPrimary':addSlashesToString(gameTemplateObject.gameLabelsTextPrimary),
					    	'gameLabelsTextSecondary':addSlashesToString(gameTemplateObject.gameLabelsTextSecondary),
					    	'gameLabelLinks':addSlashesToString(gameTemplateObject.gameLabelLinks),
					    	'gameColorScheme':addSlashesToString(gameTemplateObject.gameColorScheme),
					    	'gameColorLines':addSlashesToString(gameTemplateObject.gameColorLines),
					    	'playstyleMode':addSlashesToString(gameTemplateObject.playstyleMode)
					    	},      
					    success: function(message){ // <-- note the parameter here, not in your code


					       if(message.indexOf("Error") > -1)
					       {
					       	
						       	$("#alert_modal_header").text("ERROR");
								$("#alert_modal_text").html("Couldn't update Template for "+previousGameTitle+".<br /> There might not be a Template like that in the database. <br /><br /> Please choose a different Game Title or Controller");
					       }
					       else if(message.indexOf("TEMPLATE NOT FOUND!") > -1)
					       {
					       		$("#alert_modal_header").text("ERROR");
								$("#alert_modal_text").html("Couldn't find Template with "+previousGameTitle+".<br /> There might not be a Template like that in the database. <br /><br /> Please choose a different Game Title or Controller");
					       }
					       else if(message.indexOf("TEMPLATE OWNED BY A DIFFERENT USER") > -1)
					       {
					       		$("#alert_modal_header").text("ERROR");
								$("#alert_modal_text").html("The Template with "+previousGameTitle+" belongs to a different User.<br /> Can't overwrite.");
					       }
					       else
					       {
					       	
					       		previousControllerChosen = gameTemplateObject.controllerChosen;
					       		previousGameTitle = gameTemplateObject.gameTitle;
					       	
					       		var transformedSpacesTitle = gameTemplateObject.gameTitle.split(" ").join("%20");
					       		//var transformedController = gameTemplateObject.controllerChosen.replace("_controller","");
					       		var transformedController = gameTemplateObject.controllerChosen;
					       	
					       		var newHash = "#action=request_template&gameTitle="+transformedSpacesTitle+"&controllerChosen="+transformedController;
					       		//var newUrl = originalUrl+"\n"+"#"+transformedSpacesTitle+"+"+transformedController;
					       	
					       		$("#alert_modal_header").text("SAVED!");
								$("#alert_modal_text").html("The permanent link for this Template is: <br /><br />"+originalUrl+newHash);
								
								window.location.hash = newHash;
					       
					       		//$("#alert_messages_modal").modal("hide");
					       		
					       		$("#author_name").val("Mapped by "+gameTemplateObject.templateAuthorName);
					       		
					       		if(gameTemplateObject.templateAuthorName!="") 
								{
									$("#author_name").addClass("author_name_available");
									$("#author_name").attr("author_name",gameTemplateObject.templateAuthorName);
									//alert($("#author_name").attr());
								}
								else
								{
									$("#author_name").removeClass("author_name_available");
									$("#author_name").attr("author_name","");
								}
								
								/*if(needsReboot)
								{
									location.reload();
								}*/
					       }
					       
					    },
					    error: function() {
				
							$("#alert_modal_header").text("ERROR");
							$("#alert_modal_text").html("Couldn't save Template for "+gameTemplateObject.gameTitle+".<br /> Templates must have at least a Game Title and Controller chosen to be Saved.");
							console.log("FAIL SAVE INCOMPLETE DETAILS");
					    }
					});
				}
				else
				{
					$("#alert_modal_header").text("ERROR");
					$("#alert_modal_text").text("Templates must have at least a Game Title and Controller chosen to be Saved.");
					$("#alert_messages_modal").modal("show");
					
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
				        
				        
						implementChangesInColorScheme();
		
				    });
				});
	    	}
					
			function prepareSvgClickEvents()
			{
				// Add a handler
		        $('path').each(function() {
		        				
		            var id = $(this).attr('id');
		            
		            //If Path doesn't include NoClick in the ID, it should be Selectable
		            if(!(id.indexOf("NoClick") > -1))
		            {
		            	$(this).attr("class","Selectable");
		            			            	
		            	//On SVG Element Click
			            $(this).click(function() {
			            				            				            	
			            	$('path.Selectable').each(function(){
			            		
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
			            		
			            		$(".label_pair_anchor_box").each(function(){
			            		
			            			$(this).addClass("non_display");
				            	});
			            		
			            		/*$(".label_pair_anchor_right").each(function(){
			            		
			            			$(this).addClass("non_display");
				            	});
				            	
				            	$(".label_pair_anchor_bottom").each(function(){
				            		
				            		$(this).addClass("non_display");
				            	});*/
			            	}
			            	else
			            	{
			            					            					            		
			            		buttonActive = id;
			            		
			            		$(this).attr("stroke","red");
			            		$(this).attr("stroke-width","8");
			            		
			            		$(".label_pair_anchor_box").each(function(){
				            		
				            		$(this).removeClass("non_display");
				            	});
			            		
			            		/*$(".label_pair_anchor_right").each(function(){
			            		
				            		$(this).removeClass("non_display");
				            	});
				            	
				            	$(".label_pair_anchor_bottom").each(function(){
				            		
				            		$(this).removeClass("non_display");
				            	});*/
				            	
			            	}
	
			            	
			            });      
		            }			        	
		        	                 
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
						  		
    			var desired_title_color = $("#game_title_text").css("color");
    			$('<style id="print-style-tag" media="print">#game_title_text {color: '+desired_title_color+' !important;}</style>').appendTo('head');
    			
    			if($("#author_checkbox").is(':checked') && !($("#author_name").attr("author_name") == ""))
    			{
    				$("#author_name").attr("display","block");
    				$("#author_name").text("Mapped by "+$("#author_name").attr("author_name"));
    			} 
				else
				{
					$("#author_name").text(""); 
				} 
								
				$("#container_all").css("height","190mm");
			  	$("#container_all").css("width","285mm");
			  	
			  	$("#headers").css("display","block");
			  	$("#buttons_bar").css("display","none");
			  
			  	
			  	updateDrawnLineObjects();
				
			}
			
			function returnContainerToScreenValues()
			{
				
				$("#headers").css("display","none");
			  	$("#buttons_bar").css("display","block");
				
				$("#container_all").css("height","100%");
			  	$("#container_all").css("width","100%");
			  	
			  	updateDrawnLineObjects();
			  	
			  	$("#print-style-tag").remove();
			}
			
			
	    	//Focus on author text when opening Print Dropdown
	    	
	    	/*$('#print_dropdown').on('shown.bs.dropdown', function () {
			    $("#print_text").focus();
			});*/
			
			$("#print_button").click(function(){
				
				prepareContainerToPrint();
				
				/*:after {
    				color: #000 !important;
    			}*/
    			
		  		window.print();
		  		
		  		//$('#print-style-tag').remove();
		  		
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
						
				$('.label_pair_anchor_box').click(function(){
							
					//When a successful link occurs:
						
					if(buttonActive != "none")
					{
						var selected_button = document.getElementById(buttonActive);
					
						var selected_button_bounding_box = selected_button.getBoundingClientRect();
						
						var $label_pair_anchor_box = $(this);
						
						var label_pair_match = $label_pair_anchor_box.attr("label_pair_match");
						
						var $label_pair_anchor = $('.label_pair_anchor[label_pair_match='+label_pair_match+']');
						
						var anchor_position = $label_pair_anchor.attr("anchor_position");
						
						var label_pair_texts_container = $('.label_pair_texts_container[label_pair_match='+label_pair_match+']');
							
						label_pair_texts_container.removeClass("non_display").removeClass("half_visible");
							
						var num_links = parseInt($label_pair_anchor.attr("num_links"));
						$label_pair_anchor.attr("num_links",""+(num_links+1));
						$label_pair_anchor.addClass("completed_link");
						$label_pair_anchor_box.attr("num_links",""+(num_links+1));
												
						createNewDrawnLineObject(buttonActive,label_pair_match,anchor_position,
							selected_button,$label_pair_anchor);
										
						updateDrawnLineObjects();
							
						buttonActive = "none";
					            		
					    $('path.Selectable').each(function(){
		        		
		        			$(this).attr("stroke","none");
		        			$(this).attr("stroke-width","8");
		            	});
		
						$(".label_pair_anchor_box").each(function(){
		        		
		        			$(this).addClass("non_display");
		            	});
		
						$('.description_first_language_button_text[label_pair_match='+label_pair_match+']').focus();
		
		        		/*$(".label_pair_anchor_right").each(function(){
		        		
		        			$(this).addClass("non_display");
		            	});
		            	
		            	$(".label_pair_anchor_bottom").each(function(){
		            		
		            		$(this).addClass("non_display");
		            	});*/
	
					}
								
				});
			}
			
			////General utility functions
			
			function addSlashesToString(temp_string)
			{
				return temp_string.replace(/[\\"']/g, '\\$&').replace(/\u0000/g, '\\0');
			}
			
			function decodeHtml(html) {
			    var txt = document.createElement("textarea");
			    txt.innerHTML = html;
			    return txt.value;
			}
			
			    		
    	});
    	
    	
    	
    </script>
  </body>
</html>