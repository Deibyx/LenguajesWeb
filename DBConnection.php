<?php


$conn = new mysqli($serverName,$serverUser,$dbPassword,$dbName);
$serverName="192.168.100.67";
$serverUser="";
$dbPassword="";// put empty by default
$dbName="Deiby";

if(! $conn){// check if connection to database is not available
	die("Error connecting to database. ");
}

?>