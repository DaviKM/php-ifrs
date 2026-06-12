<?php require_once 'conexao.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Descrição</th>
            <th>Apagar</th>
        </tr>
        
            <?php
                $sql = "SELECT * FROM produtos;" ;
                $stmt = $pdo->prepare($sql) ;
                $stmt->execute() ;
                $linhas = $stmt->fetchAll(PDO::FETCH_ASSOC) ;
                foreach($linhas as $linha){
                    echo "<tr>
                    <td>{$linha['id']}</td>
                    <td>{$linha['nome']}</td>
                    <td>{$linha['preco']}</td>
                    <td>{$linha['descricao']}</td>
                    <td><a href='alterar.php?idl={$linha['id']}'><button type='button'>Alterar</button></a></td>
                    <td><a href='apagar.php?idl={$linha['id']}'><button type='button'>X</button></a></td>
                    <tr>" ;
                }
            
            
            ?>
    </table>
    <a href="index.html"><button type="button">Voltar</button></a>
</body>
</html>
