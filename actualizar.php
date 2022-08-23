<?php
/*
include('session.php');
if (!isset($_SESSION['login_user'])) {
  header("location: index.php");
}
*/

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta charset="UTF-8">
    <title>Usuarios</title>

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

    <!--Libreria de js-->
    <script src="librerias/jquery-3.3.1.min.js"></script>
    <script src="js/funciones.js"></script>
    <script src="js\sidebar.js"> </script>

    <link rel="stylesheet" href="bd\css\bootstrap-dark-prefers-light.css">
    <link rel=" stylesheet" href="bd\css\bootstrap-dark-prefers-light.min.css">
    <link rel=" stylesheet" href="bd\css\bootstrap-dark.css">
    <link rel=" stylesheet" href="bd\css\bootstrap-dark.min.css">

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

    <link rel="stylesheet" href="dist\css\outwrap.css">
    <link rel="stylesheet" href="dist\css\tablewrap.css">

    <!--<script src=" librerias/bootstrap/js/bootstrap.js">
  </script>-->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="librerias/alertifyjs/alertify.js"></script>

</head>


<body>

    <nav class="navbar navbar-expand-lg border-bottom navbar-themed" id="main-nav-bar">

        <div id="main">
            <button class="openbtn" onclick="openNav()">&#9776; </button>
        </div>

        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="Home.php">Home</a>
            <a href="Consultas.php">Consultas</a>
            <a href="NombreMasComunes.php">Nombres Más comunes</a>
            <a href="NombreMenosComunes.php">Nombres Menos comunes</a>
            <a href="Electores.php">Cantidad de Electores</a>
            <a href="ReportesConsolidados.php">Reporte Consolidados</a>
            <a href="Bitacora.php">Bitácora de Consultas</a>
            <a href="ConsultaNombres.php">Consultas Nombres</a>
            <a href="CRUD.php">Insertar</a>
            <a href="borrar.php">Borrar</a>
            <a href="actualizar.php">Actulizar </a>
        </div>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03" style="position: absolute; right: 10px; width: 4%; padding: 1px; align-items: center;">
            <ul class="navbar-nav mr-auto mt-2 mt-md-0">

                <li class="nav-item">

                    <a class="nav-link" href="index.php" style="font-size:20px ;font-family: Arial, Helvetica, sans-serif;">
                        <?php

                        //*include 'logout.php';
                        ?>
                        Logout</a>

                </li>
            </ul>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-md-0">

                <li class="nav-item">
                    <a style="font-size:20px ;font-family: Arial, Helvetica, sans-serif;">Home</a>
                    <a style="font-size:20px ;font-family: Arial, Helvetica, sans-serif;"><? //=$_SESSION['sess_user']; 
                                                                                            ?></a>
                </li>
            </ul>
        </div>

    </nav>


    <?php

    include 'DBConnection.php';
    
    session_reset();

    if (isset($_POST['FechaNaci'])) {

        $cedula =  $_POST['cedula'];

        $codelec = $_POST['codelec'];

        $FechaVenci = $_POST['FechaVenci'];

        $nombre = $_POST['nombre'];

        $PrimerApellido = $_POST['PrimerApellido'];

        $SegundoApellid = $_POST['SegundoApellid'];

        $FechaNaci = $_POST['FechaNaci'];

        if (empty($cedula) || empty($codelec) || empty($FechaVenci) || empty($nombre) || empty($PrimerApellido) || empty($SegundoApellid) || empty($FechaNaci)) {

            echo ' <script> alert ("Complete los campos. 🤐") </script> ';

        } else {

            $stid = oci_parse($DBConn, 'begin ACTUALIZAR(:p1, :p2, :p3, :p4, :p5, :p6, :p7 ); end;');

          /*  echo $cedula;
            echo $codelec;
            echo $FechaVenci;
            echo $nombre;
            echo $PrimerApellido;
            echo $SegundoApellid;
            echo $FechaNaci;
            */          
            oci_bind_by_name($stid, ':p1', $cedula);
            oci_bind_by_name($stid, ':p2', $codelec);
            oci_bind_by_name($stid, ':p3', $FechaVenci);
            oci_bind_by_name($stid, ':p4', $nombre);
            oci_bind_by_name($stid, ':p5', $PrimerApellido);
            oci_bind_by_name($stid, ':p6', $SegundoApellid);
            oci_bind_by_name($stid, ':p7', $FechaNaci);

            oci_execute($stid);
            oci_commit($DBConn);
            oci_free_statement($stid);
            oci_close($DBConn);

            echo ' <script> alert ("Se actualizó el usuario . 🤐") </script> ';

            //      $stid = ociparse($DBConn, 'BEGIN INSERTAR(:v1,:v2,:v3,:v4,:v5,:v6,:v7); END;');
            //       oci_bind_by_name($stid, ':v1', $cedula);
            //      oci_bind_by_name($stid, ':v2', $codelec);
            //      oci_bind_by_name($stid, ':v3', $FechaVenci);
            //      oci_bind_by_name($stid, ':v4', $nombre);
            //    oci_bind_by_name($stid, ':v5', $PrimerApellido);
            //     oci_bind_by_name($stid, ':v6', $SegundoApellid);
            //     oci_bind_by_name($stid, ':v7', $FechaNaci);
            //      oci_execute($stid);

            //oci_free_statement($stid);

        }
    }

    ?>


    <div style="margin-left: 29%; width: 60%; height: auto; margin-top: 10%;">
        <!-- border: 1px solid #c3c3c3; -->

        <div class="card text-white bg-secondary mb-2 d-inline-block" style=" max-width: 2000px; padding-left:20%; padding-right:20%;  ">
            <div class="card-header" style="padding-left:20%; padding-right:20%">
                <h3>Cedula</h3>
            </div>


            <div class="form-bottom" style="text-align:right;">

                <!-- action="Home.php" -->

                <form role="form" method="POST" class="login-form">
                    <div class="form-group">
                        <label class="sr-only" for="form-username">cedula</label>
                        <input minlength="9" maxlength="9" type="text" name="cedula" placeholder="Cedula" class="form-username form-control" id="cedula">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="form-username">Codelec</label>
                        <input minlength="6" maxlength="6" type="text" name="codelec" placeholder="Codelec" class="form-username form-control" id="codelec">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="form-username">FechaVencimiento</label>
                        <input minlength="8" maxlength="8" type="text" name="FechaVenci" placeholder="Fecha Vencimiento" class="form-username form-control" id="FechaVenci">
                    </div>

                    <div class="form-group">
                        <label class="sr-only" for="form-username">Nombre</label>
                        <input type="text" name="nombre" placeholder="Nombre" class="form-username form-control" id="nombre">
                    </div>

                    <div class="form-group">
                        <label class="sr-only" for="form-username">PrimerApellido</label>
                        <input type="text" name="PrimerApellido" placeholder="Primer Apellido" class="form-username form-control" id="PrimerApellido">
                    </div>

                    <div class="form-group">
                        <label class="sr-only" for="form-username">SegundoApellido</label>
                        <input type="text" name="SegundoApellid" placeholder="Segundo Apellido" class="form-username form-control" id="SegundoApellid">
                    </div>

                    <div class="form-group">
                        <label class="sr-only" for="form-username">FechaNacimiento</label>
                        <input type="text" name="FechaNaci" placeholder="Fecha Nacimiento" class="form-username form-control" id="FechaNaci">
                    </div>

                    <button type="submit" class="btn" name="login">Actualizar</button>
                </form>
            </div>


        </div>
    </div>


</body>