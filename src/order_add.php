<?php
session_start();
//uncomment below for final part but for now just using hardcoded value
$studentID = 3801642;
//$studentID = $_SESSION["username"];

// orderID should be studentID followed by the number of orders they have made up to 1000 orders
//ex: 38016420001 would be the order ID for
// my first order. student ID 3801642,followed by 0001 because it is my first order

//cartID should be 1 cart per student so cartID = studentID

$item = $_GET["itemID"];
$true = $_GET["true"];
$price = $con->query("SELECT price from items where itemID = $item");
$descrip = $con->query("SELECT description from items where itemID = $item");
echo $item;
echo $true;
//if($true == "Add to Order"){
   // addToCart($item,$studentID);
//}

function addToCart($itemID, $studentID){
    $sql = "INSERT INTO cart(item,cartID,price,description) 
    VALUES ($itemID, $studentID,$price,$descrip )";
}

?>