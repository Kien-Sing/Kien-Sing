<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="gerecht.css">
    <title>De Pollepel | Voorgerechten</title>
    <link rel="icon" href="../foto/icon.jpeg" type="image/icon type">
</head>
<body>

<!--Navigatie-->
<nav id='menu'>
        <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
        <ul>
          <li><a href='../homepage/index.php'>Home</a></li>
          <li><a class='dropdown-arrow' href='../gerechtenpage/gerechten.html'>Gerechten</a>
            <ul class='sub-menus'>
              <li><a href='../voorgerecht/voorgerecht.php'>Voorgerechten</a></li>
              <li><a href='hoofdgerecht.php'>Hoofdgerechten</a></li>
              <li><a href='../nagerecht/nagerecht.php'>Nagerechten</a></li>
            </ul>
          </li>
          <li><a href='../about/about.html'>About</a></li>
          <li><a href='../homepage/maa.html' target="_blank">Nieuw Recept+</a></li>
        </ul>
      </nav>
<!--Navigatie-->
<div class="grid-container">
        <?php
        require 'config.php';
        $query = " select * from gerecht where gerecht = 'h' ";
        $result = mysqli_query($mysqli, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
        ?>
        <?php echo '<div class="grid-item"><img src="../image/' . $data['media'] . '"><br>' . $data['titel'] . '<br><button><a href="../Losse_gerecht/index.php?ID='. $data['ID'].'">Ga Naar Gerecht</a></button>'. '</div>'; ?>

        <?php
        }
        ?>
        </div>
</body>
<link rel="stylesheet" href="gerecht.js">
</html>