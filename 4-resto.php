<?php

echo " Olá ! Vamos Calcular ? Me informe um número:";

$A = fgets(STDIN);

echo " Me informe outro número: ";

$B = fgets(STDIN);

echo " Vamos lá !";

$resto = $A%$B;

echo " Resultado do Resto: $resto";