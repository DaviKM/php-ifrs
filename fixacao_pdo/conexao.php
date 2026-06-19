
    <?php 
$dsn = 'mysql:host=localhost;dbname=lojaa;charset=utf8' ;
$user = 'root';
$password = '' ;
try{
    $pdo = new PDO($dsn, $user, $password) ;
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION) ;
}
catch (PDOException $e){
    echo "<script>
    alert(`Error! {$e->getMessage()}`)
    </script>" ;
}
?>
