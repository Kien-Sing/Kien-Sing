<?php
require_once "session.inc.php";
require  '../config.php';

session_start();
  if (isset($_SESSION['name'])) {
    // The user is logged in, display their name
    $name = $_SESSION['name'];

  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>De Pollepel | About</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>

<!-- Navbar items -->
<div id="navlist">
    <p>Hello <?php echo $name; ?> </p>
  <a href="../homepage/index.html">Home</a>
  <a href="../gerechtenpage/gerechten.html">Gerechten</a>
  <a href="./about.html">About Us</a>
  <a href="#" target="_blank">Add Meal</a>
  <a id="login" href="../homepage/maa.html" >Login/Signup</a>
  <!-- search bar right align -->
</div>

      <div class="parent">
        <div class="div1"> <img src="../foto/foto1.jpeg" height="200vh" width="150vh"></div>
        <div class="div2"> <img src="../foto/MicrosoftTeams-image.png" height="200vh" width="150vh"></div>
        <div class="div3"> <img src="../foto/foto2.png" height="200vh" width="150vh"></div>
        <div class="div4"> <img src="../foto/MicrosoftTeams-image1.png" height="200vh" width="150vh"></div>
        <div class="div5"> Hallo iedereen. Ik ben Daamin Nacer en welkom op deze pagina. Ik ben 17 jaar oud en heb leuk gewerkt aan deze website.</div>
        <div class="div6"> Hallo iedereen, welkom bij onze pagina! Ik ben Liam van Vliet en ik heb meegewerkt aan deze website. Ik ben 17 jaar oud en woon in Rotterdam.</div>
        <div class="div7"> Hoi. Mijn naam is Kien-Sing Chan en ik ben 17 jaar oud. Welkom op dit pagina! Ik heb aan deze website met mijn teamgenoten samengewerkt.</div>
        <div class="div8"> Hallo en welkom bij deze pagina. Ik ben Walid Sawaja en ik ben 17 jaar oud. Ik heb met mijn teamgenoten aan deze website gewerkt.</div>
      </div>

</body>
<link rel="stylesheet" href="index.js">
</html>