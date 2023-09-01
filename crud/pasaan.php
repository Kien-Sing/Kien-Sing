<html>
<head>
    <title>Gegevens aanpassen</title>
</head>
    <body>
        <?php
        /*** HIER STAAT ALLE PHP-CODE ***/
require 'config.php';

$id = $_GET['id'];

echo "ID van het agenda-item is: ". $id. "<br/>";

$query = "SELECT * FROM crud_agenda WHERE ID = ". $id;

$result = mysqli_query($mysqli, $query);

if (mysqli_num_rows($result) > 0)
{
    $item = mysqli_fetch_assoc($result);
    ?>
     <form name="aanpasFormulier" method="post" action="aanpasVerwerk.php">
        <input type="hidden" name="idVeld" value="<?php echo $item['ID'];?>"/>
                <table>
                    <tr>
                        <td>Onderwerp: </td>
                        <td><input type="text" name="onderwerpVeld" value="<?php echo $item['Onderwerp'];?>"/> </td>
                    </tr>
                    <tr>
                        <td>Inhoud: </td>
                        <td><input type="textarea" name="inhoudVeld" value="<?php echo $item['Inhoud'];?>"/> </td>
                    </tr>
                    <tr>
                        <td>Startdatum: </td>
                        <td><input type="date" name="startdatumVeld" value="<?php echo $item['Begindatum'];?>"/> </td>
                    </tr>
                    <tr>
                        <td>Einddatum: </td>
                        <td><input type="date" name="einddatumVeld" value="<?php echo $item['Einddatum'];?>"/> </td>
                    </tr>
                    <tr>
                        <td>Prioriteit: </td>
                        <td><input type="number" name="prioriteitVeld" min="1" max="5" value="<?php echo $item['Prioriteit'];?>"/></td>
                    </tr>
                    <tr>
                        <td>Status: </td>
                        <td>
                            <!--<select name="statusVeld">
                                <option value="<?php echo $item['Status'];?>" selected>Niet begonnen</option>
                                <option value="<?php echo $item['Status'];?>" selected>Bezig</option>
                                <option value="<?php echo $item['Status'];?>" selected>Afgerond</option>
                            </select>-->
                            <select name="statusVeld">
  <option value="n" <?php if ($item['Status'] == 'n') echo 'selected'; ?>>Niet begonnen</option>
  <option value="b" <?php if ($item['Status'] == 'b') echo 'selected'; ?>>Bezig</option>
  <option value="a" <?php if ($item['Status'] == 'a') echo 'selected'; ?>>Afgerond</option>
</select>

                        </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td><input type="submit" name="verzend" value="Item aanpassen"></td>
                    </tr>
                </table>
            </form>
    <?php
}
echo "<button><a href='toonagenda.php'>Overzicht</a></button>"
?>
        
            <?php

            ?>
        </body>
</html>
