<?php //start of the php file

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'web_tech'; //db name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$userFirstName=$_GET['firstname']; /* assigning the firstname of the user taken from the form in to a php variable */
$userLastName=$_GET['lastname']; /* assigning the lastname of the user taken from the form in to a php variable */
$useremail=$_GET['email']; /* assigning the email of the user taken from the form in to a php variable */
$userdob=$_GET['dob']; /* assigning the dob of the user taken from the form in to a php variable */
$useraddress=$_GET['address']; /* assigning the address of the user taken from the form in to a php variable */
$usercontactno=$_GET['contactno']; /* assigning the contactno of the user taken from the form in to a php variable */
$usercountry=$_GET['country']; /* assigning the country of the user taken from the form in to a php variable */
$userusername=$_GET['username']; /* assigning the username of the user taken from the form in to a php variable */
$userpassword=$_GET['password']; /* assigning the password of the user taken from the form in to a php variable */

/* inserting data taken from the user in to the database table userdetail */
$sql = "INSERT INTO `UserDetail` VALUES ('$userFirstName','$userLastName','$useremail', '$userdob', '$useraddress','$usercontactno',' $usercountry','$userusername','$userpassword')";

	if ($conn->query($sql) === TRUE) {
    	echo "User Details entered successfully"; /* dispaying message if the data is successfully added to the database */
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error; /* dispaying error message if the data is not added to the database */
	}
     echo"<center>";
	 echo"<a href='home.html'>GO BACK TO HOME</a>";

?> 