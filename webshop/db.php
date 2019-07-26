<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "casiostore";

//Create connection
$con = mysqli_connect($servername, $username, $password,$db);

//Check connnection
if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}



?>