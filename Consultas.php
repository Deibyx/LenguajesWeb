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

</head>
<body>

	<div class="container">
		<ul class="nav nav-tabs">
        <li role="presentation"><a href="/index.php">Home</a></li>
		  <li role="presentation"><a href="#">Consultas</a></li>
		  <li role="presentation"><a href="#">Nombres Más comunes</a></li>
		  <li role="presentation"><a href="#">Nombres Menos comunes</a></li>
		  <li role="presentation"><a href="#">Cantidad de Electores</a></li>
		  <li role="presentation"><a href="#">Sumario de personas</a></li>
		  <li role="presentation"><a href="#">Reporte Consolidados</a></li>
		  <li role="presentation"><a href="#">Bitácora de Consultas</a></li>
		
		</ul>
	</div>
    <div class="container py-5">
    <div class="row">
      <div class="col-md-10 mx-auto">
        <h1 class="h1 text-center">Consultas</h1>

        <!-- DYNAMIC TABLE'S FORM -->
        <form id="form" class="form-horizontal" autocomplete="off">
          <div class="table-responsive">
            <table id="my-table" class="table table-hover table-borderless border-1">
              <thead>
                <tr>
                  <th><button type="button" id="add" class="btn btn-success btn-sm text-uppercase"><i class="fa fa-plus-circle"></i></button></th>
                  <th style="width: 30%">Nombre</th>
                  <th>Primer Apellido</th>
                  <th>Segundo Apellido</th>
                </tr>
              </thead>
              <tbody class="append-area">
                <!-- Table rows are dynamically generated on DOMContentLoaded -->
              <tbody>
            </table>

            <!-- COUNTER -->
            <input id="counter" type="hidden" value="0">
          </div>
          
          <!-- DETAILS AREA -->
          <div class="details">
            <div class="col-md-3 ml-auto">
              <div class="form-group row mb-2">
            
              </div>
            </div>
            <div class="col-md-4 ml-auto">
      
            </div>

          </div>
          <div class="col-md-12 p-0">
            <div class="form-group">
              <button type="submit" class="btn btn-primary text-uppercase px-5">Submit</button>
              <button type="button" id="btn-reset" class="btn btn-secondary text-uppercase px-4">Reset</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- App JS -->
  <script src="js/app.js"></script>

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