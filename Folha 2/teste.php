<?php

$Produto = $_POST ["tProduto"];
$Valor = $_POST ["tValor"];
$PProdutoagamento = $_POST ["tPaga"];
$Desconto = ($Valor * 0.05);
$Juros = $Valor * 0.02;
$juros = $Valor + $Juros;

echo "Sua compra:".$Produto;
echo "</br>";
echo "Valor: $Valor Reais";


 if ($PProdutoagamento=="À Vista"):
 echo "</br>";
 echo "Forma de Pagamento: $PProdutoagamento";
 echo "</br>";
 echo "Desconto: $Desconto";
 endif;

  if ($PProdutoagamento=="À Prazo"):
    echo "</br>";
    echo "Juros: $juros";
  endif;

  ?>