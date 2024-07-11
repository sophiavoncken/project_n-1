<?php
// Criando um array multi-dimensional de 27 posicoes
$mat_uf = array(27);
$mat_uf[0]  = array("AC","Acre");
$mat_uf[1]  = array("AL","Alagoas");
$mat_uf[2]  = array("AP","Amapa");
$mat_uf[3]  = array("AM","Amazonas");
$mat_uf[4]  = array("BA","Bahia");
$mat_uf[5]  = array("CE","Ceara");
$mat_uf[6]  = array("DF","Distrito Federal");
$mat_uf[7]  = array("ES","Espirito Santo");
$mat_uf[8]  = array("GO","Goias");
$mat_uf[9]  = array("MA","Maranhao");
$mat_uf[10] = array("MT","Mato Grosso");
$mat_uf[11] = array("MS","Mato Grosso do Sul");
$mat_uf[12] = array("MG","Minas Gerais");
$mat_uf[13] = array("PA","Para");
$mat_uf[14] = array("PB","Paraiba");
$mat_uf[15] = array("PR","Parana");
$mat_uf[16] = array("PE","Pernambuco");
$mat_uf[17] = array("PI","Piaui");
$mat_uf[18] = array("RJ","Rio de Janeiro");
$mat_uf[19] = array("RN","Rio Grande do Norte");
$mat_uf[20] = array("RS","Rio Grande do Sul");
$mat_uf[21] = array("RO","Rondonia");
$mat_uf[22] = array("RR","Roraima");
$mat_uf[23] = array("SC","Santa Catarina");
$mat_uf[24] = array("SP","Sao Paulo");
$mat_uf[25] = array("SE","Sergipe");
$mat_uf[26] = array("TO","Tocantins");
// Fazendo a leitura do array e mostrando as ocorrencias
$msg = "";
for ($i = 0;$i < count($mat_uf);$i++) {
    // Inicializando a string
    $msg = "Estado: ";
    for($j = 0; $j < count($mat_uf[$i]); $j++) {
        $msg .= $mat_uf[$i][$j];
        // Se for primeira ocorrencia, completa a string com dois-pontos        
        if ($j == 0) {
            $msg .= "-";
        }
    }
    print($msg."\n");
}