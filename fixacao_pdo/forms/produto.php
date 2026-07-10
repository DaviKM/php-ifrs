<?php require_once '../conexao.php' ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        body {
            background-color: white;
        }

        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1.5px solid black;
            padding: 0 130px;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>ID do fornecedor</th>
                <th>ID da marca</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                    $sql = 'SELECT * FROM produtos' ;
                    $stmt = $pdo->prepare($sql) ;
                    $stmt->execute();
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC) ;
                    foreach ($result as $produto):?>
                        <tr>
                            <td><?= $produto['id'] ?></td>
                            <td><?= $produto['nome'] ?></td>
                            <td><?= $produto['preco'] ?></td>
                            <td><?= $produto['estoque'] ?></td>
                            <td><?= $produto['fornecedor_id'] ?></td>
                            <td><?= $produto['marcas_id'] ?></td>
                        </tr>
                    <?php endforeach ;?>

        </tbody>
    </table>
</body>

</html>