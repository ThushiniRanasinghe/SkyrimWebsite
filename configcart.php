<?php

$dbhost = "localhost";

$dbuser = "root";

$dbpassword = "";

$dbdatabase = "movies";

$config_basedir = "http://localhost:88/webTechCw/";

$db = mysql_connect($dbhost, $dbuser, $dbpassword);

mysql_select_db($dbdatabase, $db);
?>