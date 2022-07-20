<!DOCTYPE html>
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<meta charset="UTF-8">
	<title>Usuarios</title>
	
	<!--Libreria de Bootstrap
	<link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!--Libreria de Alertify-->
	<link rel="stylesheet" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" href="librerias/alertifyjs/css/themes/default.css">
	
	<!--Libreria de js-->
	<script src="librerias/jquery-3.3.1.min.js"></script>
	<script src="js/funciones.js"></script>
	<!--<script src="librerias/bootstrap/js/bootstrap.js"></script>-->|
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
	
	
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

</head>
<body>

	<div class="container">
		<ul class="nav nav-tabs">
			<li role="presentation"><a href="/index.php">Home</a></li>
		  <li role="presentation"><a href="/Consultas.php">Consultas</a></li>
		  <li role="presentation"><a href="#">Nombres Más comunes</a></li>
		  <li role="presentation"><a href="#">Nombres Menos comunes</a></li>
		  <li role="presentation"><a href="#">Cantidad de Electores</a></li>
		  <li role="presentation"><a href="#">Sumario de personas</a></li>
		  <li role="presentation"><a href="#">Reporte Consolidados</a></li>
		  <li role="presentation"><a href="#">Bitácora de Consultas</a></li>
		
		</ul>
	</div>

 <!--	<div class="container">-->
		<!--	<div id="tabla"></div> <!--lo llamamos abajo con el jquery-->
	<!--	</div>-->

	 <!-- Top content -->
	 <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                       
                            <div class="description">
                            	<p>
	                            	
                            	</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login</h3>
	                            		<p>Enter username and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="control.php" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Username</label>
				                        	<input type="text" name="userId" placeholder="Username..." class="form-username form-control" id="form-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="userPass" placeholder="Password..." class="form-password form-control" id="form-password">
				                        </div>
				                        <button type="submit" class="btn" name="login">Sign in!</button>
				                    </form>
			                    </div>
		                    </div>
		                
	                        
                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                    
                    </div>
                    
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->



</body>
</html>

<!--Estructura basica de Jquery-->

<script type="text/javascript">
	$(document).ready(function(){
		//Llamando la tabla
		$('#tabla').load('componentes/tabla.php');
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){

		$('#guardarNuevo').click(function(){

			nombre=$('#nombre').val();
			apellido=$('#apellido').val();
			email=$('#email').val();
			telefono=$('#telefono').val();

			agregardatos(nombre,apellido,email,telefono)
		});


		$('#actualizarDatos').click(function(){

			actualizaDatos();

		});
	});
</script>