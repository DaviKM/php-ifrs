<?php
require_once 'conexao.php';
session_start() ;
try {
    $_SESSION['id'] = $_GET['idl'];
    $sql = 'SELECT * FROM produtos WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_SESSION['id']]);
    $linha = $stmt->fetch(PDO::FETCH_ASSOC);
    $nome = $linha['nome'];
    $preco = $linha['preco'];
    $descricao = $linha['descricao'];
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index.php</title>
</head>

<body>
    <form action="cadastro.php" method="post">
        <input type="number" placeholder="<?= $_SESSION['id'] ?>" disabled>
        <input type="text" name="novo_nome" placeholder="Nome" value='<?= $nome ?>'>
        <input type="number" name="novo_preco" placeholder="Preço" value='<?= $preco ?>'>
        <input type="text" name="nova_desc" placeholder="Descrição" value='<?= $descricao ?>'>
        <button type="button" name="submit">Enviar</button>
    </form>
    <a href="listar.php"><button type="button">Ver produtos</button></a>
</body>
<?php
if (isset($_POST['submit'])) {
    try {
        $sql = "UPDATE loja SET nome=:novo_nome, preco=:novo_preco, descricao=:nova_desc WHERE id=:id;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":novo_nome" => $_POST['nome'],
            ":novo_preco" => $_POST['preco'],
            ":nova_descricao" => $_POST['desc'],
            ":id" => $_SESSION['id']
        ]);
        echo "Produto atualizado com sucesso" ;
        session_destroy() ;
        //TESTAR ESWA PARTE
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>

</html>