<?php
/*
* Objetivo: Mostra a data por extenso.
* Autor...: Sophia Voncken
* Data....: 26/05/2024
*/

function dataPorExtenso($data) {
    list($dia, $mes, $ano) = explode('/', $data);

    $meses = [
        1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março',
        4 => 'Abril', 5 => 'Maio', 6 => 'Junho',
        7 => 'Julho', 8 => 'Agosto', 9 => 'Setembro',
        10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro'
    ];

    $dias = [
        1 => 'Um', 2 => 'Dois', 3 => 'Três', 4 => 'Quatro', 5 => 'Cinco', 
        6 => 'Seis', 7 => 'Sete', 8 => 'Oito', 9 => 'Nove', 10 => 'Dez',
        11 => 'Onze', 12 => 'Doze', 13 => 'Treze', 14 => 'Quatorze', 15 => 'Quinze',
        16 => 'Dezesseis', 17 => 'Dezessete', 18 => 'Dezoito', 19 => 'Dezenove', 
        20 => 'Vinte', 21 => 'Vinte e Um', 22 => 'Vinte e Dois', 23 => 'Vinte e Três', 
        24 => 'Vinte e Quatro', 25 => 'Vinte e Cinco', 26 => 'Vinte e Seis', 
        27 => 'Vinte e Sete', 28 => 'Vinte e Oito', 29 => 'Vinte e Nove', 
        30 => 'Trinta', 31 => 'Trinta e Um'
    ];
    
    if (checkdate($mes, $dia, $ano)) {
        $dataExtenso = "{$dias[(int)$dia]} de {$meses[(int)$mes]} de {$ano}";
        return $dataExtenso;
    } else {
        return 'Data inválida!';
    }
}

echo "Digite uma data no formato DD/MM/AAAA: ";
$dataDigitada = trim(readline());

$dataExtenso = dataPorExtenso($dataDigitada);
echo "Data por extenso: {$dataExtenso}\n";
?>
