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
			<div id="registreerbericht"></div>
			<div class="col-md-1"></div>
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">Registreren</div>
					<div class="panel-body">
						<form method="post">
						<div><label for="naam">Naam</label>
						<input type="text" id="naam" name="naam" class="form-control"></div>
						
						<div><label for="voornaam">Voornaam</label>
						<input type="text" id="voornaam" name="voornaam" class="form-control"></div>
						
						<div><label for="email">Email</label>
						<input type="text" id="email" name="email" class="form-control"></div>
						
						<div><label for="wachtwoord">Wachtwoord</label>
						<input type="password" id="wachtwoord" name="wachtwoord" class="form-control"></div>
						
						<div><label for="wachtwoordcheck">Wachtwoord verifiëren</label>
						<input type="password" id="wachtwoordcheck" name="wachtwoordcheck" class="form-control"></div>
						<p><br/></p>
						<div><input type="button" id="registreer" name="registreer" value="Registreer" class="btn btn-succes"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
</body>
</html>