<?php

include 'DBConnection.php';

$DBDisconnect = oci_close($DBConn);

session_abort();
?>