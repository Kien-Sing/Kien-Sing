<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stlye.css">
    <title>De Pollepel </title>
    <link rel="icon" href="../foto/icon.jpeg" type="image/icon type">
</head>
<body>
    <!-- Navbar items -->
    <div id="navlist">
        <a href="../homepage/index.php">Home</a>
        <a href="../gerechtenpage/gerechten.html">Gerechten</a>
        <a href="../about/about.html">About Us</a>
        <a href="../Upload/index.php">Add Meal</a>
        <a id="login" href="./maa.html">Login/Signup</a>
        <!-- search bar right align -->
    </div>

      <?php
require '../config.php';

$id = $_GET['ID'];

        $query = " select * from gerecht where ID = '${id}'";
        $result = mysqli_query($mysqli, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
        ?>
<div class="recipe-container">
  <h1 class="recipe-title"><?php echo $data['titel']; ?></h1>
  <img class="recipe-image" src="../image/<?php echo $data['media']; ?>" alt="Recipe Image">
  <div class="recipe-description-container">
  <p class="recipe-description"><?php echo nl2br($data['beschrijving']); ?></p>
  </div>
</div>


            

        <?php
        }
        ?>

</body>
</html>