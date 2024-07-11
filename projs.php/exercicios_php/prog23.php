<?php
// Criando um array associativo
$ass_uf = array();
$ass_uf["AC"] = "Acre";
$ass_uf["AL"] = "Alagoas";
$ass_uf["AP"] = "Amapa";
$ass_uf["AM"] = "Amazonas";
$ass_uf["BA"] = "Bahia";
$ass_uf["CE"] = "Ceara";
$ass_uf["DF"] = "Distrito Federal";
$ass_uf["ES"] = "Espirito Santo";
$ass_uf["GO"] = "Goias";
$ass_uf["MA"] = "Maranhao";
$ass_uf["MT"] = "Mato Grosso";
$ass_uf["MS"] = "Mato Grosso do Sul";
$ass_uf["MG"] = "Minas Gerais";
$ass_uf["PA"] = "Para";
$ass_uf["PB"] = "Paraiba";
$ass_uf["PR"] = "Parana";
$ass_uf["PE"] = "Pernambuco";
$ass_uf["PI"] = "Piaui";
$ass_uf["RJ"] = "Rio de Janeiro";
$ass_uf["RN"] = "Rio Grande do Norte";
$ass_uf["RS"] = "Rio Grande do Sul";
$ass_uf["RO"] = "Rondonia";
$ass_uf["RR"] = "Roraima";
$ass_uf["SC"] = "Santa Catarina";
$ass_uf["SP"] = "Sao Paulo";
$ass_uf["SE"] = "Sergipe";
$ass_uf["TO"] = "Tocantins";
foreach ($ass_uf as $uf => $nome) {
    print($uf."-".$nome."\n");
}
?>