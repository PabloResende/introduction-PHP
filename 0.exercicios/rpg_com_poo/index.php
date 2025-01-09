<?php

// observe que o this é usado só para se referir à alguma propriedade do objeto, como nome, vida, defesa e forca. Porém quando estou me referendo à outro objeto, basta passar sua classe como parâmetro e o nome do objeto que foi instanciado, daquela classe.

class Jogador {
    public $nome;
    public $vida = 100; // O jogador começa com 100 de vida.
    public $defesa = 10; // Valor padrão para reduzir danos recebidos.
    public $forca = 10; // Valor usado para calcular o dano nos inimigos.

    public function atacar(Inimigo $inimigo) {
        $dano = $this->forca - $inimigo->defesa; // Calcula o dano descontando a defesa do inimigo.
        $dano = max(0, $dano); // Garante que o dano nunca seja negativo.
        $inimigo->vida -= $dano; // Reduz a vida do inimigo com base no dano.
        echo "{$this->nome} atacou {$inimigo->nome} causando {$dano} de dano!\n"; // Mensagem de ataque.
    }
}

class Inimigo {
    public $nome;
    public $vida = 50; // O inimigo começa com 50 de vida.
    public $defesa = 1; // Defesa baixa, típico de inimigos fracos.
    public $forca = 2; // Força menor que a do jogador.

    public function atacar (Jogador $guerreiro) {
        $dano = $this->forca - $guerreiro->defesa; 
        $dano = max(0, $dano);
    }
}

$guerreiro = new Jogador(); // Cria um objeto da classe Jogador.
$guerreiro->nome = "Guerreiro"; // Define o nome do jogador.

$inimigo = new Inimigo(); // Cria um objeto da classe Inimigo.
$inimigo->nome = "Goblin"; // Define o nome do inimigo.

echo "Início da batalha entre {$guerreiro->nome} e {$inimigo->nome}!\n"; // Mensagem inicial.

while ($guerreiro->vida > 0 && $inimigo->vida > 0) { // Enquanto ambos estiverem vivos:
    $guerreiro->atacar($inimigo); // O jogador ataca o inimigo.

    if ($inimigo->vida <= 0) { // Verifica se o inimigo morreu.
        echo "{$inimigo->nome} foi derrotado!\n";
        break; // Sai do loop se o inimigo for derrotado.
    }

    $inimigo->atacar($guerreiro); // O inimigo ataca o jogador.

    if ($guerreiro->vida <= 0) { // Verifica se o jogador morreu.
        echo "{$guerreiro->nome} foi derrotado!\n";
        break; // Sai do loop se o jogador for derrotado.
    }

    // Exibe o status atual de vida de ambos.
    echo "{$guerreiro->nome} tem {$guerreiro->vida} de vida.\n";
    echo "{$inimigo->nome} tem {$inimigo->vida} de vida.\n";
}

