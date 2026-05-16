<?php 
date_default_timezone_set('America/Sao_Paulo');

function escreveLog($mensagem){

    $arquivo = 'log.txt' ;
    $data = date("d/m/Y - H:i:s");
    $final = "$data\t$mensagem" . PHP_EOL ;

    file_put_contents($arquivo, $final, FILE_APPEND) ;

}

function exibeLog(){
    $log = file_get_contents("log.txt") ;
    echo nl2br($log) ;
}