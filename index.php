<html>
    <head>
    	<title>Cloud Bullshit Generator</title>
    	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js'></script>
	<LINK REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA=screen>
	<link href='http://fonts.googleapis.com/css?family=McLaren' rel='stylesheet' type='text/css'>
    </head>
    <body>
    	<p><?php include("topMenu.php"); ?></p>

<div id="bullshit">
 <?php include("selectContent.php"); ?>
</div>
<div class="divCenter" id="buttonMore"> 
<input type="button" value="More Bullshit" onClick="window.location.reload()">
</div>
