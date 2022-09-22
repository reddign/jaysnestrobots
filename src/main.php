<?php

session_start();
$status = $_SESSION["loggedIn"];

?>
<html>

    <head>
    <style>
body {background-color: powderblue;}
h1   {color: blue;}
p    {color: red;}
</style>
</head>
<body>





    <?php
    if($loggedIn != "YES"){

    ?>
    <img src= "images/delivery bird.webp" >

    <form method = "post" action = "login.php" >
    Username: <input type= "text" name="username"> <br>
</br>
    Password: <input type= "password" name= "password">
    <br>
</br>
    <input type= "submit" value= "Login" >
<?php
    }else { echo"Welcome! Click here <a href = 'secret.php'> </a>for intfo on company picnic"}
?>

</form>

    
    

</body>
</html>