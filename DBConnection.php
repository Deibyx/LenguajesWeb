<?php

include 'index.php';

$DBConn = oci_connect("$username","$userPassword", "localhost/orcl");

$error ="";

if($DBConn){
	header('Home.php');
}
else{

	echo '<script language = "javascript">alert ("Login Inválido") ; </script>'; 
	
}

//$DBDisconnect = oci_close($DBConn);
