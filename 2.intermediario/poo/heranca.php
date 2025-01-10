<!-- herança é o processo pelo qual uma classe herda propriedades e métodos de outra, com a palavra reservada extends -->

<?php

class Pessoa{
    public $nome = "Pessoa";
    public $idade = 18;
    public function falar(){
        echo "Ola, meu nome é {$this->nome}";
    }

    private function gritar(){
        echo "ua ua ui ua!!";
    }

    protected function andar(){
        echo "estou andando";
    }

    public function getGritar(){
        $this->gritar();
    }

    public function getAndar(){
        $this->andar();
    }
}

class Aluno extends Pessoa{

    public function AndarAluno(){
        $this->Andar();
    } // diferente do private, o protected pode ser herdado pelo filho
}

$joao = new Pessoa();
$joao->falar(); // tem acesso normal as propriedades e métodos da classe Pessoa
$joao->getGritar(); // chama o metodo privado da classe Pessoa mas não pode mudá-lo

$aluno = new Aluno(); 
$aluno->falar(); // através do extends eu tenho acesso aos métodos e propriedades da classe Aluno, só precisa criar uma classe que extende outra
echo $aluno->idade;

$aluno ->AndarAluno(); // dessa forma eu estou acessando o valor protegido da classe Aluno, atráves da classe filha Aluno

