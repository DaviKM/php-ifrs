<?php 
    if(isset($_FILES('arquivo'))){
        $arquivo = $_FILES('arquivo') ;
        $destino = "arquivos/" ;

        if(move_uploaded_file($arquivo["tmp_name"], $destino)){
            echo "Arquivo enviado com sucesso!" ;
        }
        else{
            echo "Erro!" ;
        }
    }
?>