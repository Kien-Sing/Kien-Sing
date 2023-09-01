<?php

require 'config.php';

$id = $_GET['id'];

if ($id !="")
{
    echo "Je gaat het volgende item verwijderen met het ID: " . $id . "<br/>";

    echo "<p>Weet je het zeker?</p>";

    echo "<a href='verwijder_verwerk.php?id={$id}'> JA </a> <br/><br/>";

    echo "<a href='toonagenda.php'> NEE </a>";
}

else
{
    echo "Geen ID gevonden...<br/>";
}