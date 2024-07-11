<?php

/*
* Objetivo: Testa se a data é válida
* Autor...: Sophia Voncken
* Data....: 25/06/2024
*/

$dia = readline("Digite o dia: ");
$mes = readline("Digite o mês: ");
$ano = readline("Digite o ano: ");
if (is_numeric($dia) && is_numeric($mes) && is_numeric($ano) &&
    checkdate((int)$mes, (int)$dia, (int)$ano)) {
    $data_formatada = sprintf("%02d/%02d/%04d", $dia, $mes, $ano);
    echo "Data válida: " . $data_formatada . "\n";
} else {
    echo "Data inválida. Tente novamente.\n";
}
?>