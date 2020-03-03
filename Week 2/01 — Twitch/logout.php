<?php
    // session must start first to destroy it 
    session_start();
    if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]){
        session_destroy();
        //remove cookie
        setcookie("PHPSESSID", "", time() - 3600, "/");
        //redirecht to login page
        header("Location: login.php");
    }
?>