<?php

require('../config.php');



if (isset($_POST['verzend']))
{
    $nv = $_POST['naamVeld'];
    $ev = $_POST['emailVeld'];
    $pv = $_POST['passwordVeld'];


    $query = "SELECT * FROM klant WHERE email = '$ev'";

    $result = mysqli_query($mysqli, $query);
    
    if (mysqli_num_rows($result) > 0)
        {
            echo '<html>
            <head>
            <title>Account al in gebruik</title>
            <link rel="stylesheet" href="./maa.css">
            </head>
            <body>

            <div class="div1">
            <h1 class="tekst">Account is al in gebruik</h1>
            <a href="./maa.html"><button id="knop"><b>Probeer het opnieuw</b></button></a>
            </div>
            </body>
            </html>';
       
        }
        else{
        $stmt = $mysqli->prepare("INSERT INTO klant (naam, email, wachtwoord) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $voornaam, $email, $wachtwoord);
    
    
        $voornaam = "$nv";
        $email = "$ev";
        $wachtwoord = "$pv";
        $stmt->execute();
    
    
        $stmt->close();
        $mysqli->close();
        echo '<html>
        <head>
        <title>Account succesvol aangemaakt.</title>
        <link rel="stylesheet" href="./maa.css">
        </head>
        <body>

        <div class="div1">
        <h1 class="tekst">Uw account is aangemaakt!</h1>
        <a href="./login.html"><button id="knop"><b>Ga naar log in scherm</b></button></a>
        </div>
        </body>
        </html>';
        }
    
   

      
    


}

?>