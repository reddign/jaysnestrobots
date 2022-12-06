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
// orderID should be studentID followed by the number of orders they have made up to 1000 orders
//ex: 38016420001 would be the order ID for
// my first order. student ID 3801642,followed by 0001 because it is my first order

//cartID should be 1 cart per student so cartID = studentID

$itemID = $_GET["itemID"];
echo $itemID;

$true = $_GET["true"];
echo $true;

$result = $con->query("SELECT price from items where itemID = $itemID");
while ($row = $result->fetch_assoc()) {
    $price = $row['price'];
    
}
echo $price;

$result = $con->query("SELECT description from items where itemID = $itemID");
while ($row = $result->fetch_assoc()) {
    $descrip = $row['description'];
}
echo $descrip;
$_SESSION['descrip'] = $descrip;
echo "Adding to cart...";

$result = $con->query("SELECT count(*) as numCart from cart where cartID = $studentID");
while ($row = $result->fetch_assoc()) {
    $NumCartItem = $row['numCart'];
    
}
$_SESSION['NumCartItem'] = $NumCartItem;

//if max hasnt been reached go through
if($NumCartItem>=3){
    header("Location: http://localhost/jaysnestrobots/src/orderAlternative.php", TRUE, 301);
}

else{
$PK = ($studentID*10)+$NumCartItem;
echo $PK;

$result = $con->query("SELECT studentID from cart where exists (Select * from cart where studentID = '$PK')");
    while($row = $result->fetch_assoc()){
        if($PK  = $row['studentID']){
            $PK = $PK -1;
            $result = $con->query("SELECT studentID from cart where exists (Select * from cart where studentID = '$PK')");
        }
    }

$sql = "INSERT INTO cart(itemID,cartID,price,descrip,studentID) 
VALUES ($itemID,$studentID,$price,'$descrip',$PK)";

$result = $con->query($sql);

$_SESSION['added'] = "yes";

echo "\n";
echo $_SESSION['NumCartItem'];

if($_SESSION['added'] == "yes" && isset($NumCartItem)){
    header("Location: http://localhost/jaysnestrobots/src/orderAlternative.php", TRUE, 301);
}
}
?>
</html>