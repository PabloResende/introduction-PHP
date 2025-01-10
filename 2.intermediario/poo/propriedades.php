<?php


class Carro {

    public $cor = "vermelho";
    public $rodas = 4;

    function ligar() {
        echo "O carro esta ligado";
    }
}

$gol = new Carro();
echo $gol->cor . "<br>";
echo $gol->rodas . "<br>";

//pra mudar uma propriedade:
$gol->cor = "azul";
echo $gol->cor;

$gol->ligar();