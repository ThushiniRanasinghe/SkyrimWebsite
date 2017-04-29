<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'web_tech';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$commentName = $_POST['name'];
$commentSubject = $_POST['subject'];
$commentEmail = $_POST['email'];
$comment = $_POST['details'];
$commentRate = $_POST['rate'];

$sql = 

"INSERT INTO `tblcomment` (`name`, `subject`, `email`,`comment`,`rate`)
	

VALUES ('$commentName', '$commentSubject', '$commentEmail', '$comment', 

'$commentRate')";

if ($conn->query($sql) === TRUE) {
     if (isset($_SERVER

["HTTP_REFERER"])) {
        header("Location: " . $_SERVER

["HTTP_REFERER"]);
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
 if 

(isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER

["HTTP_REFERER"]);
    }
}

$conn->close();
?>
