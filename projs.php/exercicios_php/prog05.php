<?php
$id = 3;
$nome = "José";
$valor = 3.5;
$NOME = "Henrique";
// Concatenando strings.
// Usamos ponto para unificar variaveis e strings
print("Id............: ".$id."\n");
print("Nome minusculo: ".$nome."\n");
print("Nome maiusculo: ".$NOME."\n");
// Usando number_format para formatar valor decimais
// com 2 casas numericas e a virgula no final
$mensagem = "Valor.........: " .
            number_format($valor,2,",",".") .
            "\n";
print($mensagem);
// com 10 casas numericas
$mensagem = "Valor c/ 10...: " .
            number_format($valor,10,",",".") .
            "\n";
print($mensagem);
// com 10 casas numericas com +
$mensagem = "Valor c/ 10. +: " .
            number_format($valor,10,"+",".") .
            "\n";
print($mensagem);

?>
