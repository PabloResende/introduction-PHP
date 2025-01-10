<!-- this é uma palavra reservada que se refere ao proprio objeto intanciado 
 também podemos mudar o valor de uma propriedade com ele $this->propriedade = "x", por exemplo.
-->

<?php 


class Animal {
    public $nome; // a propriedade nome não tem valor declarado

    function escolheNome($nome) {
        $this->nome = $nome;
    }

    function latir() {
        return "au au";
    }

    function latirAuto(){
        return strtoupper($this->latir());
    }
}

$xuxu = new Animal(); // instancia um novo objeto

echo "o nome do animal é {$xuxu->nome}\n"; // aqui ainda não tem nome

$xuxu->escolheNome("Xuxu"); // muda o valor da propriedade nome

echo "o nome do animal é {$xuxu->nome}\n"; // aqui tem nome

echo $xuxu->latir() . "<br>"; //chamo a funcao latir da classe animal 

echo $xuxu->latirAuto(); //chamo a funcao latirAuto da classe animal