<?php

echo "Digite o valor do produto: ";
$valorProduto = trim(fgets(STDIN));


echo "Digite o percentual de desconto (ex: 20 para 20%): ";
$percentualDesconto = trim(fgets(STDIN));


$valorProduto = (float)$valorProduto;
$percentualDesconto = (float)$percentualDesconto;


$valorDesconto = ($valorProduto * $percentualDesconto) / 100;


$precoFinal = $valorProduto - $valorDesconto;

echo "Valor do desconto: R$ " . number_format($valorDesconto, 2, ',', '.') . PHP_EOL;
echo "Preço final após o desconto: R$ " . number_format($precoFinal, 2, ',', '.') . PHP_EOL;

?>