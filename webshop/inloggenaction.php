<?php
include "db.php";

session_start();

$username = $_POST['mail'];
$password = $_POST['pass'];
$username = mysqli_real_escape_string($con,$username);
$password = mysqli_real_escape_string($con,$password);

$result = mysqli_query($con,"SELECT * FROM account WHERE email = '$username' AND wachtwoord = '$password'")
	or die("Failed to query database");
$row = mysqli_fetch_array($result);
if ($row['email'] == $username && $row['wachtwoord'] == $password){
	$_SESSION["saccountnr"] = $row['accountnr'];
	$_SESSION["svoornaam"] = $row['voornaam'];
	if($_SESSION["saccountnr"] == 1){
		header("Location:admin.php");
	}else{
	header("Location: profiel.php");}
} else {
	echo "failed";
}

?>