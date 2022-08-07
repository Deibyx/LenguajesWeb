<?php


$conn = new mysqli($serverName,$serverUser,$dbPassword,$dbName);
$serverName="localhost";
$serverUser="HR";
$dbPassword="oracle";// put empty by default
$dbName="hospitals";

if(! $conn){// check if connection to database is not available
	die("Error connecting to database. ");
}

?>