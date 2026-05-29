<?php
session_start();

$cadastros = $_SESSION['cadastros'];

if (isset($_POST["submit"])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if (array_key_exists($usuario, $cadastros) && $cadastros[$usuario] == $senha) {
        $_SESSION['login'] = $usuario;
        if (isset($_POST['lembrar'])) {
            setcookie('login', $usuario, time() + 86400 * 30);
        }
        header("Location: ../");
    }
}
header("Location: ./");