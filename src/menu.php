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
 <?PHP
//Sets the page value for display
$page = isset($_GET["page"])?$_GET["page"]:"mto";


display_student_page_navigation("Menu");
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