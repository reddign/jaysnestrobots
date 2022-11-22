<?PHP
$path = '';
require("includes/header.php");
//We can start working on this page while developing the map and item list
//but will need to update it once deliverables are complete
?>

 <!-- Header -->
 <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Order</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
 </div>
 <?php
 echo "You can only order up to 3 items."

 // create dropdown with food category values
 ?>

 <html>
   <label for="items"> Select type of food:</label>
   <select name="items" id="items"></select>
 <?PHP
require("includes/footer.php");

   // connect to db
   $servername = "156.67.74.51";
   $user= "u413142534_robots";
   $pass= "v?TQs9Bye#";
   $dbname = "u413142534_jaysnest";

   $con = new mysqli($servername, $user, $pass, $dbname);

   if ($con->connect_error) {
      die("Connection failed: " . $con->connect_error);
    }

   //dropdown for general food type
   $sql = "SELECT count(distinct ftype) as num_type from items ";
   $result =  $con->query($sql);

   $x = $result;
   while($x>0){

   $type = $result->num_type;
   ?>
      <option value= <?php $type ?> ></option>

      <?php
      $x--;
   }

   $row = $result->fetch_assoc();
   echo $row["num_type"];
   ?>
   </select>

<?php
$product_array = $db_handle->runQuery("SELECT * FROM items ORDER BY item ASC");
if (!empty($product_array)) { 
	foreach($product_array as $key=>$value){
?>
	<div class="product-item">
		<form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
		<div class="product-tile-footer">
		<div class="product-title"><?php echo $product_array[$key]["descrip"]; ?></div>
		<div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
		<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
		</div>
		</form>
	</div>
<?php
	}
}
?>

   
   </html>
