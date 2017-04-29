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

$custsql = "SELECT id, status from orders WHERE session = '" . session_id(). "' AND status < 2;";
$custres = mysql_query($custsql);
$custrow = mysql_fetch_assoc($custres);
$itemssql = "SELECT products.*, orderitems.*, orderitems.id AS itemid FROM products, orderitems WHERE orderitems.product_id = products.id AND order_id = " . $custrow['id'];
$itemsres = mysql_query($itemssql);
$itemnumrows = mysql_num_rows($itemsres);

}
else
{
$itemnumrows = 0;
}
if($itemnumrows == 0)
{
echo "You have not added anything to your shopping cart yet.";
}
else
{
echo "<table cellpadding='10' bgcolor='white' name='tablecart' align=center>";
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

if($total<100){
	echo("<style>body {
	background-color:#FF7F00;}</style>");

}else if($total<200 && $total>100){
	echo("<style>body {
	background-color:#00FFFF;}</style>");
}else if($total<300 && $total>200){
	echo("<style>body {
	background-color:#32CD99;}</style>");
}else if($total<400 && $total>300){
	echo("<style>body {
	background-color:#A9A9A9;}</style>");
}else if($total<500 && $total>400){
	echo("<style>body {
	background-color:#9370DB;}</style>");
}else {
	echo("<style>body {
	background-color:#CC3299;}</style>");
}
}
?>