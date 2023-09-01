<?php

require '../config.php';

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){

    $userN    = $_POST['name'];
    $email    = $_POST['email'];
    $passW    = $_POST['password'];
    

  

    $query   = "SELECT * FROM `klant` ";
    $query  .= "WHERE `naam`='$userN' AND `email`='$email' AND `wachtwoord`='$passW'";

    $result = mysqli_query($mysqli, $query);
    $item = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) == 1)
    {
        session_start();
        $_SESSION['name'] = $userN;
        header("location:index.php");
    }

    else
    {
        echo "Gegevens zijn fout ingevuld, probeer het opnieuw. <br/>";
        echo "<a href='login.html'>Terug</a>";
    }
}

else
{
    
    echo "<p>Het formulier is niet goed verstuurd</p>";
}
?>
