<!-- Objetos são possuem métodos que são suas ações e propriedades que são seus atributos -->

<?php

class Pessoa { // aqui estou criando um molde
    public function falar(){ // esse molde tem uma função
        echo "Olá, pessoal!";
    }
}

$pedro = new Pessoa(); // aqui eu crio uma nova pessoa

$pedro->nome='Pedro'; // aqui eu adiciono um atributo ao novo objeto

echo $pedro->nome; // aqui eu acesso o atributo

$pedro->falar(); // aqui eu chamo a função