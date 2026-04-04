<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header("Location: index.php");
    }
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Você está logado</h1>
        <a href="logout.php"><button type="button">Deslogar</button></a>
    </main>
</body>
</html>
