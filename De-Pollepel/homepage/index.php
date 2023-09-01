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
    <title>De Pollepel | Home</title>
    <link rel="stylesheet" href="./stylesheet.css">
    <link rel="icon" href="../foto/icon.jpeg" type="image/icon type">
</head>
<body>
    <!-- Navbar items -->
    <div id="navlist">
        <a href="#">Home</a>
        <a href="../gerechtenpage/gerechten.html">Gerechten</a>
        <a href="../about/about.html">About Us</a>
        <a href="../Upload/index.php">Add Meal</a>
        <a id="login" href="./maa.html">Login/Signup</a>
        <!-- search bar right align -->
    </div>

    <div id="box"><a href="../about/about.html"><button id="about">About Us</button></a><div class="section"></div></div>
    
   <div id="searchLijst">

    <div class="search">      
        <form action="#"> 
               <input type="text"
                placeholder=" Search Courses"
                name="search" id="searchbar" onkeyup="search_item()">    
        </form>
    </div>

<?php
require '../config.php';


        $query = " select * from gerecht";
        $result = mysqli_query($mysqli, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
        ?>
      
      <?php echo '<a href="../Losse_gerecht/index.php?ID='. $data['ID'] . '">'; ?><p class="zoekbaar"><?php echo $data['titel'];
        }
      ?></p></a>


</div>
</body>
<script src="./index.js"></script>
</html>