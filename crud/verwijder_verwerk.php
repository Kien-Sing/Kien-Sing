<?php

require 'config.php';

$id = $_GET['id'];

echo "Item met ID " . $id . " wordt verwijderd....<br/>";

$query = "DELETE FROM crud_agenda WHERE ID = " . $id;

$result = mysqli_query($mysqli, $query);

if ($result)
{
    echo "het item is verwijderd<br/>";

    echo "<a href='toonagenda.php'> Ga terug </a>";
}

else
{
    echo "FOUT bij verwijderen<br/>";
    echo $query . "<br/>";
    echo mysqli_error($mysqli);

    echo "<a href='toonagenda.php'> Ga terug </a>";
}