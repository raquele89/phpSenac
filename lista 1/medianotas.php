<?php

$notas =[
[ "ANA" , 8,7,9],
["Carlos", 6,8,7],
["Julia" ,9,9,8]


];

foreach ($notas as $aluno){
$nome = $aluno [0];
$media = ($aluno [1]+$aluno[2]+ $aluno[3])/3;

echo "Nome estudante: $nome || Nota: ".round ($media,2) .PHP_EOL;

}