<?php

/*
 * Objetivo: Mostra o CEP no formato 99.999-999.
 * Autor...: Sophia Voncken
 * Data....: 28/06/2024
 */

function formatarCEP($cep) {
    $cep = preg_replace('/\D/', '', $cep);
    if (strlen($cep) != 8) {
        return 'CEP inválido';
    }
    $cep_formatado = substr($cep, 0, 2) . '.' . substr($cep, 2, 3) . '-' . substr($cep, 5, 3);
    return $cep_formatado;
}
if (isset($_GET['cep'])) {
    $cep = $_GET['cep'];
    $cep_formatado = formatarCEP($cep);
    echo "CEP formatado: $cep_formatado";
} else {
    echo "Por favor, informe um CEP válido.";
}
?>