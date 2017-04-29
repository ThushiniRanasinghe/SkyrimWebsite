<?php
$catsql = "SELECT * FROM categories ;";
$catres = mysql_query($catsql);

while($catrow = mysql_fetch_assoc($catres)){
echo "<a href=". $config_basedir."products.php?id=".$catrow['id'].">". $catrow['name'] . "</a>";
echo"&nbsp;&nbsp;| &nbsp;&nbsp;";}
?>