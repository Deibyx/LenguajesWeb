<?php


//include 'index.php';

// session_start();

 // $username = $_COOKIE ['username'];
 // $userPassword = $_COOKIE ['password'];

$DBConn = oci_connect("Deiby","DEIBY", "localhost/orcl");

$error ="";

if($DBConn){
	//header('Home.php');
}
else{

	echo '<script language = "javascript">alert ("Login Inválido") ; </script>'; 
	
}

//$DBDisconnect = oci_close($DBConn);
