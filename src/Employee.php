<?PHP

session_start();
$loggedIn = isset($_SESSION["emp"]);
$path = '';
require("includes/header.php");
?>

 <!-- Header -->
 <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Employee</b></h1>
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
 $empID = $_SESSION['empID'];

 $con = new mysqli($servername, $user, $pass, $dbname);

 if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
?>

<html>
 <style>
table, th, td {
  border:1px solid black;
}
</style>
 
 <table name= "table" style="width:100%">
  <tr>
    
    <th>Order</th>
    <th>Item</th>
    <th>Location</th>
  </tr>
    <?php
    $result = $con->query("SELECT distinct studentID from ordering");
        while($row = $result->fetch_array(MYSQLI_BOTH)){
            $orders = $row['studentID'];
        }

    $result = $con->query("SELECT * from ordering");

      while($row = $result->fetch_array(MYSQLI_BOTH)){
        $ItemDesc = $row['descrip'];
        $destin = $row['location'];
        $orderID;
      ?>
      <tr>
        <form method = "get" action=sentout.php>
        <label for="item"></label>

      <th> <input type= "hidden" name = "order" value = "<?php echo $orders;?>"> <?php echo $orders;?></th>

      <?php
      $ItemPrice = $row['price'];
      ?>

      <th> <?php echo $ItemDesc;?></th>

      <th><?php echo $destin;?></th>

      </form>
      </tr>
      <?php
      }
      
    ?>
</table>




<html>
    <form method='get' action="sentout.php">
   <label for="itemID"> Select order to complete:</label>
   <select name="order" id="itemID">
 <?PHP

 
   $sql = "SELECT distinct studentID from ordering";
   $result =  $con->query($sql);
   
   //$x = $result;
   
      
   while($row = $result->fetch_array(MYSQLI_BOTH)){

  $order = $row["studentID"];

   ?>
      <option value="<?php echo $order ?>"> <?php echo $order ?></option>

      <?php
   }
   ?>
   <br>
   </select>
   
   <label for="SelRob"> Select robot:</label>
   <select name="robot" id="RobID">
 <?PHP

 
   $sql = "SELECT * from robot where status = 'IN' ";
   $result =  $con->query($sql);
   
   //$x = $result;
   

   while($row = $result->fetch_array(MYSQLI_BOTH)){

    $robot = $row["ID"];

   ?>
      <option value="<?php echo $robot ?>"> <?php echo $robot ?></option>

      <?php
   }
   ?>
   <br>
   </select>

   <br></br>
   <input type="submit" value="complete" name = "true">
   </form>


 </html>



<?php
require("includes/footer.php");
?>