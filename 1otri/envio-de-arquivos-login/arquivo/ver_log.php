<?php
session_start();
if ($_SESSION['login'] != 'enviador_de_arquivos') {
    header("Location: ../");
}
require_once 'funcoes.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver log</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php exibeLog(); ?>
    <a href="../">
        <button type="button">Voltar</button>
    </a>
</body>

</html>