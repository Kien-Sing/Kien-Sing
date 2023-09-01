<?php
error_reporting(0);
 
$msg = "";

// Moet uitijndelijk ../ config.php zijn 
require '../config.php';
// If upload button is clicked ...
if (isset($_POST['upload'])) {
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./image/" . $filename;
 
   $titel = $_POST['titel'];
   $beschrijving = $_POST['beschrijving'];
   $gerecht = $_POST['gerecht'];
   

   $titel = mysqli_real_escape_string($mysqli, $titel);
   $beschrijving = mysqli_real_escape_string($mysqli, $beschrijving);
   $gerecht = mysqli_real_escape_string($mysqli, $gerecht);
 
    // Get all the submitted data from the form
        $sql = "INSERT INTO `gerecht`( `titel`, `media`, `beschrijving`, `gerecht`) VALUES (('$titel'),('$filename'),('$beschrijving'),('$gerecht'))";
 
    // Execute query
    if(mysqli_query($mysqli, $sql)){
        echo "sucses";
    } else{
        echo "ERROR: Could not execute $sql. " . mysqli_error($mysqli);
    }
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "sucses";
        
    } else {
        echo "<h3>  Failed to upload image!</h3>";
        header('Refresh:0');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="form.css" />
</head>
 
<body>
    <div id="content">
        <h1>Voeg u eigen gerecht toe</h1>
        <form method="POST" action="bedankt.php"  enctype="multipart/form-data">
        <div class="form-group">
            <label for="titel">Naam gerecht</label>
                <input class="form-control" required type="text" name="titel" value="" />
            </div>
            <div class="form-group">
                <label for="beschrijving">Beschrijving gerecht</label>
                <textarea class="form-control" required type="text" name="beschrijving" value=""></textarea>
            </div>
             <div class="form-group">
             <div class="wrapper">
 <input type="radio" name="gerecht" required value='v' id="option-1" checked>
 <input type="radio" name="gerecht" required value='h' id="option-2">
 <input type="radio" name="gerecht" required value='n' id="option-3">
   <label for="option-1" class="option option-1">
     <div class="dot"></div>
      <span>Voorgerecht</span>
      </label>
   <label for="option-2" class="option option-2">
     <div class="dot"></div>
      <span>Hoofdgerecht</span>
   </label>
    <label for="option-3" class="option option-3">
     <div class="dot"></div>
      <span>Nagerecht</span>
   </label>
</div>
                        </div>
            <div class="form-group">
                <p>Upload een foto van u gerecht</p>
                <input class="form-control" required type="file" name="uploadfile" value="" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="upload"  >UPLOAD</button>
            
            </div>
        </form>
        <a href="../homepage/index.php"> <button class="btn btn-danger">GO BACK</button></a>
    </div>
    
</body>

</html>