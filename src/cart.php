<?PHP

session_start();
$loggedIn = isset($_SESSION["loggedIn"]);
$path = '';
require("includes/header.php");
//We can start working on this page while developing the map and item list
//but will need to update it once deliverables are complete
?>

 <!-- Header -->
 <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Cart</b></h1>
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

 // create cart
 ?>
 <html>
 <style>
table, th, td {
  border:1px solid black;
}
</style>
 
 <table style="width:100%">
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste<button type= "button"> remove </button></td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
</table>

<form action="http://localhost/jaysnestrobots/src/orderAlternative.php">
    <input type="submit" value="return to order" />
</form>

<form action=>
    <input type="submit" value="confirm order" style = "margin-right: 200px"/>
</form>

</html>