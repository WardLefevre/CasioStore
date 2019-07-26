<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Inloggen</title>
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
			<div class="col-md-1"></div>
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">Inloggen</div>
					<div class="panel-body">
					
						<form action="inloggenaction.php" method="POST">
							<label for="email">Email</label>
							<input type="text" class="form-control" id="mail" name= "mail" required />
							<label for="wachtwoord">Wachtwoord</label>
							<input type="password" class="form-control" id="pass" name="pass" required />
							<p><br/></p>
							<input type="submit" class="btn btn-succes" id="btn" value="Login"/>
						</form>
						
						
					</div>
				</div>
			
			
			</div>
			
		</div>
</body>
</html>
		