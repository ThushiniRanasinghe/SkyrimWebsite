
<!DOCTYPE html>
<html 

<head>
	
	<title>Weekly Poll</title>
	<link rel="stylesheet" href="CSS/style.css" />  
	<link rel="stylesheet" href="CSS/ImageTransparent.css" /> 
	<link rel="stylesheet" type="text/css" href="CSS/style1.css"/>
	<link rel="stylesheet" type="text/css" href="common.css"/>
	


	
	
</head>

<body  >

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
		<li class="topmenu"><a href="WeeklyPoll1.php" >WEEKLY POLL</a></li>
		<li class="topmenu"><a href="Testimonial.php" >TESTIMONIALS</a></li>
		<li class="topmenu"><a href="Register.html" >REGISTER</a></li>
		<li class="topmenu"><a href="ShoppingCart.html" ><img src="Images/ShoppingCart.png"></a></li>
		
	</ul>
	<hr>
	
	<script>
	
	function getVote(int){
		if(window.XMLHttpRequest){
			//works for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		}else{
			//works for IE6 and IE5 only
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
			xmlhttp.onreadystatechange=function(){
				if(xmlhttp.readyState==4 && xmlhttp.status==200){
					
					document.getElementById("poll").innerHTML=xmlhttp.responseText;
				}
			}
				xmlhttp.open("GET", "weeklypoll.php?vote=" +int,true);
				xmlhttp.send();
	}
		

</script>
<?php 
 $connection = mysql_connect('localhost', 'root', ''); 
mysql_select_db('movies');

$query = "SELECT * FROM polltime"; 
$prodres = mysql_query($query);
$numrows = mysql_num_rows($prodres);
$result = mysql_fetch_assoc($prodres);
$days=$result['days'];
$hours=$result['hours'];
$minutes=$result['minutes'];
$seconds=$result['seconds'];

?>
<script>
window.onload = function(){
	var days=<?php echo($days); ?>;
	var hou=<?php echo($hours); ?>;
     var min=<?php echo($minutes); ?>;
     var sec=<?php echo($seconds); ?>;
     setInterval(function(){

       document.getElementById("demo").innerHTML =days+" days : "+hou+" hours : "+ min +" minutes : " + sec+" seconds" ;
	document.getElementById("day").value=days;
	document.getElementById("hou").value=hou;
	document.getElementById("min").value=min;
	document.getElementById("sec").value=sec;
       sec--;
       if(sec == 00){
	 
         min--;
         sec = 59;
         if (min == 00){
		hou--;
            	min = 59;
		sec=59;
		if(hou==00){
			days--;
			hou=23;
			min = 59;
			sec=59;
			if(days==00){
				days=7;
			}
		}
		
       	}
      }
      },500);

}
	</script>

	
    <?php 
$query = "SELECT * FROM poll"; 
$result = mysql_query($query);


echo"<div class='container'>";
echo"<div id='head'><font size=6 color='red'>Be a part of the race by placing your vote for your favourite movie of 2016!</font></div>";
	
echo"<div id='poll'>";
    echo"<form id='hello' method='GET' action='poll.php'>";
echo"<table style='width:100%'>";// start a table tag in the HTML
	echo"<tr>";
	echo"<marquee behavior='scroll' bgcolor='yellow'  loop='-1' width='100%' ><i><font color='blue'><strong>Welcome You have until<p align='left' id='demo'>to vote </strong></font></i>";
	echo"</marquee>";
	echo"</tr>";

echo"<tr>";
 echo"<td><img src='images/bVs.jpg' alt='movie' style='width:150px;height:180px'><br><br><br><br></td>";
     echo"<td><img src='images/KF-3.jpg' alt='movie'  style='width:150px;height:180px'><br><br><br><br></td>";
     echo"<td><img src='images/DP.jpg' alt='movie'  style='width:150px;height:180px'><br><br><br><br></td>";
     echo"<td><img src='images/JB.jpg' alt='movie'  style='width:150px;height:180px'><br><br><br><br></td>";
   echo"</tr>";




while($row = mysql_fetch_array($result)){
if($row['vote']=='0'){
	if($row['poll_name']=='batman'){
		echo"<tr><td><input type='radio' name='vote'  value='0' onclick='getVote(this.value)'><font size=4 color='blue'>Batman Vs. Superman</font></td>";
	}
	if($row['poll_name']=='kungfu'){
		echo"<td><input type='radio' name='vote'  value='1' onclick='getVote(this.value)'><font size=4 color='blue'>Kung Fu Panda-3</font></td>";
	}
	if($row['poll_name']=='deadpool'){
		echo"<td><input type='radio' name='vote'  value='2' onclick='getVote(this.value)'><font size=4 color='blue'>Deadpool</font></td>";
	}
	if($row['poll_name']=='junglebook'){
		echo"<td><input type='radio' name='vote'  value='3' onclick='getVote(this.value)'><font size=4 color='blue'>Jungle Book</font></td></tr>";
	}
		
}else if($row['vote']=='1'){
	if($row['poll_name']=='batman'){
		echo"<tr><td><input type='radio' name='vote'  value='0' onclick='getVote(this.value)' disabled><font size=4 color='blue'>Batman Vs. Superman</font></td>";
	}
	if($row['poll_name']=='kungfu'){
		echo"<td><input type='radio' name='vote'  value='1' onclick='getVote(this.value)' disabled><font size=4 color='blue'>Kung Fu Panda-3</font></td>";	
	}
	if($row['poll_name']=='deadpool'){
		echo"<td><input type='radio' name='vote'  value='2' onclick='getVote(this.value)' disabled><font size=4 color='blue'>Deadpool</font></td>";
	}
	if($row['poll_name']=='junglebook'){
		echo"<td><input type='radio' name='vote'  value='3' onclick='getVote(this.value)' disabled><font size=4 color='blue'>Jungle Book</font></td></tr>";	
	}
}	
}
echo"</tr>";
 echo"</table>";//Close the table in HTML


 echo"</form>";
    echo" </div>";
  echo" </div>";
echo"<br><br><br><br><br><br><br><br>";

mysql_close(); //Make sure to close out the database connection


?>
   	
   
	<div>
	<footer>
	<font color=white>
	<font size=3><b><u>JOIN US</font></u></b><br>
	
	<a href="https://plus.google.com/communities/107095681279963536312">
<img src="Images/G+.png" width="23" height="23" /> </a>
	<a href="https://www.facebook.com/Unofficial-Skyrim-589599051204502/timeline?ref=page_internal&__mref=message_bubble"><img src="Images/facebook.png" width="23" height="23" /> </a>
	<a href="https://twitter.com/Skyrim_movies"><img src="Images/twitter.png" width="23" height="23" /> </a>
	<center>
	<font color=#FFFFFF>Edited by:</font><a href="CV-Umar.html"><font color=#3299CC>Umar</a>
	<hr color=#32CD99>
	<center><font size=3 >
	<b>
	<a href="home.html"><font color=#00009C>HOME |</a>&nbsp
	<a href="Movies.php"><font color=#00009C>MOVIES &nbsp|</a>&nbsp
	<a href="ContactUs.html"><font color=#00009C>CONTACT US &nbsp |</a>&nbsp
	<a href="AboutUs.html"><font color=#00009C>ABOUT US &nbsp|</a>&nbsp
	<a href="Quiz.html"><font color=#00009C>QUIZ &nbsp|</a>&nbsp
	<a href="WeeklyPoll1"><font color=#00009C>WEEKLY POLL &nbsp|</a>&nbsp
	<a href="Testimonial.php"><font color=#00009C>TESTIMONIAL&nbsp|</a>&nbsp
	<a href="Register.html"><font color=#00009C>REGISTER &nbsp|</a>&nbsp</b><br>
	<img src="images/Copyright.png" width="15" height="15" /> </a> <font color=#000000><font color=#FFFFFF>2016 Copyright SKYRIM.All Rights Reserved</font>
	
	</script>
	</footer>
	</div>
</body>
</html>