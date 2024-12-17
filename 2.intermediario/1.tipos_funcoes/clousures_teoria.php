<!-- Uma closure em PHP é uma função dentro de outra função que pode acessar e "lembrar" as variáveis do escopo onde foi criada, mesmo que seja executada em um escopo diferente (ou seja, depois de a função externa já ter terminado sua execução). Em outras palavras, uma closure é uma função que pode capturar o contexto no qual foi criada e usá-lo posteriormente.

Como as Closures Funcionam?
As closures são funções anônimas que podem acessar variáveis fora do seu próprio escopo (no escopo da função onde foram definidas). Isso é possível graças ao conceito de "binding" (vinculação) das variáveis, ou seja, a closure "lembra" dos valores das variáveis do contexto externo no momento em que foi criada, mesmo que a execução da função externa tenha terminado. -->

<!-- Vamos ver um exemplo simples para ilustrar como uma closure funciona em PHP: -->

<?php
function criarSoma($x) {
    return function ($y) use ($x) {
        return $x + $y;
    };
}

$somaCom5 = criarSoma(5);
echo $somaCom5(10); // Imprime 15

// Função Externa (criarSoma): A função criarSoma recebe um parâmetro $x e retorna uma função anônima. Essa função anônima recebe um parâmetro $y e retorna a soma de $x (passado pela função externa) com $y.

// A palavra-chave use: A palavra-chave use é usada para capturar as variáveis do escopo externo (no caso, $x). Isso permite que a função interna (a closure) "lembre" do valor de $x mesmo após a execução de criarSoma() ter terminado.

// Como funciona a captura de variáveis?
// Ao usar a palavra-chave use, você está permitindo que a closure "lembre" de variáveis externas. Existem duas formas de capturar essas variáveis:

//     Captura por valor: O valor da variável externa é copiado para dentro da closure.
//     Captura por referência: A variável é capturada por referência, ou seja, qualquer alteração feita na variável dentro da closure afetará a variável no escopo externo.

// captura por valor:
$valor = 10;
$exemplo = function() use ($valor) {
    echo $valor;  // imprime 10
};
$valor = 20;  // Alteramos o valor externo
$exemplo();   // Ainda imprime 10, pois foi capturado por valor

// captura por referência:
$valor = 10;
$exemplo = function() use (&$valor) {
    echo $valor;  // imprime 10
};
$valor = 20;  // Alteramos o valor externo
$exemplo();   // Imprime 20, pois foi capturado por referência

// Por que usar closures?
// As closures são muito úteis em várias situações, como:

// Funções de Callback: Elas são comumente usadas em funções de callback, onde você passa uma função como parâmetro e ela será chamada em algum momento.

// Encapsulamento de lógica: Elas permitem encapsular lógica de execução sem poluir o escopo global, já que a função pode ser definida e utilizada dentro de um contexto específico.

// Funções de alta ordem: Como uma função pode ser retornada de outra, você pode usar closures para criar funções de alta ordem, passando ou retornando funções dinamicamente.

// Exemplo prático com função de alta ordem:

function aplicarOperacao($a, $b, $operacao) {
    return $operacao($a, $b);
}

$adicao = function($a, $b) { return $a + $b; };
$subtracao = function($a, $b) { return $a - $b; };

echo aplicarOperacao(5, 3, $adicao);     // Imprime 8
echo aplicarOperacao(5, 3, $subtracao);  // Imprime 2
// Aqui, a função aplicarOperacao recebe duas variáveis e uma operação (uma closure). Dependendo da operação fornecida, ela pode executar uma adição, subtração ou outra operação.