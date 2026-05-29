<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: conta/");
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
    <link rel="stylesheet" href="conta/style.css">
    <!--Desabilita --> 
    <?php if($_SESSION['login'] != 'enviador_de_arquivos'):?>
        <style>
            #envio-arquivos{
             pointer-events: none;
             filter: saturate(0);
            }
        </style>
    <?php endif;?>
</head>
<body>
<main style="flex-direction: column">
    <div id="envio-arquivos">
        <form action="arquivo/upload.php" method="post" enctype="multipart/form-data" style="padding: 0;">
            <input type="file" name="arquivo"><br>
            <button>Enviar</button>
        </form>
        <a href="arquivo/galeria.php"><button type="button">Ver arquivos</button></a>
        <a href="arquivo/ver_log.php"><button type="button">Ver log</button></a>
    </div>
    <a href="conta/logout.php">
        <button type="button">Deslogar</button>
    </a>
</main>
</body>
</html>
