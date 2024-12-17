<!-- loop mais utilizado, porque é melhor e mais limpo 
 
CONDIÇÃO -> CONTADOR -> ENCREMENTO/DECREMENTO
-->

<?php

$cheguei = cheguei;

for($i = 0; $i < 10; $i++) {

    if( i == 5) {
        echo "$cheguei <br>";
    } // quando chegar em 5 eu mostro o valor de $cheguei

    if( $i == 7) {
        echo "pulei <br>";
        continue;
    }

    if( $i == 8) {
        echo "acabou zé<br>";
        break;
    }

    echo $i . "<br>";
}

