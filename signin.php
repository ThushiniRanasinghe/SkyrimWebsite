<!DOCTYPE html>
<html 

<head>
	
	<title>SignIn</title>
	<link rel="stylesheet" href="CSS/ImageTransparent.css" /> 
	<link rel="stylesheet" type="text/css" href="common.css">
	<link rel="stylesheet" type="text/css" href="CSS/form.css">
	
</head>

<body ">

	&nbsp &nbsp &nbsp &nbsp <img src="images/Logo.gif" align="left"  id="transparent" width="60" height="60" >
	<form method='GET' action='poll.php' align="right" >
	<input type='hidden' name='day' id='day' >
	<input type='hidden' name='hou' id='hou' >
	<input type='hidden' name='min' id='min'>
	<input type='hidden' name='sec' id='sec' >
	<input type='submit' value='EXIT'align='top' style="background-color: #2BC1F2;margin-right: 50px;height:40px; width:80px;font-weight: bold;"/>
	</form>
	<hr>
	
<table width=500  cellpadding="6" cellspacing="10" class="layout" bgcolor=#9F9F9F align=center>
<tr>

	<th bgcolor=white>
	<h1> <font size="6" face="Comic Sans MS" color=#7F00FF> Welcome to SKYRIM Enter your name to visit our site</font> </h1> 
	<br><br><br><br>
	<form action="home.html" name="sign form"  method="POST" >
	<font size="6" ><b>
	<li> Name : <input type="text" id="name" " required > </li>
	<br><br>
	<input type="submit" value="Sign in" onclick='display()' style="width:50;padding: 10px 45px;background-color: #2BC1F2;border: none;color: white;margin-bottom: 10px;margin-left: 10px;font-size: 18px;font-weight: bold;cursor: pointer;font-family: 'Ubuntu', sans-serif; >
		<script>
			function display(){
			var name=document.getElementById('name').value
			window.alert("Welcome "+ name);
			}
		</script>
	</form>
	</th>
	</tr>
	</table><br><br><br><br>


</body>
</html>
<?php
require("configcart.php");
$vote="SELECT * FROM poll";
$votequery=mysql_query($vote);
$rowq = mysql_fetch_array($votequery);
	
$votes1="UPDATE poll SET vote=0 WHERE poll_id='1'";
$votequerys1=mysql_query($votes1);
$votes2="UPDATE poll SET vote=0 WHERE poll_id='2'";
$votequerys2=mysql_query($votes2);
$votes3="UPDATE poll SET vote=0 WHERE poll_id='3'";
$votequerys3=mysql_query($votes3);
$votes4="UPDATE poll SET vote=0 WHERE poll_id='4'";
$votequerys4=mysql_query($votes4);


?>
