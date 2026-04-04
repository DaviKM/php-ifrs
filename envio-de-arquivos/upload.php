<?php
if (isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];
    $nome = basename($arquivo['name']);
    $caminho = "arquivos/";

    if(in_array($nome, scandir($caminho))) {
        echo "Já existe um arquivo com o nome $nome.";
    }
    else {
        if (move_uploaded_file($arquivo['tmp_name'], $caminho . $nome)) {
            echo "Arquivo enviado com sucesso! {$arquivo['name']}";
        } else {
            echo "Erro ao enviar arquivo!";
        }
    }
}
?>
<a href="index.html">
    <button>Voltar</button>
</a>
