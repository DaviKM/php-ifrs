<?php 
    require_once 'conexao.php' ;

    try{
        $sql = 'DELETE FROM loja.produtos WHERE id= ? ;' ;
        $stmt = $pdo->prepare($sql) ;
        $stmt->execute([$_GET['idl']]) ;
        header("Location: listar.php") ;
    }
    catch (PDOException $e) {
        echo "<script>alert('{$e->getMessage()}')</script>" ;
    }
?>