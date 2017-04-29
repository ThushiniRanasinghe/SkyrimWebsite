<?php


function pf_validate_number($value, $function, $redirect) {
if(isset($value) == TRUE) {
if(is_numeric($value) == FALSE) {
$error = 1;
}
else if((isset($error)) == 1) {
header("Location: " . $redirect);
}
else {
$final = $value;

}
}
else {
if($function == 'redirect') {
header("Location: " . $redirect);
}
if($function == "value") {
$final = 0;
}
}
return $final;
}

function showcart()
{
if(isset($_SESSION['SESS_ORDERNUM']))
{
$itemssql = "SELECT products.*, orderitems.*, orderitems.id AS itemid FROM products, orderitems WHERE orderitems.product_id = products.id AND order_id = " . $_GET['order'];
$itemsres = mysql_query($itemssql);
$itemnumrows = mysql_num_rows($itemsres);

}
else
{
$itemnumrows = 0;
}
if($itemnumrows == 0)
{
echo "<table cellpadding='10'  width=670 bgcolor='white' align=center>";
echo "<tr>";  
echo"<td align=center>"."<font size=4 color=blue >".'The Order ID you entered is not Available '."</font>"."</td>" ;
echo "</tr>";
echo "</table>";
}
else
{
echo "<table cellpadding='10' bgcolor='white' align=center>";
echo "<tr>";
echo "<td></td>";
echo "<td><strong>Item</strong></td>";
echo "<td><strong>Quantity</strong></td>";
echo "<td><strong>Unit Price</strong></td>";
echo "<td><strong>Total Price</strong></td>";
echo "<td></td>";
echo "</tr>";
while($itemsrow = mysql_fetch_assoc($itemsres))
{
$quantitytotal =$itemsrow['price'] * $itemsrow['quantity'];
echo "<tr>";

echo "<td><img src='Images/" .$itemsrow['image'] . "' width='50' alt='". $itemsrow['name'] . "'></td>";

echo "<td>" . $itemsrow['name'] . "</td>";
echo "<td>" . $itemsrow['quantity'] . "</td>";
echo "<td><strong>&pound;" . sprintf('%.2f', $itemsrow['price']) . "</strong></td>";
echo "<td><strong>&pound;". sprintf('%.2f', $quantitytotal) . "</strong></td>";
echo "<td>[<a href='delete.php?id=". $itemsrow['itemid'] . "'>X</a>]</td>";
echo "</tr>";
@$total = $total + $quantitytotal;
$totalsql = "UPDATE orders SET total = ". $total . " WHERE id = ". $_SESSION['SESS_ORDERNUM'];
$totalres = mysql_query($totalsql);
}
echo "<tr>";
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo "<td>TOTAL</td>";
echo "<td><strong>&pound;". sprintf('%.2f', $total) . "</strong></td>";

echo "<td></td>";
echo "</tr>";
echo "</table>";

}


}
?>