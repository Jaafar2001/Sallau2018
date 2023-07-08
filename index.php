<?php 
session_start();
if(!isset($_SESSION['userlogin'])){
    header("Location: login.php");
}


;?>

<p>WELCOME</p>