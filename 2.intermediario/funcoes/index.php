<!-- Funções são blocos de código que possuem um nome e podem ser utilizadas em diferentes partes do código. Elas podem ser chamadas quantas vezes forem necessárias e executam ações específicas. Nas funções, são passados parâmetros que moldam sua execução. -->

<!-- No PHP, temos três tipos de funções: funções nativas, funções internas e funções personalizadas.
Funções nativas são funções que fazem parte do PHP e podem ser utilizadas diretamente sem necessidade de criação.
Funções internas são funções que também vêm junto com o PHP, mas em algumas documentações podem ser chamadas de funções "prontas", ou seja, são funções já pré-definidas e prontas para uso.
Funções personalizadas são aquelas que o desenvolvedor cria, com base na necessidade do código, e podem ser utilizadas em qualquer parte do programa.

A diferença entre funções nativas e funções internas é que o termo "nativas" geralmente se refere às funções fundamentais do PHP, enquanto "internas" se refere a todas as funções que o PHP oferece (inclusive as nativas), já prontas para uso. Ambas podem ser utilizadas diretamente, sem necessidade de criação, mas a terminologia pode variar conforme o contexto. -->

<?php

// Função Padrão - É uma função simples que recebe dois parâmetros e retorna a soma deles. Essa é a forma mais comum de se criar funções em PHP.
function soma($a, $b) {
    return $a + $b;
}
soma(1, 2);


// Função com Valores Fixos - Dentro dela, os valores são definidos diretamente no código e somados.
function soma2() {
    $a = 2;
    $b = 3;
    return $a + $b;
}
soma2();


// função anonima - Funções anônimas são aquelas que não têm nome e podem ser atribuídas a uma variável. Elas são frequentemente usadas para passar como parâmetros ou retornar de outras funções.
$funcao = function ($a, $b) {
    return $a + $b;
};

$funcao(1, 2);


// Funções dentro de Funções (Closures) - Essas funções são conhecidas como closures, que são funções dentro de outras funções. A função interna pode usar variáveis da função externa, o que torna essa técnica poderosa para certas situações.
function soma3($a, $b) {
    return function ($a, $b) {
        return $a + $b;
    }($a, $b);
}
soma3(1, 2);


// Funcoes recursivas - A função fatorial() é um exemplo clássico de recursividade. Funções recursivas são aquelas que chamam a si mesmas para resolver problemas de forma incremental. No caso do fatorial, a função continua chamando a si mesma até atingir o caso base (quando $n <= 1).
function fatorial($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * fatorial($n - 1);
}

fatorial(5);  // Retorna 120 (5 * 4 * 3 * 2 * 1)
