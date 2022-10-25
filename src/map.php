<?PHP
$path = '';
require("includes/header.php");
?>

 <!-- Header -->
 <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Map</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
 </div>

 <?php
  echo "This is the map of current Jay's Nest delivery locations on the Elizabethtown College Campus.";
  ?>

<!-- Photo grid (modal) -->
<div>
    <div class="w3-half">
      <img src="images/map.jpg" style="width:175%" onclick="onClick(this)" alt="Delivery Locations on Campus Map">
    </div>

    <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">x</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
</div>

 <?PHP
require("includes/footer.php");