<?PHP

session_start();
//$status = $_SESSION["loggedIn"];
$loggedIn = isset($_SESSION["loggedIn"])?$_SESSION["loggedIn"]:"NO";

$path = '';
require("includes/header.php");
?>

 <!-- Header -->
 <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Jays Nest Robotic Delivery</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Database.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
 </div>

  <?php
  echo "Welcome to the home page of the Jays Nest Robotic Delivery Service Website.";
  ?>

<!-- Photo grid (modal) -->
<div class="w3-row-padding">
    <div class="w3-half">
      <img src="images/maxresdefault.jpg" style="width:100%" onclick="onClick(this)" alt="Jays Nest Entrance">
    </div>

    
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">x</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
</div>

<br>
</br>

<html>

<?php
if( $loggedIn == "YES"){
  echo "You are logged in";
}
else{
  echo "You are not logged in";

?>


<form method = "post" action = "login.php" >
    <input type= "submit" value= "log in" >
</form>

</html>

<?PHP
}
require("includes/footer.php");