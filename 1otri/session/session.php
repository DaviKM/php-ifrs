<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $_SESSION["nome"] = "Davi" ;

        echo "<h1>Oi {$_SESSION['nome']}</h1>"
    ?>
    <a href="/tchau.php">Dar tchau</a>
</body>
</html>