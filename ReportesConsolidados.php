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
      <a href="ConsultaNombres.php">Consultas Nombres</a>
      <a href="CRUD.php">Insertar</a>
      <a href="borrar.php">Borrar</a>
      <a href="actualizar.php">Actulizar </a>
    </div>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03" style="position: absolute; right: 10px; width: 4%; padding: 1px; align-items: center;">
      <ul class="navbar-nav mr-auto mt-2 mt-md-0">

        <li class="nav-item">
          <a class="nav-link" href="index.php" style="font-size:20px ;font-family: Arial, Helvetica, sans-serif;">Logout</a>

        </li>
      </ul>
    </div>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-md-0">

        <li class="nav-item">
          <a style="font-size:20px ;font-family: Arial, Helvetica, sans-serif;">Reportes Consolidados</a>

        </li>
      </ul>
    </div>

  </nav>

  <?php

  include 'DBConnection.php';
  session_reset();

  $stid = ociparse($DBConn, 'SELECT count(*) from AAA');
  oci_execute($stid);
  $nrows = oci_fetch_all($stid, $res, null, null, OCI_FETCHSTATEMENT_BY_ROW + OCI_NUM);



  $stidE = ociparse($DBConn, 'SELECT count(*) from EEE');
  oci_execute($stidE);
  $nrowsE = oci_fetch_all($stidE, $resE, null, null, OCI_FETCHSTATEMENT_BY_ROW + OCI_NUM);


  $stidI = ociparse($DBConn, 'SELECT count(*) from III');
  oci_execute($stidI);
  $nrowsE = oci_fetch_all($stidI, $resI, null, null, OCI_FETCHSTATEMENT_BY_ROW + OCI_NUM);


  $stidO = ociparse($DBConn, 'SELECT count(*) from OOO');
  oci_execute($stidO);
  $nrowsE = oci_fetch_all($stidO, $resO, null, null, OCI_FETCHSTATEMENT_BY_ROW + OCI_NUM);


  $stidU = ociparse($DBConn, 'SELECT count(*) from UUUU');
  oci_execute($stidU);
  $nrowsE = oci_fetch_all($stidU, $resU, null, null, OCI_FETCHSTATEMENT_BY_ROW + OCI_NUM);

  ?>

  <div>

    <table class="table table-hover table-wrapper " style=" width:65%;height:290px ;Table-layout: fixed; display: block;font-family: Arial, Helvetica, sans-serif; font-size:4ch; margin-top:2%;margin-left: 20%; border: 1px solid;">

      <thead style=" border: 1px solid; ">
        <tr>

          <th style="width:9%;;border: 1px solid; text-align: center;">Contador</th>

        </tr>
      </thead>
      <tbody style="border: 1px solid;">
        <tr class="table-secondary" style="border: 1px solid; width:50%; ">
          <?php

          foreach ($res as $col) {

            echo "<tr>";
            foreach ($col as $item) {
              echo "<td  > Nombre que contienen la letra A: " . ($item !== null ? htmlentities($item, ENT_QUOTES) : " ") . "  " . "</td>";
            }
            echo "</tr>";


            foreach ($resE as $col) {
              echo "<tr>";
              foreach ($col as $item) {
                echo "<td  > Nombre que contienen la letra E: " . ($item !== null ? htmlentities($item, ENT_QUOTES) : " ") . "  " . "</td>";
              }
              echo "</tr>";


              foreach ($resI as $col) {
                echo "<tr>";
                foreach ($col as $item) {
                  echo "<td  > Nombre que contienen la letra I: " . ($item !== null ? htmlentities($item, ENT_QUOTES) : " ") . "  " . "</td>";
                }
                echo "</tr>";

                foreach ($resO as $col) {
                  echo "<tr>";
                  foreach ($col as $item) {
                    echo "<td  > Nombre que contienen la letra O: " . ($item !== null ? htmlentities($item, ENT_QUOTES) : " ") . "  " . "</td>";
                  }
                  echo "</tr>";

                  foreach ($resU as $col) {
                    echo "<tr>";
                    foreach ($col as $item) {
                      echo "<td  > Nombre que contienen la letra U: " . ($item !== null ? htmlentities($item, ENT_QUOTES) : " ") . "  " . "</td>";
                    }
                    echo "</tr>";
                  }
                }
              }
            }
          }

          oci_free_statement($stid);

          ?>

        </tr>

      </tbody>
    </table>

  </div>

  </div>
  <div class="row" style="font-size:10px;">

    <div class="col-md-5 col-sm-5 col-xs-5">

      <div class="pull-left">

        <p><i class="fa fa-copyright"></i> &nbsp; 2022 Lenguajes</p>

      </div>

    </div>
  </div>
  </div>

  </div>

</body>