<?PHP
$path = '';
require("../config.php");
require("functions/basic_html_functions.php");

require("functions/database_functions.php");

require("functions/menu_functions.php");
require("includes/header.php");
?>
<!-- Header -->
<div class="w3-container" style="margin-top:80px" id="showcase">
   <h1 class="w3-jumbo"><b>Menu</b></h1>
   <hr style="width:50px;border:5px solid red" class="w3-round">
</div>
<?PHP

echo "Below is the current menu of MTO (Made to Order) and general snacks offered to be deliverd from the Jay's Nest. ";
echo "Items may be added directly into the current cart by hitting the 'Add to Cart' button next to the desired item. \n"

//This page will be worked on once we have a definite list of items to build a menu

/*
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
 */

?>
 <?PHP
//Sets the page value for display
$page = isset($_GET["page"])?$_GET["page"]:"mto";
display_menu_page_navigation("Menu");

switch($page){
   case "mto":
    $string = isset($_GET["mto"])?$_GET["mto"]:"";
      $food = get_mto_by_name($string);
      display_food_list($food);
     break;
   case "snd":
    $string = isset($_GET["snd"])?$_GET["snd"]:"";
      $food = get_snd_by_name($string);
      display_food_list($food);
     break;
 }

 
 
require("includes/footer.php");