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
			<ul class="nav navbar-nav"></ul>
		</div>
	</div>
	<p></br></p>
	<p></br></p>
	<p></br></p>
	<div class="container-fluid">
			<div id="toevoegenbericht"></div>
			<div class="col-md-1"></div>
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">Admin pagina: Producten toevoegen</div>
					<div class="panel-body">
						<form method="post">
						<div><label for="naam">Naam</label>
						<input type="text" id="naam" name="naam" class="form-control"></div>
						
						<div><label for="categorie">Categorie</label>
						<input type="text" id="categorie" name="categorie" class="form-control"></div>
						
						<div><label for="type">Type</label>
						<input type="text" id="type" name="type" class="form-control"></div>
						
						<div><label for="prijs">Prijs</label>
						<input type="number" id="prijs" name="prijs" class="form-control"></div>
						
						<div><label for="afbeelding">Afbeelding</label>
						<input type="text" id="afbeelding" name="afbeelding" class="form-control"></div>
						
						<p><br/></p>
						<div><input type="button" id="toevoegen" name="toevoegen" value="Toevoegen" class="btn btn-succes"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
</body>
</html>
		