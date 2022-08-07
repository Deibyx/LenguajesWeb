<?php




$conn = $conn = new mysqli($serverName, $serverUser, $dbPassword, $dbName);


$serverUser = mysqli_real_escape_string($conn, $_POST['username']);
$dbPassword = mysqli_real_escape_string($conn, $_POST['userPass']);
$serverName = "192.168.100.67";
$dbName = "Deiby";

session_start();

$user_check = $_SESSION ['username'] ;


$query  = "SELECT username from administradores from login where username = '$user_check' ";
$ses_sql = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row ['username'];
