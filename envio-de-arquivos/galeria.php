<?php
$arquivos = scandir('arquivos/');

foreach ($arquivos as $arquivo) {
    if ($arquivo != '.' && $arquivo != '..') {
        echo "<a href='arquivos/$arquivo' download>$arquivo</a><br/>";
    }
}