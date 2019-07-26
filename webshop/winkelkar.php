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
				<li><a href="inloggen.php">Winkelwagen</a></li>
				<li><a href="uitloggen.php">Uitloggen</a></li>
				<li></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-2"><b>Verwijder</b></button></div>
						<div class="col-md-2"><b>Product</b></div>
						<div class="col-md-2"><b>Categorie</b></div>
						<div class="col-md-2"><b>Prijs</b></div>
					</div>
					<div id="winkelkar"></div>
					<p><br/></p>
					<div class='col-md-2'><a href='#' class='btn btn-danger betalen'>Betalen</a></div>
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
</body>
</html>