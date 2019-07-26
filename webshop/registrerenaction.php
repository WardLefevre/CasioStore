<?php

include "db.php";

$naam = $_POST["naam"];
$voornaam = $_POST["voornaam"];
$email = $_POST["email"];
$wachtwoord = $_POST["wachtwoord"];
$wachtwoordcheck = $_POST["wachtwoordcheck"];
$naamvalidatie = "/^[A-Z][a-zA-Z ]+$/";
$emailvalidatie = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";


if(empty($naam) || empty($voornaam) || empty($email) || empty($wachtwoord)){
	echo "Foute invoer.";
}
else{
	if(!preg_match($naamvalidatie,$naam)){
		echo "$naam is not valid";
		exit();
	}
	if(!preg_match($naamvalidatie,$voornaam)){
		echo "$voornaam is not valid";
		exit();
	}
	if(!preg_match($emailvalidatie,$email)){
		echo "$email is not valid";
		exit();
	}
	if(strlen($wachtwoord) < 5){
		echo "Password is weak";
		exit();
	}
	if(strlen($wachtwoordcheck) < 5){
		echo "Password is weak";
		exit();
	}
	if($wachtwoord != $wachtwoordcheck){
		echo "Password is not the same";
		exit();
	}
	
	
	$sql = "SELECT accountnr FROM account WHERE email = '$email' LIMIT 1";
	$check_query = mysqli_query($con,$sql);
	$count_email = mysqli_num_rows($check_query);
	if($count_email > 0){
		echo "Email adres al in gebruik!";
		exit();
	} else {
		$sql = "INSERT INTO 
		`account` 
		(`accountnr`, `naam`, `voornaam`, `email`, 
		`wachtwoord`)
		VALUES (NULL, '$naam', '$voornaam', '$email', 
		'$wachtwoord');";
		$run_query = mysqli_query($con,$sql);
		if($run_query){
			echo "Registratie voltooid. Je kan nu inloggen.";
		}
	}
}

?>