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

 <?PHP

   // connect to db
   $servername = "156.67.74.51";
   $user= "u413142534_robots";
   $pass= "R0b0tsRul3";
   $dbname = "u413142534_jaysnest";

   $con = new mysqli($servername, $user, $pass, $dbname);

   if ($con->connect_error) {
      die("Connection failed: " . $con->connect_error);
    }
    ?>

   <html>
      <div>

         <h1>
   <label for="FtypeForm" style = "margin-left: 250px"> Select type of food:</label>
   <form name = "FtypeForm">
      <select id = "s1" name = "FtypeSelect"  style = "margin-left: 250px height :20% width:25%" onchange = "itemsdrop()" >
      <?php
      $x =1;
      $sql = "SELECT unique ftype from items as ftype";
         foreach($con->query($sql) as $row){
            ?>
            <option value= <?php echo $x ?> > <?php echo $row["ftype"] ?> </option>
            <?php
            $x = $x+1;
         }
      ?>
      </select>
   </form>

   <p Selected option value: ></p>
   <p id = "X"></p>


   <? // cant figure out why this code wont grab the text from the selected option
      // but it will grab the selected option value?>
   <script>
      function itemsdrop() {
      var element = document.getElementById("s1");
      var value = document.getElementByValue("2");
      var text = value.text;
      document.getElementById("X").innerHTML = text;
      }

   </script>
   </h1>

   <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi Selector</title>
<style>
*{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
body{
    background-color: white;
}
input{
    outline: none;
    border: none;
}
.multi-selector{
    width: max-content;
}
.select-field{
    border: 1px solid rgb(187, 187, 187);
}
.select-field,.food,.list{
    width: 100%;
    background-color: white;
    padding: 0.3rem;
}
.list{
    box-shadow: 0 30px 60px rgb(0,0,0,0.2);
    display: none;
}
.down-arrow{
    font-size: 1.2rem;
    display: inline-block;
    cursor: pointer;
    transition: 0.2s linear;
}
.food{
    display: block;
    padding-left: 0;
}
.food span{
    float: right;
    font-size: 0.6rem;
    padding-top: 6px;
}
.food:hover{
    background-color: aliceblue;
}
.show{
    display: block;
}
.rotate180{
    transform: rotate(-60deg);
}

</style>

</head>
<body>
    <div class="multi-selector">

     <div class="select-field">
<input type="text" name="" placeholder="Choose foods" id="" class="input-selector">
     <span class="down-arrow">&blacktriangledown;</span>
     </div>
<!---------List of checkboxes and options----------->
     <div class="list">
    <?
    for($i=0; $i<4; $i++){
      ?>

       <label for="food <? $i ?>" class="food">
            <input type="checkbox" name="" id="food <? $i ?>">
            food 1
      </label>
       
     </div>
     <?
    }
    ?>


    </div>

    <script>
    

     document.querySelector('.select-field').addEventListener('click',()=>{
         document.querySelector('.list').classList.toggle('show');
         document.querySelector('.down-arrow').classList.toggle('rotate180');

     });

    </script>
</body>
</html>

   </html>
   <?php
   require("includes/footer.php");
   ?>
