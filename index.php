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


$enlace = mysqli_connect('192.168.100.67', 'DEIBY', 'Deiby', 'DEIBY', '1521', 'orcl');
if (!$enlace) {

    die('No pudo conectar: ');
}


if ($enlace) {
	header('home.php');
} else {
	echo "no conectado";
}

	/*	session_start();

	$error = '';

	if (isset($_POST['login'])) {

		if (empty($_POST['username']) || empty($_POST['userPass'])) {


			$error = "Username or Password not valid";
		} else {


			/*mysqli_real_escape_string($conn,
			$dbPassword = mysqli_real_escape_string($conn, $_POST['userPass']);
			
			$serverUser =  $_POST['username'];
			$dbPassword = $_POST['userPass'];
			$serverName = "192.168.100.67";
			$dbName = "Deiby";

			$conn = new mysqli($serverName, $serverUser, $dbPassword, $dbName);

			$query = "SELECT username, userPass from administradores where username=? AND contrasena=? LIMIT 1";

			$stmt = $conn->prepare($query);
			$stmt->bind_param("ss", $serverUser, $dbPassword);
			$stmt->execute();
			$stmt->bind_result($serverUser, $dbPassword);
			$stmt->store_result();

			if ($stmt->fetch()) {

				$_SESSION['username'] = $serverUser;
				header("location:home.php");
			} else {

				$error = "Username or Password invalid";
			}

			mysqli_close($conn);
		}


	}
	*/

	/*	if (isset($_HOST['username'])) {

		if (isset($_POST['login'])) {

			if ($serverUser != "" && $dbPassword != "") {

				$sql = "Select c1  from administradores WHERE username = '$serverUser' and 	contrasena = 'dbPassword' ";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

				$count = mysqli_num_rows($result);

				if ($count == 1) {
				}
			}
		}


	}

	//include 'DBConnection.php';

*/
	?>


	<div class="container" style="margin:auto; width: 2000px; height: 1200px;display: flex; flex-wrap: wrap; align-content: center; padding: 324px; ;">
		<!-- border: 1px solid #c3c3c3; -->

		<div class="card text-white bg-secondary mb-2 d-inline-block" style=" max-width: 2000px; padding-left:20%; padding-right:20%;  ">
			<div class="card-header" style="padding-left:20%; padding-right:20%">
				<h3>Login</h3>
			</div>
			<div class="card-body">
				<h4 class="card-title">Enter username and password to log on:</h4>
				<p class="card-text">

				<div class="form-bottom" style="text-align:right;">
					<!-- action="Home.php" -->
					<form role="form" method="POST" class="login-form">
						<div class="form-group">
							<label class="sr-only" for="form-username">Username</label>
							<input type="text" name="username" placeholder="Username" class="form-username form-control" id="form-username">
						</div>
						<div class="form-group">
							<label class="sr-only" for="form-password">Password</label>
							<input type="password" name="userPass" placeholder="Password" class="form-password form-control" id="form-password">
						</div>
						<button type="submit" class="btn" name="login">Sign in!</button>
					</form>
				</div>

				</p>
			</div>
		</div>
	</div>


	<div class="modal fade" method=modal; id="myModal" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">¡Alerta!</h4>
				</div>
				<div class="modal-body">
					<p>Rellene los espacios en blanco</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar.</button>
				</div>
			</div>

		</div>
	</div>

</body>

</html>