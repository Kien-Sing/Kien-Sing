<?php

require "../config.php";

session_start();

if(!isset($_SESSION['name'])){
    header("location:login.html");
    exit;
}








?>