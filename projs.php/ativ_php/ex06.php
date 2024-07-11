<?php

/*
 * Objetivo: Mostra o valor por extenso.
 * Autor...: Sophia Voncken
 * Data....: 28/06/2024
 */

function formatarCEP($cep) {
    $cep = (string) $cep;
    $cepFormatado = substr($cep, 0, 2) . '.' . substr($cep, 2, 3) . '-' . substr($cep, 5);
    return $cepFormatado;
}
echo "Digite o CEP: ";
$cep = trim(readline());
$cepFormatado = formatarCEP($cep);
echo "CEP formatado: {$cepFormatado}\n";
?>
