<?php

include "db.php";

$naam = $_POST["naam"];
$categorie = $_POST["categorie"];
$type = $_POST["type"];
$prijs = $_POST["prijs"];
$afbeelding = $_POST["afbeelding"];

if(empty($naam) || empty($categorie) || empty($type) || empty($prijs)|| empty($afbeelding)){
	echo "Vul alle velden in.";
}
else{
		$sql = "INSERT INTO `product` (`productnr`, `naam`, `categorie`, `type`, `prijs`, `afbeelding`) VALUES (NULL, '$naam', '$categorie', '$type', '$prijs', '$afbeelding');";
		$run_query = mysqli_query($con,$sql);
		if($run_query){
			echo "Toevoeging voltooid.";
		}
	}

?>