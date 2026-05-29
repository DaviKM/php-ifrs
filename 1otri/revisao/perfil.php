<?php
session_start();
if (empty($_SESSION['nome'])){
    if (!isset($_POST['nome'])) {
    header("Location: cadastro.php");
    exit;
}
$foto = $_FILES['foto'];
$_SESSION['foto_nome_final'] = pathinfo($foto['name'], PATHINFO_FILENAME) . time() . "." . pathinfo($foto['name'], PATHINFO_EXTENSION);

if (str_starts_with($foto['type'], 'image')) {
    move_uploaded_file($foto['tmp_name'], "uploads/{$_SESSION['foto_nome_final'] }");
} 
$_SESSION['nome'] = $_POST['nome'];
setcookie("user_theme", $_POST['cor'], time() + 86400);

date_default_timezone_set('America/Sao_Paulo');
$log = date("Y-m-d H:i:s") . " Usuário {$_SESSION['nome']} se cadastrou" . PHP_EOL;
file_put_contents("atividade.log", $log, FILE_APPEND) ; 
header("Location: perfil.php") ;
}
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background-color:
                <?= $_COOKIE['user_theme'] ?>
            ;
        }
    </style>
</head>

<body>
    <h1>Seja bem-vindo, senhor <?= $_SESSION['nome'] ?></h1>
    <img src="uploads/<?= $_SESSION['foto_nome_final']?>" alt="Foto de perfil"><br>
    <p>Cor: <?= $_COOKIE['user_theme'] ?></p>
    <a href="logout.php"><button type="button">Sair</button></a>
</body>

</html>