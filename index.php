<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="UTF-8">

	<title>Login</title>
	<!--Libreria de Bootstrap´

	<link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">-->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

	<link rel="stylesheet" href="css/site.css">
	<link rel="stylesheet" href="css/toggle-bootstrap.css">
	<link rel="stylesheet" href="css/toggle-bootstrap-dark.css">
	<link rel="stylesheet" href="css/toggle-bootstrap-print.css">

	<!--Libreria de Alertify-->
	<link rel="stylesheet" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" href="librerias/alertifyjs/css/themes/default.css">
	<link rel="stylesheet" href="librerias\alertifyjs\css\sidebar.css">
	<link rel="stylesheet" href="css/bootstrap-dark.css">
	<link rel="stylesheet" href="css/bootstrap-prefers-light.css">

	<!--Libreria de js-->
	<script src="librerias/jquery-3.3.1.min.js"></script>
	<script src="js/funciones.js"></script>
	<script src="js\sidebar.js"> </script>

	<link rel="stylesheet" href="bd\css\bootstrap-dark-prefers-light.css">
	<link rel=" stylesheet" href="bd\css\bootstrap-dark-prefers-light.min.css">
	<link rel=" stylesheet" href="bd\css\bootstrap-dark.css">
	<link rel=" stylesheet" href="bd\css\bootstrap-dark.min.css">

	<link rel=" stylesheet" href="bd\css\bootstrap-light.css">
	<link rel="stylesheet" href="bd\css\bootstrap-light.min.css">
	<link rel="stylesheet" href="bd\css\bootstrap-prefers-dark-color-only.css">
	<link rel="stylesheet" href="bd\css\bootstrap-prefers-dark.css">
	<link rel="stylesheet" href="bd\css\bootstrap-prefers-dark.min.css">
	<link rel="stylesheet" href="bd\css\form-elements.css">
	<link rel="stylesheet" href="bd\css\style.cc">
	<link rel="stylesheet" href="bd\css\toggle-bootstrap-dark.css">
	<link rel="stylesheet" href="bd\css\toggle-bootstrap-dark.min.css">
	<link rel="stylesheet" href="bd\css\toggle-bootstrap-print.css">
	<link rel="stylesheet" href="bd\css\toggle-bootstrap-print.min.css">
	<link rel="stylesheet" href="bd\css\toggle-bootstrap.css">
	<link rel="stylesheet" href="bd\css\toggle-bootstrap.min.css">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>

</head>

<body>

	<?php

	include 'DBConnection.php';
	session_start();

	if (isset($_POST['username'])) {

		$username =  $_POST['username'];
		$password = $_POST['password'];

		if (empty($username) || empty($password)) {

			echo ' <script> alert ("Complete los campos. 🤐") </script> ';
		} else {

			$stid = ociparse($DBConn, 'SELECT * FROM administradores ');
			oci_execute($stid);

			while (($row = oci_fetch_array($stid)) != false) {

				if ($row[1] == $username && $row[2] == $password) {


					header("Location: http://localhost/LenguajesWeb/Home.php ");
				} else {
				}
			}

			echo ' <script> alert ("La contraseña es incorrecta 🤐") </script> ';
		}
	}


	?>


	<div class="container" style="margin:auto; width: 2000px; height: 1200px;display: flex; flex-wrap: wrap; align-content: center; padding: 324px; ;">

		<div class="card text-white bg-secondary mb-2 d-inline-block" style=" max-width: 2000px; padding-left:20%; padding-right:20%;  ">
			<div class="card-header" style="padding-left:20%; padding-right:20%">
				<h3>Login</h3>
			</div>
			<div class="card-body">
				<h4 class="card-title">Enter username and password to log on:</h4>
				<p class="card-text">
				<div class="form-bottom" style="text-align:right;">

					<form role="form" method="POST" class="login-form">
						<div class="form-group">
							<label class="sr-only" for="form-username">Username</label>
							<input type="text" name="username" placeholder="Username" class="form-username form-control" id="form-username">
						</div>
						<div class="form-group">
							<label class="sr-only" for="form-password">Password</label>
							<input type="password" name="password" placeholder="Password" class="form-password form-control" id="form-password">
						</div>
						<button type="submit" class="btn" name="login">Sign in!</button>
					</form>
				</div>
				</p>
			</div>
		</div>
	</div>


</body>

</html>