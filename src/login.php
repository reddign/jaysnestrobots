<?php
$loggedIn = "NO";
session_start();
//$status = $_SESSION["loggedIn"];

//basic style
?>
<?PHP
$path = '';
require("includes/header.php");
?>

 <!-- Header -->
 <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Login</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
 </div>

 <html>
    <head>
       
</head>
<body>
    <?php
    if($loggedIn != "YES"){

    
    ?>
    Please login


    <form>
    Username: <input type= "text" name="username"> <br>
</br>
    Password: <input type= "password" name= "password">
    <br>
</br>
    <input type= "submit" value= "Login" >
<?php
    }
    //else { echo"Welcome! Click here <a href = 'secret.php'> </a>for intfo on company picnic"}
?>

</form>

</body>
</html>
