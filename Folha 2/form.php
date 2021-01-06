<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
</head>
    <form method= "POST" action="teste.php">

        Finalizando Sua Compra

    </br>

    <p> Produto <input type="text" name="tProduto"  id="cProduto" size="25"  maxlength="25" placeholder="Qual o Produto?"/></p>
    <P> Valor    <input type="text"  name="tValor"   id="cValor"   size="25"  maxlength="25"  placeholder="Valor do Produto"/></p>
    <p> Forma de Pagamento <input type="text"  name="tPaga" id="cPaga" size="25"   maxlength="25"   placeholder="À Vista / À Prazo"/></p>
       <input type="submit" value="Comprar">

    </form>
    <?php


error_reporting(0);
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
  </head>
  <body>
  </body>
</html>