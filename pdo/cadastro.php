<?php 
        require_once 'conexao.php' ;
        try {
            $sql = "INSERT INTO loja.produtos (nome, preco, descricao) VALUES(:nome, :preco, :descricao);" ;
            $stmt = $pdo->prepare($sql) ;
            $stmt->execute([
            ":nome" => $_POST['nome'],
            ":preco" => $_POST['preco'],
            ":descricao" => $_POST['desc']
            ]);
            echo "Produto inserido com ID ". $pdo->lastInsertId() ;
        } 
        catch (PDOException $e){
            echo $e->getMessage() ;
        }