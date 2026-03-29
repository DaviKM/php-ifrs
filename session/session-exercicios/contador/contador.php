<?php
session_start();
if (!isset($_SESSION["cont"])) {
    $_SESSION["cont"] = 0;
}
$_SESSION["cont"]++;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
<h1>Você acessou o site <?php echo $_SESSION["cont"] ?> vezes</h1>
<a href="zerar.php">Zerar</a>
</body>
</html>