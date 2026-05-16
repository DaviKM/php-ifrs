<?php
session_start();
if ($_SESSION['login'] != 'enviador_de_arquivos') {
    header("Location: ../");
}
$arquivos = scandir('arquivos/');

$extensoes = [
    'imagens' => ["jpg", "jpeg", "png"],
    'pdf' => '<i class="fa-brands fa-dochub"></i>',
    'doc' => '<i class="fa-brands fa-wordpress"></i>',
    'mp4' => '<i class="fa-brands fa-code"></i>',
    'wav' => '<i class="fa-brands fa-windows"></i>',
    'mp3' => '<i class="fa-brands fa-audio"></i>',
]
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galeria de arquivos</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <ul id="listaArquivos" class="visuBlock">
        <?php
        foreach ($arquivos as $arquivo) {
            if ($arquivo != '.' && $arquivo != '..') {
                echo "<li><a href='arquivos/$arquivo' download>$arquivo</a></li><br/>";
                if (in_array(pathinfo("arquivos/$arquivo", PATHINFO_EXTENSION), $extensoes['imagens'])) {
                    echo "<img src='arquivos/$arquivo' alt='Preview de $arquivo' width='45px' height='45px'>";
                } else if (array_key_exists(pathinfo("arquivos/$arquivo", PATHINFO_EXTENSION), $extensoes)) {
                    echo $extensoes[pathinfo("arquivos/$arquivo", PATHINFO_EXTENSION)];
                }
            }
        }
        ?>
    </ul>
    <nav>
        <a href="apagar.php">
            <button type="button">Deletar arquivo</button>
        </a>
        <a href="../">
            <button type="button">Voltar</button>
        </a>
        <button onclick="trocarDisplay()" type="button">Trocar Visualização</button>
    </nav>
</body>
<script>
    function trocarDisplay() {
        var display = document.getElementById('listaArquivos')

        if (display.className == 'visuBlock') {
            display.classList.remove('visuBlock')
            display.classList.add('visuFlex')
        } else if (display.className == 'visuFlex') {
            display.classList.add('visuBlock')
            display.classList.remove('visuFlex')
        }
    
    }


</script>

</html>