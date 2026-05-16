<?php
    session_start();
    if(isset($_SESSION['login'])){
        header("location: home.php");
    }
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form action="signin.php" method="post" enctype="multipart/form-data">
            <label for="usuario">Usuário:</label><br>
            <input type="text" id="usuario" name="usuario"><br>

            <label for="senha">Senha:</label><br>
            <input type="password" id="senha" name="senha"><br>

            <label for="confirmacao">Confirmar senha:</label><br>
            <input type="password" id="confirmacao" name="confirmacao"><br>

            <button name="submit">Cadastrar</button>
        </form>
    </main>
</body>
</html>