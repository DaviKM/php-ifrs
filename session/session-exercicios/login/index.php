<?php
session_start();
if (!isset($_SESSION['cadastros'])) {
    $_SESSION['cadastros'] = array();
}
if (isset($_SESSION["login"])) {
    header("Location: home.php");
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <form action="login.php" method="post" enctype="multipart/form-data">
        <label for="usuario">Usuário:</label><br>
        <input type="text" id="usuario" name="usuario"><br>

        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha"><br>

        <button name="submit">Logar</button>
        <p style="justify-self: center">Não tem conta?</p>
        <a href="cadastro.php">
            <button type="button">Criar cadastro</button>
        </a>
    </form>

</main>
</body>
</html>