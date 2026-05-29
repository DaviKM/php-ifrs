<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logado</title>
</head>
<body>
    <h1><?= $_POST['nome']?></h1>
    <p>Idade: <?=  $_POST['idade']?></p>
    <p>Esportes</p>
    <ul>
        <?php 
            foreach($_POST['esporte'] as $esporte){
                echo "<li>$esporte</li>" ;
            }
        ?>
    </ul>
    <p>Sorvete preferido: <?= $_POST['saborFav'] ?></p>
    <p><strong>Sobre você</strong></p>
    <p><?= $_POST['sobrevc'] ?></p>
</body>
</html>