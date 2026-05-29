<?php 
session_start();
if (isset($_SESSION['nome'])){
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
    <title>Cadastrar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form action="perfil.php" method="post" enctype="multipart/form-data">
            <label for="nome">Nome:</label><br>
            <input type="text" name="nome" id="nome" required><br>

            <label for="foto">Foto de perfil:</label><br>
            <input type="file" id="foto" name="foto" required><br>

            <label for="cor">Cor:</label><br>
            <input type="color" name="cor" id="cor" value="red" required><br>

            <button name="submit">Cadastrar</button>
        </form>
    </main>
</body>
</html>
