<?php
require 'config.php';

$id = $_GET['id'];

$query = 'SELECT * FROM crud_agenda';

$result = mysqli_query($mysqli, $query);
if (!$result)
{
   echo "<p>FOUT!</p>";
   echo "<p>" . $query . "</p>";
   echo "<p>" . mysqli_error($mysqli) . "</p>";
   exit;
}
if (mysqli_num_rows($result) > 0)
{
   echo "<a href='toevoegForm.html?'><button>Toevoegen</button></a>";
   echo "<table border='1px'>";
   echo "<tr><th>ID</th><th>Onderwerp</th><th>Inhoud</th><th>Detail</th><th>Verwijderen</th><th>Pas aan</th></tr>";
   while($item = mysqli_fetch_assoc($result))
   {
       echo"<tr>";
       echo "<td>".$item['ID']."</td>";
       echo "<td>".$item['Onderwerp']."</td>";
       echo "<td>".$item['Inhoud']."</td>";
       echo "<td>"."<a href='detail.php?id=".$item['ID']."'>Detail</a>";
       echo "<td>"."<a href='verwijder.php?id=".$item['ID']."'>Verwijderen</a>";
       echo "<td>"."<a href='pasaan.php?id=".$item['ID']."'>Pas aan</a>";
       echo "</tr>";
   }
   echo"</table>";
}
else
{
   echo "<p>Geen items gevonden!</p>";
}