<?PHP
$path = '';
require("includes/header.php");
require("functions/menu_functions.php");
//This page will be worked on once we have a definite list of items to build a menu
?>

 <!-- Header -->
 <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Menu</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
 </div>

 <iframe width="1000" height="500" frameborder="0" scrolling="no" src="https://elizabethtown-my.sharepoint.com/:x:/g/personal/bednara_etown_edu/EffX_7Ze_-dGrozdANRRUoMBvyNfCKLhk3K6CDkCpMZDgg?e=kP7HCp&action=embedview&wdbipreview=true">
<?php
 echo "Large bag of chips
 Small bag of chips
 16 oz bottle of soda
 16 oz can of soda
 Gum
 M&Ms
 Hershey ice cream tubs
 Assorted breads
 Gatorade 20 oz
 Gatorade 24 oz
 Gatorade 28 oz
 Quest protein bars
 Skittles
 Snickers";
?>
 <?PHP
//Sets the page value for display
$page = isset($_GET["page"])?$_GET["page"]:"mto";
display_menu_page_navigation("Menu");

switch($page){
   case "mto":
     $string = isset($_GET["mto"])?$_GET["mto"]:"";
     display_mto_menu();
     break;
   case "snd":
     display_snd_menu();
     break;
 }

 
 
require("includes/footer.php");