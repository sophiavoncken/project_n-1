<?php

/*
* Objetivo: Formata a data no formato DD/MM/AAAA
* Autor...: Sophia Voncken
* Data....: 25/06/2024
*/

$dia = readline("Digite o dia: ");
$mes = readline ("Digite o número do mês: ");
$ano = readline("Digite o ano: ");
$data_formatada = sprintf("%02d/%02d/%04d", $dia, $mes, $ano);
echo "Data formatada: " . $data_formatada . "\n";
?>