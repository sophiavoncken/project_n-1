<?php
//Criando um array indexado, de 27 posicoes
$lst_uf = array(27);
$lst_uf [0] = "AC";
$lst_uf [1] = "AL";
$lst_uf [2] = "AP";
$lst_uf [3] = "AM";
$lst_uf [4] = "BA";
$lst_uf [5] = "CE";
$lst_uf [6] = "DF";
$lst_uf [7] = "ES";
$lst_uf [8] = "GO";
$lst_uf [9] = "MA";
$lst_uf[10] = "MT";
$lst_uf[11] = "MS";
$lst_uf[12] = "MG";
$lst_uf[13] = "PA";
$lst_uf[14] = "PB";
$lst_uf[15] = "PR";
$lst_uf[16] = "PE";
$lst_uf[17] = "PI";
$lst_uf[18] = "RJ";
$lst_uf[19] = "RN";
$lst_uf[20] = "RS";
$lst_uf[21] = "RO";
$lst_uf[22] = "RR";
$lst_uf[23] = "SC";
$lst_uf[24] = "SP";
$lst_uf[25] = "SE";
$lst_uf[26] = "TO";
// Verificando quantos itens ha no array
print("Quantidade de estados: ".count($lst_uf)."\n");
// Ordenando a lista
$ord_uf = $lst_uf;
sort($ord_uf);
// Fazendo a leitura do array e mostrando os estados
print("Mostrando os estados da nacao: \n");
for ($i = 0;$i < count($ord_uf);$i++) {
    print("Estado: ".$ord_uf[$i]."\n");
}
?>
