<!-- podemos ter if dentro de if -->
<?php

if( 10 > 3 ) {

    echo "entrou no primeiro if";


    if("teste" == "teste") {
        echo "entrou no segundo if";
    }
}


if( 10 > 3 ) {

    echo "entrou no primeiro if";


    if("teste" != "teste") {
        echo "entrou no segundo if";
    } else {
        echo "não entrou no segundo if";
    }
}


if( 10 < 3 ) {

    echo "entrou no primeiro if";


    if("teste" != "teste") {
        echo "entrou no segundo if";
    } else {
        echo "não entrou no segundo if";
    }
} else {
    echo "não entrou no primeiro else";
} 
