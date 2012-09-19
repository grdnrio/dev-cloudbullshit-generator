<html>
    <head>
    	<title>Cloud Bullshit Generator</title>
    	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js'></script>
    	<link rel=StyleSheet href="style.css" type="text/css" media=screen>
    	<link href='http://fonts.googleapis.com/css?family=McLaren' rel='stylesheet' type='text/css'>
    </head>
    <body>
    	<div id="header">
    		<div id="title">
    			<p>Cloud</p>
    			<p>Bullshit</p>
    			<p>Generator</p>
    		</div>
    		<div id="menu">
    			<ul>
					<li class="left"><a href="#home">Home</a></li>
					<li class="right"><a href="#signup">Signup</a></li>
					<li class="left"><a href="#login">Login</a></li>
					<li class="right"><a href="#about">About</a></li>
				</ul>
			</div>
    	</div>
    	<div id="bullshit">
	    	<?php include("selectContent.php"); ?>
	    </div>
	    <div class="divCenter"> 
		    <input type="button" id="button" value="More Bullshit" onClick="window.location.reload()">
		</div>
    </body>
</html>
