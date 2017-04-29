
<?php //start of php file
if(!isset($_SESSION)){
    session_start(); // starting a session if not started
}
require("configcart.php");
require("functions.php");
require("header.php");

$validid = pf_validate_number($_GET['id'], "redirect", $config_basedir);
$prodsql = "SELECT * FROM products WHERE id = " . $_GET['id'] . ";";
$prodres = mysql_query($prodsql);
$numrows = mysql_num_rows($prodres);
$prodrow = mysql_fetch_assoc($prodres);

if ($numrows == 0) {
    header("Location: " . $config_basedir);
} else {
    if ((isset($_POST['submit']))) {
	if(($_POST['quantity']!=0)){
		if(($_POST['quantity']<$prodrow['quantity'])){
        			
       			 if ((isset($_SESSION['SESS_ORDERNUM'])) ){
				
           				$itemsql = "INSERT INTO orderitems(order_id,product_id, quantity)
VALUES(" . $_SESSION['SESS_ORDERNUM'] . ", " . $_GET['id'] . ", " . $_POST['quantity'] . ")";
            mysql_query($itemsql);
                		
			} else {
            				$sql = "INSERT INTO orders(date, session)
VALUES(" . "NOW(), '" . session_id() . "')";
                			mysql_query($sql);
               				 session_start("SESS_ORDERNUM");
                			$_SESSION['SESS_ORDERNUM'] = mysql_insert_id();
                			$itemsql = "INSERT INTO orderitems(order_id, product_id, quantity)
VALUES(" . $_SESSION['SESS_ORDERNUM'] . ", " . $_GET['id'] . ", " . $_POST['quantity'] . ")";
                			mysql_query($itemsql);
			}
			$totalprice = $prodrow['price'] * $_POST['quantity'];
        			$updsql = "UPDATE orders SET total = total + " . $totalprice . " WHERE id = " . $_SESSION['SESS_ORDERNUM'] . ";";
        			mysql_query($updsql);
   
			$updatequantity=$prodrow['quantity']- $_POST['quantity'];
			$updating="UPDATE products SET quantity=".$updatequantity." WHERE id =" . $_GET['id'] . ";";
			 mysql_select_db('go4shop');
			$updated = mysql_query($updating);
			
			if(! $updated){
				die(' Could not update data: ' . mysql_error());
			}else{
				echo "<font size=5 align=center color='white'>Updated data successfully and </font>";
			}
			echo"<font size=5 align=center color='white'>Product Succefully Added to the Shopping Cart!!!</font>" ;
		}else{
			echo"<font size=5 align=center color='white'>ERROR:Available stock is less than the quantity you entered</font>";
			
		}
}else{
		echo"<font size=5 align=center color='white'>ERROR:Enter a Quantity before submitting!!!!!</font>";
	}
	
    } else {
        
        echo "<form action='addtobasket.php?id=" . $_GET['id'] . "' method='POST'>";
        echo "<table cellpadding='10' height=300 bgcolor='white' align=center>";
        echo "<tr>";
      
            echo "<td>
<img src='./Images/" . $prodrow['image'] . "' width='50' alt='" . $prodrow['name'] . "'></td>";
        
        echo "<td>" . $prodrow['name'] . "</td>";
        echo "<td>"."No.of Products in Stock - ".$prodrow['quantity']."</td>";
        echo "<td>Quantity <input type='text' name='quantity'></td>";
        echo "<td><strong>&pound;" . sprintf('%.2f', $prodrow['price']) . "</strong></td>";
        echo "<td><input type='submit'
name='submit' value='Add to basket'></td>";
        echo "</tr>";
        echo "</table>";
        echo "</form>";
    }
}
if (isset($_SESSION["LAST_ACTIVITY"])) {
    session_destroy();  
    session_unset();  
    $vote="SELECT * FROM poll";
    $votequery=mysql_query($vote);
	while($rowq = mysql_fetch_array($votequery)){
		$votes="UPDATE poll SET vote=0";
		$votequerys=mysql_query($votes);
	}
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
   