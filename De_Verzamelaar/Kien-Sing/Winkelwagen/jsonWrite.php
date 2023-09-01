<?php
// Lees de HTTP Request body
$json = file_get_contents('php://input');


// Converts it into a PHP object
$data = json_decode($json);

// Maak verbinding met de database
$db = new SQLite3("db_87264.db");
$db->busyTimeout(5000);
 
// Maak de query om de nieuwe student weg te schrijven naar de database
$query = "INSERT INTO verzamelaar (vname, aname,email,pcode,hnumber) VALUES ('$data->vNaam', '$data->aNaam','$data->email', '$data->postcode','$data->huisNmr')";

// Voer de query uit tegen de Database
$db->exec($query);

