<?php
if(!isset($_SESSION)){
//    session_start();
}
if (isset($_SESSION['SESS_CHANGEID']) == TRUE) {
    session_unset();
    session_regenerate_id();
}
include("configcart.php");
?>
<html>
    <head>
	<title>Shopping Cart</title>
	 <link rel="stylesheet" href="CSS/style.css" />  
	<link rel="stylesheet" href="CSS/ImageTransparent.css" /> 
	<link rel="stylesheet" type="text/css" href="CSS/style1.css">
	<link rel="stylesheet" type="text/css" href="cartstyle.css">
	<link rel="stylesheet" type="text/css" href="CSS/stylecart.css">
    </head>
    <body >

&nbsp &nbsp &nbsp &nbsp <img src="images/Logo.gif" align="left"  id="transparent" width="60" height="60" >
	<form method='GET' action='poll.php' align="right" >
	<input type='hidden' name='day' id='day' >
	<input type='hidden' name='hou' id='hou' >
	<input type='hidden' name='min' id='min'>
	<input type='hidden' name='sec' id='sec' >
	<input type='submit' value='EXIT'align='top' style="background-color: #2BC1F2;margin-right: 50px;height:40px; width:80px;font-weight: bold;"/>
	</form>
	<hr>
	<ul id="css3menu1" class="topmenu">
		<li class="topmenu"><a href="Home.html" >HOME</a></li>
		<li class="topmenu"><a href="Movies.php" >MOVIES</a></li>
		<li class="toplast"><a href="ContactUs.html">CONTACT US</a></li>
		<li class="toplast"><a href="AboutUs.html">ABOUT US</a></li>
		<li class="toplast"><a href="Quiz.html">QUIZ</a></li>
		
		<li class="topmenu"><a href="weeklypoll1.php" >WEEKLY POLL</a></li>
		<li class="topmenu"><a href="Testimonial.php" >TESTIMONIALS</a></li>
		<li class="topmenu"><a href="Register.html" >REGISTER</a></li>
		<li class="topmenu"><a href="ShoppingCart.html" ><img src="Images/ShoppingCart.png"></a></li>
		
	</ul>
	<hr>
</body>
</html>
<?php
session_start();

require("functions.php");
echo "<h1 ><font color='red'>Your shopping cart</font></h1>";
showcart();
if(isset($_SESSION['SESS_ORDERNUM']) == TRUE) {
$sql = "SELECT * FROM orderitems WHERE order_id = " . $_SESSION['SESS_ORDERNUM'] . ";";
$result = mysql_query($sql);
$numrows = mysql_num_rows($result);
$prodrow = mysql_fetch_assoc($result);
echo "<table cellpadding='10'  width=740 bgcolor='white' align=center>";
echo "<tr>";  
echo"<td align=center>"."<font size=4 color=blue >".'The Order ID for your Order is  -  '.$prodrow['order_id']."</font>"."</td>" ;
echo "</tr>";
echo "</table>";
}
?>
<html>
    <head>
	<title>Shopping Cart</title>
	<link rel="stylesheet" href="CSS/ImageTransparent.css" /> 
	<link rel="stylesheet" type="text/css" href="CSS/style1.css">
	
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
   