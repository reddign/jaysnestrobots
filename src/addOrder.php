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

  $location = $_POST['Location'];
  echo $location;

  $result = $con->query("SELECT count(*) as NumOrders from ordering where studentID  = $studentID");

  while ($row = $result->fetch_assoc()) {
    $NumOrders = $row['NumOrders'];
  }

  $result->free();

  $orderID = ($studentID*100) + $NumOrders;
  echo $orderID;

  $result = $con->query("SELECT * from cart where cartID = $studentID");

  while ($row = $result->fetch_assoc()) {
    $itemID = $row['itemID'];
    $price = $row['price'];
    $descrip = $row['descrip'];

    $result2 = $con->query("INSERT into ordering (orderID,itemID,price,location,descrip,studentID) values($orderID,$itemID,'$price','$location','$descrip',$studentID)");
}

    echo $itemID;
    echo $descrip;
    echo $price;

    header("Location: http://localhost/jaysnestrobots/src/order_confirmation.php", TRUE, 301);
?>