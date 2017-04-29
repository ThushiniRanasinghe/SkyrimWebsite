<?php
include("configcart.php");

	$day=$_GET["day"];
	$hou=$_GET['hou'];
	$min=$_GET['min'];
	$sec=$_GET['sec'];


	$dayq=mysql_query("UPDATE polltime SET days=".$day);	
	$houq=mysql_query("UPDATE polltime SET hours=".$hou);	
	$minq=mysql_query("UPDATE polltime SET minutes=".$min);	
	$secq=mysql_query("UPDATE polltime SET seconds=".$sec);	
		
?>
<!doctype html>
<html>
<head>
</head>
<body bgcolor='sky blue'>
<center>
<font size=10 color="deep green">Thank You for visting SKYRIM
<table border='10' >
<td>
<img src="Images/thankYou.gif">
</td>
</table>
</body>
</html>