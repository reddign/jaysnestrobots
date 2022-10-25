<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-blue w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
   <img width="175px" src="<?php echo $path; ?>images/delivery bird.webp">
    <h3 class="w3-padding-34"><b>Jays Nest Robotic Delivery</b></h3>
  </div>
 
  <div class="w3-bar-block">
    <a href="<?php echo $path; ?>index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="<?php echo $path; ?>order.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Order</a> 
    <a href="<?php echo $path; ?>order_confirmation.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Confirmation</a> 
    <a href="<?php echo $path; ?>menu.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Menu</a> 
    <a href="<?php echo $path; ?>map.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Map</a>     
    <a href="<?php echo $path; ?>about.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">About</a>  
  </div>
  
 
</nav>
<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-blue w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-blue w3-margin-right" onclick="w3_open()">☰</a>
  <span>Jays Nest Robotic Delivery</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

