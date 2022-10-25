<?php

session_start();


$username = $_POST["username"];
$password = $_POST["password"];

if($username == "ninja" && $password == "ninja2527"){
    echo "you are in";

    $_SESSION[$loggedIn]= "YES";
    header("Location: http://localhost/jaysnestrobots/src/login.php", TRUE, 301);
}
else{
    echo "Incorrect credentials";
}

<form method = "post" action = "login.php" >
    <input type= "submit" value= "return to login" >

</form>


?>