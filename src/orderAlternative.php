<?PHP

session_start();
$loggedIn = isset($_SESSION["loggedIn"]);
$added = "no";
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
 if(!$loggedIn){

   header("Location: http://localhost/jaysnestrobots/src/login.php", TRUE, 301);
   ?>
   <?php
}
?>

 <?php
 // connect to db
 $servername = "156.67.74.51";
 $user= "u413142534_robots";
 $pass= "R0b0tsRul3";
 $dbname = "u413142534_jaysnest";
 echo "You can only order up to 3 items.";

 // create dropdown with food category values
 ?>

 <html>
    <form method='get' action="order_add.php">
   <label for="itemID"> Select type of food:</label>
   <select name="itemID" id="itemID">
 <?PHP
require("includes/footer.php");

 
require_once("../config.php");
  $con = new mysqli($servername, $user, $pass, $dbname);

   if ($con->connect_error) {
      die("Connection failed: " . $con->connect_error);
    }

   //dropdown for general food type
   //$sql = "SELECT count(distinct ftype) as num_type from items ";
   //$sql = "SELECT distinct ftype as num_type from items ";
   $sql = "SELECT * from items ";
   $result =  $con->query($sql);
   
   //$x = $result;
   
      
   while($row = $result->fetch_array(MYSQLI_BOTH)){

  $itemID = $row["itemID"];
  $description = $row["description"];
  
   ?>
      <option value="<?php echo $itemID ?>"> <?php echo $description ?></option>

      <?php
   }
   ?>
   <br>
   </select>
   <input type="submit" value="Add to Order" name = "true">
   

</form>
</html>
   <?php
      if(isset($_SESSION['NumCartItem']) && $_SESSION['NumCartItem'] == 3){
         //echo $_SESSION['NumCartItem'];
         ?>

         <html>
         <p1> max number of items in cart<?echo $_SESSION['NumCartItem'] ?> </p1>
         </html>
         <br>
      </br>
         <?php
      }
   ?>
   <?php
   if(isset($_SESSION['added']) == "yes" && isset($_SESSION['descrip']) && $_SESSION['NumCartItem'] != 3){
      //echo $description "added to cart";
      ?>
      <html>
      <p2> <?php echo $_SESSION['descrip'] ?> added to cart </p2>
      </html>
      <?php
      $_SESSION['added'] = "no";
   }
   ?>
<html>
<form action="http://localhost/jaysnestrobots/src/cart.php">
    <input type="submit" value="Go to Cart" />
</form>
</html>

