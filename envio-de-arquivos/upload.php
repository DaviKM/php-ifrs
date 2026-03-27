<?php
    if(isset($_FILES['arquivo'])){
        $arquivo = $_FILES['arquivo'];
        $nome = basename($arquivo['name']);
        $caminho = "arquivos/" ;

        if(move_uploaded_file($arquivo['tmp_name'], $caminho.$nome)){
            echo "Arquivo enviado com sucesso! {$arquivo['name']}";
        }
        else {
            echo "Erro ao enviar arquivo!";
        }
    }
