<?php
    session_start();
    if (isset($_SESSION["login"])){
        header("Location: logado.php") ;
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logar</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            height: 100vh;
            width: 100vw;
            align-content: center;
             
        }
        form {
            justify-self: center;
            padding-bottom: 60px;
            
            
        }

        form * {
            margin: 4px 0;
        }

        form button {
            margin-left: 40%;
            padding: 6px;
            background-color: #7f04d7;
            color: white;
            border: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <form action="login.php" method="post" enctype="multipart/form-data">
        <label for="usuario">Usuário:</label><br>
        <input type="text" id="usuario" name="usuario"><br>

        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha"><br>

        <button>Logar</button>
    </form>
</body>
</html>