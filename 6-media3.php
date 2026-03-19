<?php

echo "Digite o primeiro número: ";
$numero1 = trim(fgets(STDIN));

echo "Digite o segundo número: ";
$numero2 = trim(fgets(STDIN));

echo "Digite o terceiro número: ";
$numero3 = trim(fgets(STDIN));


$numero1 = (float)$numero1;
$numero2 = (float)$numero2;
$numero3 = (float)$numero3;


$media = ($numero1 + $numero2 + $numero3) / 3;


echo "A média aritmética dos números é: " . $media . PHP_EOL;
?>