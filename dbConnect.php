<?php
$host = "localhost";
$db_name = "cloudshit";
$username = "cloudshit";
$password = "zExFxhsccr4Jv9tp";

$con = mysql_connect("$host","$username","$password");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

?>
