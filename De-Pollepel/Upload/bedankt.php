<?php
error_reporting(0);

$msg = "";

// Moet uitijndelijk ../ config.php zijn 
require '../config.php';

// If upload button is clicked ...
if (isset($_POST['upload'])) {

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../image/";
 
    $titel = $_POST['titel'];
    $beschrijving = $_POST['beschrijving'];
    $gerecht = $_POST['gerecht'];

    // Generate a unique filename using a combination of the current timestamp and a random number
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $new_filename = time() . '_' . rand(1000, 9999) . '.' . $ext;
    $target_file = $folder . $new_filename;

    // Get all the submitted data from the form
    $sql = "INSERT INTO `gerecht`( `titel`, `media`, `beschrijving`, `gerecht`) VALUES (('$titel'),('$new_filename'),('$beschrijving'),('$gerecht'))";

    // Execute query
    mysqli_query($mysqli, $sql);

    // Resize the uploaded image to a maximum width and height of 800 pixels
    $max_width = 800;
    $max_height = 800;
    list($orig_width, $orig_height) = getimagesize($tempname);
    $width = $orig_width;
    $height = $orig_height;

    // Calculate the new width and height while preserving the aspect ratio
    if ($width > $max_width || $height > $max_height) {
        $ratio = min($max_width / $width, $max_height / $height);
        $width = intval($ratio * $width);
        $height = intval($ratio * $height);
    }

    // Create a new image with the resized dimensions
    $image_p = imagecreatetruecolor($width, $height);
    $image = imagecreatefromjpeg($tempname);
    imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $orig_width, $orig_height);

    // Save the resized image to the target file
    imagejpeg($image_p, $target_file, 80);

    // Clean up the temporary image resources
    imagedestroy($image_p);
    imagedestroy($image);

    if (!$target_file) {
        echo "<h3>Failed to upload image!</h3>";
    }
}
?>









<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
         body{background-color: #DFF8EB;}
    </style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>
<body>
	<header class="site-header" id="header">
		<h1 class="site-header__title" data-lead-id="site-header-title">GELUKT!</h1>
	</header>

	<div class="main-content">
		<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		<p class="main-content__body" data-lead-id="main-content-body">Dankje  voor u eigen recept toe te voegen we hopen dat mensen ervan gaan genieten en we wensen u een fijne dag</p>
	</div>

	<footer class="site-footer" id="footer">
		<p class="site-footer__fineprint" id="fineprint">Copyright ©2022 | All Rights Reserved</p>
	</footer>
</body>
<script type="text/javascript">
    let myTimer = window.setTimeout(timer, 5000);
  
    function timer() {
      window.location.href = "../homepage/index.php"
    }
  </script>
</html>