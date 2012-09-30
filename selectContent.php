<?php
include("dbConnect.php");


mysql_select_db("cloudshit", $con);

$result = mysql_query("SELECT content 
    					FROM content
    					WHERE Approved = 1 
    					ORDER BY rand() 
    					LIMIT 1");

    					 
while($row = mysql_fetch_array($result))
{
    echo $row['content'];
}


?>