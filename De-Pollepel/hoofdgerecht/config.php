<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$db_hostname = 'localhost';
$db_username = 'DLKWcrud';
$db_password = 'Gx7m679%i';
$db_database = 'pollepel';

$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

if (!$mysqli){
    echo "Connectie niet gemaakt. <br>";
    echo "Error: " . mysqli_connect_error() . "<br/>";
    exit;
    
}       