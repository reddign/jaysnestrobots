<?php

session_start();

$loggedIn = $_SESSION["loggedIn"];

    if($loggedIn != "YES"){

        echo "You are not logged in";
        exit;
    }
?>