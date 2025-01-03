<?php

function countVowels($str) {
    
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    
    $contador = 0;
    
    for ($i = 0; $i < strlen($str); $i++) {
        if(in_array($str[$i], $vowels)) {
            $contador++;
        }
    }
    
    return $contador;
}

echo countVowels('Ola Mundo!');
