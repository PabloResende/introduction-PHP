<!-- No PHP, public, private e protected definem a visibilidade de propriedades e métodos em uma classe:  

-Public: Pode ser acessado de qualquer lugar (dentro e fora da classe).  
-Private: Pode ser acessado apenas dentro da própria classe.  
-Protected: Pode ser acessado dentro da própria classe e por classes que a herdam. -->

<?php

class Car {
    public $rodas = 4;
    private $vidro = "sem película";
    protected $portas = 4; // não pode ser acessado nem por herança

    public function getVidro() {
        return $this->vidro;
    }

    public function getPorta(){
        return $this->portas;
    }
}

class Mecanico {
    public function trocarRodas($carro){
        $carro->rodas = 6;
    }

    public function trocarvidro($carro, $pelicula){
        $carro->vidro = $pelicula;
    }
}

$carro = new Car();
$mecanico = new Mecanico();
$mecanico->trocarRodas($carro);
echo $carro->rodas;

$mecanico->trocarvidro($carro, "pelicula");// porém dará um erro, pois o vidro é privado

echo $carro->getVidro(); // é possível ver o valor, mas não pode muda-lo
echo $carro->getPorta(); // é possível ver o valor, mas não pode muda-lo

