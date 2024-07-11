<?php

/*
 * Objetivo: Formata o valor no formato 9.999,99
 * Autor...: Sophia Voncken
 * Data....: 28/06/2024
 */

function formatarValor($valor) {
    if (!is_numeric($valor)) {
        return 'Valor inválido!';
    }
    $valorFormatado = number_format($valor, 2, ',', '.');
    return $valorFormatado;
}
echo "Digite um valor: ";
$valor = trim(readline());

$valorFormatado = formatarValor($valor);
echo "Valor formatado: {$valorFormatado}\n";
?>