<?php
session_start();
if(!isset($_SESSION["saccountnr"])){
	header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Casio</title>
	<link rel="stylesheet" href="reset.css"/>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
</head>
<body>
	<div class="navbar" style="position:fixed;">
		<div class="container-fluid">
			<a href="index.php" class="navbar-brand">Casio</a>
			<ul class="nav navbar-nav">
				<li><a href="winkelkar.php">Winkelkar</a></li>
				<li><a href="uitloggen.php">Uitloggen <?php echo "(".$_SESSION["svoornaam"].")"; ?></a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<div class="col-md-2" style="position: fixed;">
					<div id="get_category"></div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="panel-body">
					<div id="get_product"></div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>