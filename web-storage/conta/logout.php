<?php
    session_start() ;
    unset($_SESSION['login']);
    setcookie('login', '', time() - 86400) ;
    header("Location: ./");