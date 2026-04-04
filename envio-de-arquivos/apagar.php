<?php $diretorio = scandir("arquivos/");?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apagar arquivos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="apagar.php" method="post" enctype="multipart/form-data">
        <?php
        foreach ($diretorio as $arquivo) {
            if ($arquivo != '.' && $arquivo != '..') {
                echo "<li><input type='checkbox' name='arquivo[]' value='$arquivo'>$arquivo</li><br/>";
            }
        }
        ?>
        <button name="submit">Apagar</button>
        <a href="index.html">
            <button type="button">Voltar</button>
        </a>
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        $arquivos = $_POST["arquivo"];
        foreach ($arquivos as $arquivo) {
            unlink("arquivos/$arquivo") ;
        }
        header("Location: apagar.php");
    }