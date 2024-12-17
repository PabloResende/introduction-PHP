<!-- o break interrompe o laço, ou seja, ele para de executar o que vem depois dele -->

<?php

$x = 0;

while($x < 10) {
    echo "o X é $x <br>";

if($x == 5) {
    echo "parou no 5";
    break; // o break interrompe o while quando o x é igual a 5
}

    $x++;
}

echo $x; 