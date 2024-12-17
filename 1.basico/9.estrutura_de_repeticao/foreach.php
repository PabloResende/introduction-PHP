<!-- o foreach é uma estrutura de repetição que serve para percorrer um array -->

<?php


$nomes = [
    'Pablo', 
    'joão',
    'maria',
    'pedro',
    'jose',
    'marcos',
    'lucia',];

foreach($nomes as $nome) {

if($nome == 'pedro') {
    echo 'olá';
}

if($nome == 'marcos') {
    echo 'pulei o otário';
    continue;
}

if($nome == 'lucia') {
    break;
}

    echo $nome . "<br>";
} // o foreach vai percorrer todos os nomes do array e mostrar eles na tela


