<?php


define('HOST','3000' );
define('PORT', '1521');
define( 'NAME','XE');
define('USER','DEIBY' );
define( 'PASSWORD','DEIBY');


$enlace = mysqli_connect('192.168.100.67', 'DEIBY', 'Deiby', 'DEIBY', '1521', 'XE');



if (!$enlace) {

    die('No pudo conectar: ');
}

echo 'conectado';
mysqli_close($enlace);



?>|