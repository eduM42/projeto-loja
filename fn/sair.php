<?php
    session_start();
    include_once 'connect.php';
    setcookie('login', FALSE);
    header('Location: index.php');
?>