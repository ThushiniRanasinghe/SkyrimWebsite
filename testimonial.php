<!DOCTYPE html>
<html 

<head>
	
	<title>Register</title>
	<link rel="stylesheet" href="CSS/style.css" />  
	<link rel="stylesheet" href="CSS/ImageTransparent.css" /> 
	<link rel="stylesheet" type="text/css" href="CSS/style1.css">
	<link rel="stylesheet" type="text/css" href="common.css">
	
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
<table width=500 border="5" cellpadding="6" cellspacing="10" class="layout" align=center>
  <tr>
    <th bgcolor="#FFFFFF" class="baner-abt" scope="col"align="left">
           
      <div align="left"></div>
      <?php
      $username = "root";
      $password = "";
      $host = "localhost";

      $connector = mysql_connect($host,$username,$password)
          or die("Unable to connect");
     //   echo "Connections are made successfully::";
      $selected = mysql_select_db("web_tech", $connector)
        or die("Unable to connect");
 
	
		$randomcommnet=(rand(1,4));
	
      //execute the SQL query and return records
    $result = mysql_query("SELECT * FROM tblcomment where id='$randomcommnet'");
      ?>
 

	
        <?php
		echo ("<font size=5 color=#123AAT >"."COMMENTS GIVEN BY USERS"."</font>");
		 echo nl2br("\n");
		 echo nl2br("\n");
		 
          while( $row = mysql_fetch_assoc( $result ) ){
		  
         echo "<table >" ;
		 echo "<tr height=30 bgcolor='lightblue'>" ;
		 	echo "<td width=100>" ; echo 'Name:'; 
			echo "<td>" . $row['name'] . "</td>"; 
			 echo "</td>" ;
		echo "</tr>" ;
		
		echo "<tr height=30 bgcolor='seablue'>" ;
			echo "<td>" ; echo 'Subject:'; 
			echo "<td>" . $row['subject'] . "</td>"; 
			 echo "</td>" ;
		echo "</tr>" ;
					
		echo "<tr height=100 bgcolor='lightblue'>" ;
		      	echo "<td>" ; echo 'Comment:'; 
			echo "<td>" . $row['comment'] . "</td>"; 
			echo "</td>" ;
		echo "</tr>" ;
				
		echo "<tr height=30 bgcolor='seablue'>" ;
			echo "<td>" ; echo 'rate:'; 
			 echo "<td>" . $row['rate']  . " Star" . "</td>"; 
			 echo "</td>" ;
		echo "</tr>" ;
	echo "</td>"; echo "</tr>" ; echo "</table>";

		 echo nl2br("\n");

          }
        ?>
      </tbody>
</table>
     <?php mysql_close($connector); ?>


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
