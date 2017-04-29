<?php
if(!isset($_SESSION)){
    session_start();
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
	<link rel="stylesheet" type="text/css" href="common.css">
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
    <div id="bar">
        <?php
        include("bar.php");
       ?></div>