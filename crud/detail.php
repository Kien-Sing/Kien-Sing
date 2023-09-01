<?php
require 'config.php';

$id = $_GET['id'];

echo "ID van het agenda-item is: ". $id. "<br/>";

$query = "SELECT * FROM crud_agenda WHERE ID = ". $id;

$result = mysqli_query($mysqli, $query);

if (mysqli_num_rows($result) > 0)
{
    $item = mysqli_fetch_assoc($result);
    echo "<table border='1px'>";
    echo "<tr><th>ID</th><th>Onderwerp</th><th>Inhoud</th><th>Begindatum</th><th>Einddatum</th><th>Prioriteit</th><th>Status</th></tr>";
        echo"<tr>";
        echo "<td>".$id."</td>";
        echo "<td>".$item['Onderwerp']."</td>";
        echo "<td>".$item['Inhoud']."</td>";
        echo "<td>".$item['Begindatum']."</td>";
        echo "<td>".$item['Einddatum']."</td>";
        echo "<td>".$item['Prioriteit']."</td>";
        echo "<td>".$item['Status']."</td>";
        echo "</tr>";
    echo"</table>";
}
else
{
    echo "Er is geen record met ID: ". $id . "<br/>";
}
echo "<button><a href='toonagenda.php'>Overzicht</a></button>"
?>