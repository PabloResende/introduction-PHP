<!-- o while será executado enquanto a condição for verdadeira, ou seja, enquanto a expressão for verdadeira. Geralmente é preciso de um contador, para que o while possa parar de ser executado. -->

<?php

$i = 0;

while($i < 10) {
    echo $i . "<br>"; // o $i vai ser 0, 1, 2, 3, 4, 5, 6, 7, 8, 9
    $i++;
} 

echo $i; // o while vai executar 10 vezes, ou seja, $i vai ser 10, pois $i++ vai ser 9, e assim por diante.

