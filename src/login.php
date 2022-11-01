<?php
session_start();

$loggedIn = "NO";
$wrong = "NO";
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
    if(isset($_SESSION["wrong"]) == "YES"){
        echo "Wrong credentials, try again";
    }
?>

        <form method = "post" action = "loginConfirm.php">
        Username: <input type= "text" name="username"> <br>
    </br>
        Password: <input type= "password" name= "password">
        <br>
    </br>
        <input type= "submit" value= "Login" >

<?php
if(isset($_SESSION["loggedIn"]) != "YES"){
    echo "Please Log in";
}
else{
    echo "You are logged in!";
}

?>

</form>

</body>
</html>