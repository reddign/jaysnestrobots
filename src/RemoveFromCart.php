<?php
session_start();
//uncomment below for final part but for now just using hardcoded value
$studentID = 3801642;
//$studentID = $_SESSION["username"];
$servername = "156.67.74.51";
 $user= "u413142534_robots";
 $pass= "R0b0tsRul3";
 $dbname = "u413142534_jaysnest";

 $con = new mysqli($servername, $user, $pass, $dbname);

 if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
$item  = $_GET['item'];
echo $item;
$result = $con->query("DELETE FROM cart WHERE cartID = '$studentID' and StudentID = '$item'");
$_SESSION['removed'] = "yes";
header("Location: http://localhost/jaysnestrobots/src/cart.php", TRUE, 301);