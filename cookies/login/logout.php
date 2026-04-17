<?php
    session_start() ;
    unset($_SESSION['login']);
    setcookie('login', '', 1) ;
    
    header("Location: index.php");