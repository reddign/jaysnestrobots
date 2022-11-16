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
    <form method='get' action="order_add.php">
   <label for="itemID"> Select type of food:</label>
   <select name="itemID" id="itemID">
 <?PHP
require("includes/footer.php");

 
require_once("../config.php");
  // $con = new mysqli($servername, $user, $pass, $dbname);
  $con = new mysqli($databasehost, $databaseuser, $databasepassword, $database);

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
      //$x--;
   }


  
   ?>
   </select>
   <input type="submit" value="Add to Order">
</form>
   </html>
