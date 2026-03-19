<?php

echo " Olá ! Vamos Calcular ? Me informe um número:";

$A = fgets(STDIN);

echo " Me informe outro número: ";

$B = fgets(STDIN);

echo " Vamos lá !";

$multiplicação = $A*$B;

$divisão = $A/$B;

echo " Resultado da Multiplicação: $multiplicação\n";

echo " Resultado da Divisão: $divisão";