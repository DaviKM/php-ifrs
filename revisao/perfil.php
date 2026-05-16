<?php
    session_start();
    $foto = $_FILES['foto'];
    $novo_nome = $foto_nome = $foto['name'];
    echo $novo_nome;
    if(str_starts_with($foto['type'], 'image')){
        move_uploaded_file($foto['tmp_name'], "uploads/{$foto['name']}" . time());
    }
    else {
        header("Location: cadastro.php");
    }
    $_SESSION['nome'] = $_POST['nome'];
    setcookie("user_theme", $_POST['cor'], time() + 86400);

    date_default_timezone_set('America/Sao_Paulo');
    $log = date("Y-m-d H:i:s") . " Usuário $_SESSION[nome] se cadastrou" . PHP_EOL;
    file_put_contents("atividade.log", $log, FILE_APPEND);
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
            background-color: <?= $_COOKIE['user_theme'] ?>; ;
        }
    </style>
</head>
<body>
<img src="uploads/<?=$foto['name']?>" alt="Foto de perfil">
</body>
</html>
