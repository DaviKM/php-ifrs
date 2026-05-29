<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tchau</title>
</head>
<body>
    <h1>
        <?php 
            session_start() ;
            echo "Tchau {$_SESSION['nome']}" ;
        ?>
    </h1>
</body>
</html>