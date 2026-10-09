<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
if(!isset($_SESSION['id']) || !$_SESSION['is_admin']){
    header("Location: /login/login.php");
    exit();
}
?>