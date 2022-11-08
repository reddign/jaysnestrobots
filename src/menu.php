<?PHP
$path = '';
require("includes/header.php");
require("../config.php");
require("functions/basic_html_functions.php");
require("functions/database_functions.php");
require("functions/menu_functions.php");
//This page will be worked on once we have a definite list of items to build a menu


 echo "
 MENU:
 Large bag of chips
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
 Snickers
 Water bottle
 Gallon of water
 Turkey Hill juices
 ";
?>
 <?PHP
//Sets the page value for display
$page = isset($_GET["page"])?$_GET["page"]:"mto";
display_menu_page_navigation("Menu");

switch($page){
   case "mto":
     $string = isset($_GET["mto"])?$_GET["mto"]:"";
     get_all_food_from_db();
     break;
   case "snd":
     display_snd_menu();
     break;
 }

 
 
require("includes/footer.php");