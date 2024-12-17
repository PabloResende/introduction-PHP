<?php

$x = 0;

while($x < 10) {
    echo "loop externo $x <br>";

$j = 1;

while($j < 10) {
    echo "loop interno $j <br>";
    $j++;
}

$x++;
}