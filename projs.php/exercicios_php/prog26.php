<?php
function calcula_troco($valor_passagem, $valor_pago) {
    $valor_troco = $valor_pago - $valor_passagem;
    return $valor_troco;
}
$passagem = 4.5;
$pagamento = 20;
$troco = calcula_troco($passagem, $pagamento);
print("Valor da Passagem: R$ ".number_format($passagem,2,',',".")."\n");
print("Valor Pago.......: R$ ".number_format($pagamento,2,',',".")."\n");
print("Valor do Troco...: R$ ".number_format($troco,2,',',".")."\n");
?>
