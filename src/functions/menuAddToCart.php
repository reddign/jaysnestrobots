<?PHP
$path = '';


session_start();
if($_SERVER['HTTP_HOST']=="localhost"){
    require("../../config.php");
}else{
    require("../config.php");
}

require("database_functions.php");

$i = $_POST["itemID"];

 

$orderNum = $_SESSION["CurrentOrderNum"]; 
//you should make this when a user starts to use the order page or when they log in.

 

$sql = "INSERT INTO cart (cartID, order_ID, itemID) VALUES ( :order,:item)";

 

$params = [":order"=>$orderNum,":item"=>$i];

//send this query to the database with a parameterized query
$pdo = connect_to_db();
$stmt= $pdo->prepare($sql);
$stmt->execute($params);
//send the user back to the order page with:
header("Location: ../menu.php");

exit;