<?php

echo "Digite o total de segundos: ";
$totalSegundos = trim(fgets(STDIN));


$totalSegundos = (int)$totalSegundos;


$horas = intdiv($totalSegundos, 3600); // 3600 segundos em 1 hora
$resto = $totalSegundos % 3600;


$minutos = intdiv($resto, 60); // 60 segundos em 1 minuto
$segundos = $resto % 60;


echo sprintf("%02d:%02d:%02d\n", $horas, $minutos, $segundos);
?>