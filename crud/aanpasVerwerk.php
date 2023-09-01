<?php
require 'config.php';
if(isset($_POST['verzend']))
{
    $id = $_POST['idVeld'];
    $ond = $_POST['onderwerpVeld'];
    $inh = $_POST['inhoudVeld'];
    $begin = $_POST['startdatumVeld'];
    $eind = $_POST['einddatumVeld'];
    $prior = $_POST['prioriteitVeld'];
    $stat = $_POST['statusVeld'];

    $query = "UPDATE crud_agenda ";
    $query .= "SET Onderwerp = '{$ond}', Inhoud = '{$inh}', Begindatum = '{$begin}',";
    $query .= "Einddatum = '{$eind}', Prioriteit = {$prior}, Status = '{$stat}' ";
    $query .= "WHERE ID = {$id}";

    $result = mysqli_query($mysqli, $query);
    
    if ($result)
    {
        echo "Het item is toegevoegd<br/>";
    }
    else
    {
        echo "FOUT bij toevoegen<br/>";
        echo $query . "<br/>";
        echo mysqli_error($mysqli);
    }

    echo "<br>
    <a href='toonagenda.php'>OVERZICHT</a>";
}
else
{
    echo "Het formulier is niet (goed) verstuurd<br/>";
}