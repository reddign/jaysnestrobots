<?php

session_start();
//username should be studentID 
$username = $_POST["username"];
$password = $_POST["password"];

if($username == "ninja" && $password == "ninja2527"){

    $_SESSION["loggedIn"] = "YES";
    $_SESSION["username"] = $username;
    echo "YOU ARE LOGGED IN!";
    //check for session variable working

    
    }
else{

if(isset($_SESSION["loggedIn"]) != "YES"){
    $_SESSION["wrong"] = "YES";
      header("Location: http://localhost/jaysnestrobots/src/login.php", TRUE, 301);
 }

}

?>
<html>
    
<body>
<form method = "post" action = "index.php" >
    <input type= "submit" value= "return to home" >

</form>

</body>
</html>