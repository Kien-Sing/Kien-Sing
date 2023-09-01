<?php
//database logingegevens
$db_hostname = 'localhost';
$db_username = 'db88130';
$db_password = '88130dbpass';
$db_database = '88130_database';

$mysqli = mysqli_connect($db_hostname,$db_username,$db_password,$db_database);

if (!$mysqli){
	echo "FOUT: geen connectie naar database. <br>";
    echo "Error: " .  mysqli_connect_error() . "<br>";
    exit;
}

else{
	echo "Verbinding met " . $db_database . " is gemaakt! <br>";
}