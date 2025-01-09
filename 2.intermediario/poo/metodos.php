<?php

class Pessoa {
    public function falar() {
        echo "Ola!";
    }

    public function somar($x, $y) {
        return $x + $y;
    }
}

$pessoa = new Pessoa();
echo $pessoa->falar();
echo $pessoa->somar(2, 2);

$matheus = new Pessoa();
$matheus->somar(10, 29);
