<link rel=StyleSheet href="style.css" type="text/css" media=screen>
<?php
include("dbConnect.php");

function checkbox($approved)
{
	if ( $approved == 1 ) 
		{ echo '<input type="checkbox" checked>'; } 
	else { echo '<input type="checkbox">'; }
}


mysql_select_db("cloudshit", $con);

// select all entries from the content table
$result = mysql_query("SELECT * FROM content");

mysql_close();

?>
<div id="adminTable">
<table id="adminContent" cellspacing="0" cellpadding="2">
<tr>
<th><font face="Arial, Helvetica, sans-serif">ID</font></td>
<th><font face="Arial, Helvetica, sans-serif">Content</font></td>
<th><font face="Arial, Helvetica, sans-serif">Approved?</font></td>
</tr>

<?php
// select number of rows
$num = mysql_num_rows($result);

// loop to go through all the rows
$i=0;
while ($i < $num) {
	
	// variable for each column or field
	$id = mysql_result($result,$i,"id");
	$content = mysql_result($result,$i,"content");
	$approved = mysql_result($result,$i,"Approved");

?>

<tr id="<?php if ($i % 2 == 0) {echo "adminEven";} else {echo "adminOdd";} ?>">
<td><font face="Arial, Helvetica, sans-serif"><?php echo $id; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $content; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php checkbox($approved); ?></font></td>
</tr>
</div>
<?php
$i++;
}
?>