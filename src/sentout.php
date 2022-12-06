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

  $order = $_GET['order'];
  $robot = $_GET['robot'];
  echo $order;
  echo $robot;

  $result = $con->query("DELETE from ordering where studentID = '$order'");

  $result2 = $con->query("UPDATE robot SET status = 'OUT' where ID = '$robot'");

  $sent;
  $_SESSION['sent'] = "yes";

  header("Location: http://localhost/jaysnestrobots/src/Employee.php", TRUE, 301);

?>