<?PHP
$path = '';
require("../config.php");
require("functions/basic_html_functions.php");

require("functions/database_functions.php");

$i = $_GET["itemID"];

 

$orderNum = $_SESSION["CurrentOrderNum"]; 
//you should make this when a user starts to use the order page or when they log in.

 

require "../config.php";

 

$sql = "INSERT INTO order_item(orderID, itemID) VALUES ( :order,:item)";

 

$params = [":order"=>$orderNum,":item"=>$i];

//send this query to the database with a parameterized query

 

//send the user back to the order page with:
header("Location: order.php");

exit;