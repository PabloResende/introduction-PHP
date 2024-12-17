<?php

$i = 10;

while($i > 0) {
    echo $i . "<br>";
    
    if($i == 5 || $i == 7) {
        echo "pulou a execução"
        continue;
    } // o continue interrompe o while quando o i é igual a 5 ou 7, e depois continua a execução
    
    echo "continua a execução $i <br>";
    $i--;
}