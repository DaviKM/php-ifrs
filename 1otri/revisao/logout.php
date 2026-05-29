<?php 
session_start() ;
setcookie("user_theme", "", time() - 36000) ;
session_destroy();
header("Location: cadastro.php") ;