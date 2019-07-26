<?php
session_start();
include "db.php";
if(isset($_POST["category"])){
	$category_query = "SELECT DISTINCT categorie FROM product";
	$run_query = mysqli_query($con,$category_query);
	
	echo "<div class='nav nav-pills nav-stacked'>
					<li class='active'><a href='index.php'>Type</a></li>";
	
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$cat_name = $row["categorie"];
			echo "<li><a href='#' class='category' catname='$cat_name'>$cat_name</a></li>";
		}
	echo"</div>";
	}
}

if(isset($_POST["getProduct"])){
	$product_query = "SELECT * FROM product";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$pnr = $row['productnr'];
			$pnaam = $row['naam'];
			$pcategorie = $row['categorie'];
			$ptype = $row['type'];
			$pprijs = $row['prijs'];
			$pafbeelding = $row['afbeelding'];
			echo "<div class='col-md-4'>
							<div class='panel panel-info'>
								<div class='panel-heading'>$pnaam</div>
								<div class='panel-body'><img src='images/$pafbeelding' width='160px' height='220px'/></div>
								<div class='panel-heading'>$$pprijs
								<button pnr='$pnr' style='float:right;' class='btn btn-danger btn-xs' id='product'>In winkelwagen</button></div>
							</div>
						</div>";
		}
	}
}

if(isset($_POST["get_selected_Category"])){
	$catname = $_POST["cat_name"];
	$sql = "SELECT * FROM product WHERE categorie = '$catname'";
	$run_query = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($run_query)){
			$pnr = $row['productnr'];
			$pnaam = $row['naam'];
			$pcategorie = $row['categorie'];
			$ptype = $row['type'];
			$pprijs = $row['prijs'];
			$pafbeelding = $row['afbeelding'];
			echo "<div class='col-md-4'>
							<div class='panel panel-info'>
								<div class='panel-heading'>$pnaam</div>
								<div class='panel-body'><img src='images/$pafbeelding' width='160px' height='220px'/></div>
								<div class='panel-heading'>€$pprijs
								<button pnr='$pnr' style='float:right;' class='btn btn-danger btn-xs' id='product'>In winkelwagen</button></div>
							</div>
						</div>";
	}
}

if(isset($_POST["inwinkelkar"])){
	$pnr = $_POST["pid"];
	$anr = $_SESSION["saccountnr"];
	$sql = "SELECT DISTINCT accountnr FROM bestelling WHERE accountnr = '$anr'";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
	if($count !== 1){
		$sql = "INSERT INTO `bestelling` (`bestellingnr`, `accountnr`) VALUES (NULL, '$anr')";
		mysqli_query($con,$sql);
	}
	$sql = "SELECT bestellingnr FROM bestelling WHERE accountnr = '$anr'";
	$run_query = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($run_query);
	$bnr = $row["bestellingnr"];
	$sql = "INSERT INTO `item` (`itemnr`, `bestellingnr`, `productnr`) VALUES (NULL, '$bnr', '$pnr')";
	mysqli_query($con,$sql);
}

if(isset($_POST["winkelkar"])){
	$anr = $_SESSION["saccountnr"];
	$sql = "SELECT bestellingnr FROM bestelling WHERE accountnr = '$anr'";
	$run_query = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($run_query);
	$bnr = $row["bestellingnr"];
	$sql = "SELECT item.bestellingnr, item.itemnr, product.naam, product.categorie, product.prijs FROM item LEFT JOIN product ON item.productnr = product.productnr WHERE bestellingnr = '$bnr'";
	$run_query = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($run_query)){
		$itemnr = $row['itemnr'];
		$naam = $row['naam'];
		$categorie = $row['categorie'];
		$prijs = $row['prijs'];
		echo"<div class='row'>
				<div class='col-md-2'><a href='#' verwijderid='$itemnr' class='btn btn-danger verwijder'>Verwijder</a></div>
				<div class='col-md-2'>$naam</div>
				<div class='col-md-2'>$categorie</div>
				<div class='col-md-2'>€$prijs</div>
			</div>";
	}
}

if(isset($_POST["uitwinkelkar"])){
	$id = $_POST["pid"];
	$sql = "DELETE FROM item WHERE itemnr = '$id'";
	$run_query = mysqli_query($con,$sql);
}

if(isset($_POST["betalen"])){
	$anr = $_SESSION["saccountnr"];
	$sql = "SELECT bestellingnr FROM bestelling WHERE accountnr = '$anr'";
	$run_query = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($run_query);
	$bnr = $row["bestellingnr"];
	$sql = "DELETE FROM item WHERE bestellingnr = '$bnr'";
	$run_query = mysqli_query($con,$sql);
}

?>