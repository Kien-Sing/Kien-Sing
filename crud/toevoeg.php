<?php
//Voeg de database-verbinding toe
require 'config.php';
//Maak een toevoeg-query (let op de verschillende aanhalingstekens!)
$query = "INSERT INTO crud_agenda (Onderwerp,Inhoud,Begindatum,Einddatum,Prioriteit,Status)
VALUES ('PROCES2', 'ERD opdrachten afronden', '2022-10-20','2022-10-27', 2, 'b')";

//Voor de query uit en vang het 'resultaat' op
//LET OP: het resultaat geeft aan of het wel of niet is gelukt ('true'/'false')
$result = mysqli_query($mysqli,$query);

//controleer of het is gelukt
if ($result)
{
    echo "Het item is toegevoegd<br/>";
}
else{
    echo "FOUT bij toevoegen<br/>";
    echo mysqli_error($mysqli); //Tijdelijk (!) de foutmelding tonen
}

//Terug naar het overzicht
echo "<a href='toonagenda.php'>Overzicht</a>";