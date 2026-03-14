<?php
if (isset($_FILES["arquivo"])) {
    $arquivo = $_FILES["arquivo"];
    $nome = basename($arquivo["name"]);
    $tmp_name = $arquivo["tmp_name"] ;
    $caminho = "arquivos/" . $nome ;

    if(move_uploaded_file($tmp_name, $caminho)){
        echo "Arquivo enviado com sucesso" ;
    }
    else{
        echo "Erro!" ;
    }
}
?>