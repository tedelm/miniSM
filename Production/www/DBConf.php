<?php

require_once('creds.php');

$mysqli = new mysqli($DB_HOST_FQDN,$DB_USER,$dbDB_USER_PASSpass,$DB_NAME); //Connect to db
$mysqli->set_charset("utf8"); //Set UTF8
//$mysqli->close();

//$mysqli;

// Check connection
if ($mysqli -> connect_errno) {$dbError = "Failed to connect to MySQL: " . $mysqli -> connect_error;}


?>