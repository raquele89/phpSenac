<?php

echo "Olá ! Vamos calcular ? Me informe um número:"; 

$numero1 = fgets(STDIN);

echo " Me informe outro número:";

$numero2 = fgets(STDIN);

echo " Vamos lá !";

$soma = $numero1 + $numero2;

echo "Resultado da Soma: $soma";