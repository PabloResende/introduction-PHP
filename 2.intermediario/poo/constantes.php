<?php


class Humano {

    public const OLHOS = 2;
    public const BOCA = 1;
    public const NARIZ = 1;

    function mostrarConstante(){

        echo self::OLHOS . "<br>"; // uma diferenca entre variavel e constante é o uso do self:: ao invés de $this->
    }
}


$humano = new Humano();

echo Humano::OLHOS . "<br>"; // também tem o uso de ::
echo Humano::BOCA . "<br>";

$humano->mostrarConstante();