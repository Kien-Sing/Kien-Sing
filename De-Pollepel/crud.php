<?php

require 'config.php';

$query = "SELECT * FROM klant";

$result = mysqli_query($mysqli, $query);


if(mysqli_num_rows($result) > 0)
{
    echo "<table border='1px'>";
    echo "<tr><th>ID</th><th>titel</th><th>media</th><th>beschrijving</th><th>gerecht</th></tr>";
    echo "hallo walid";
 
while ($item = mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo  "<td>" . $item['ID'] . "</td>";
    echo "<td>" .  $item['titel'] . "</td>";
    echo "<td>" . $item ['media'] . "</td>";
    echo "<td>" . $item['beshrijving'] . "</td>";
    echo "<td>" . $item['gerecht'] . "</td>";
    echo "</tr>";
   
}
echo "</table>";

}

else {
    echo "<p>Geen items gevonden!</p>";
}


