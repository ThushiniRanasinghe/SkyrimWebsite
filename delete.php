<?php
require("configcart.php");
require('header.php');
$itemsql = "SELECT * FROM orderitems WHERE id = ". $_GET['id'] . ";";
$itemres = mysql_query($itemsql) or die(mysql_error());
$numrows = mysql_num_rows($itemres);
if($numrows == 0) {
header("Location: showcart.php");
}
$itemrow = mysql_fetch_assoc($itemres);
$prodsql = "SELECT price FROM products WHERE id = " . $itemrow['product_id'] . ";";
$prodres = mysql_query($prodsql)or die(mysql_error());;
$prodrow = mysql_fetch_assoc($prodres);
$sql = "DELETE FROM orderitems WHERE id = " . $_GET['id'];
$del=mysql_query($sql)or die(mysql_error());;
if($del){
header("Location: showcart.php");
}
?>
<html>
    <head>
	<title>Shopping Cart</title>
	<link rel="stylesheet" href="CSS/ImageTransparent.css" /> 
	<link rel="stylesheet" type="text/css" href="CSS/style1.css">
	<link rel="stylesheet" type="text/css" href="common.css">
    </head>
    <body>
<br><br><br><br><br><br><br><br>
	<div>
	<footer align=left>
	<font color=white>
	<font size=3><b><u>JOIN US</font></u></b><br>
	
	<a href="https://plus.google.com/communities/107095681279963536312">
<img src="Images/G+.png" width="23" height="23" /> </a>
	<a href="https://www.facebook.com/Unofficial-Skyrim-589599051204502/timeline?ref=page_internal&__mref=message_bubble"><img src="Images/facebook.png" width="23" height="23" /> </a>
	<a href="https://twitter.com/Skyrim_movies"><img src="Images/twitter.png" width="23" height="23" /> </a>
	<center>
	<font color=#FFFFFF>Edited by:</font><a href="CV-Thushini.html"><font color=#3299CC>Thushini</a>
	<hr color=#32CD99>
	<center><font size=3 >
	<b>
	<a href="home.html"><font color=#00009C>HOME |</a>&nbsp
	<a href="Movies.php"><font color=#00009C>MOVIES &nbsp|</a>&nbsp
	<a href="ContactUs.html"><font color=#00009C>CONTACT US &nbsp |</a>&nbsp
	<a href="AboutUs.html"><font color=#00009C>ABOUT US &nbsp|</a>&nbsp
	<a href="Quiz.html"><font color=#00009C>QUIZ &nbsp|</a>&nbsp
	<a href="weeklypoll1.php"><font color=#00009C>WEEKLY POLL &nbsp|</a>&nbsp
	<a href="Testimonial.php"><font color=#00009C>TESTIMONIAL&nbsp|</a>&nbsp
	<a href="Register.html"><font color=#00009C>REGISTER &nbsp|</a>&nbsp</b><br>
	<img src="images/Copyright.png" width="15" height="15" /> </a> <font color=#000000><font color=#FFFFFF>2016 Copyright SKYRIM.All Rights Reserved</font>
	
	</script>
	</footer>
	</div>
</body>
</html>