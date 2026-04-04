<?php
$arquivos = scandir('arquivos/');

?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galeria de arquivos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<ul>
    <?php
    foreach ($arquivos as $arquivo) {
        if ($arquivo != '.' && $arquivo != '..') {
            echo "<li><a href='arquivos/$arquivo' download>$arquivo</a></li><br/>";
        }
    }
    ?>
</ul>
<a href="apagar.php">
    <button type="button">Deletar arquivo</button>
</a>
<a href="index.html">
    <button type="button">Voltar</button>
</a>
</body>
</html>
