<!-- Recursividade é um conceito fundamental na programação, onde uma função chama a si mesma para resolver um problema. A ideia central é dividir o problema em subproblemas menores e mais simples até chegar a um caso base, que é a condição onde a função não se chama mais e começa a retornar os resultados.

Como funciona a recursividade?
Uma função recursiva tem duas partes principais:

Caso Base: O caso base é a condição de parada, onde a função não chama mais a si mesma. Sem esse caso, a recursão continuaria infinitamente e causaria um erro de "stack overflow" (excesso de chamadas de função na pilha de execução).

Chamada Recursiva: A função chama a si mesma, geralmente com um argumento modificado, até que o caso base seja atingido.

Vamos entender isso com um exemplo clássico: o cálculo do fatorial de um número.

Exemplo de Fatorial
O fatorial de um número 𝑛 (denotado 𝑛!) é definido como o produto de todos os números inteiros de 1 até 𝑛. A fórmula é a seguinte:

𝑛! = 𝑛 × (𝑛−1)×(𝑛−2)…×1
E o caso base: 0! = 1

exemplo com código: -->

<?php

function fatorial($n) {
    if ($n <= 1) {  // Caso Base
        return 1;
    }
    return $n * fatorial($n - 1);  // Chamada Recursiva
}

// Caso Base: A condição if ($n <= 1) é o caso base. Quando o número chega a 1 ou menor, a função retorna 1 sem fazer mais chamadas recursivas.

// Chamada Recursiva: A função retorna o valor de 𝑛 multiplicado pelo fatorial de n−1. Ou seja, ela chama a si mesma com um valor menor até que o caso base seja atingido.

// Vamos ver o que acontece quando chamamos fatorial(5):
fatorial(5): Não é o caso base, então a função faz a chamada recursiva 5 * fatorial(4).
fatorial(4): Novamente, não é o caso base, então a função faz 4 * fatorial(3).
fatorial(3): A chamada é 3 * fatorial(2).
fatorial(2): A chamada é 2 * fatorial(1).
fatorial(1): Aqui a função atinge o caso base e retorna 1.

// Agora, o processo começa a "desempilhar" as chamadas recursivas:

fatorial(2): Retorna 2 * 1 = 2.
fatorial(3): Retorna 3 * 2 = 6.
fatorial(4): Retorna 4 * 6 = 24.
fatorial(5): Retorna 5 * 24 = 120.
Portanto, fatorial(5) retorna 120.

// Recursividade e a Pilha de Execução
// Quando uma função é chamada, o sistema precisa manter um registro da execução dessa função na pilha de chamadas. Com recursividade, a pilha de chamadas cresce conforme as chamadas vão sendo feitas.

// Por exemplo, ao chamar fatorial(5), a pilha de execução ficaria assim:
fatorial(5)
  fatorial(4)
    fatorial(3)
      fatorial(2)
        fatorial(1)  // Caso base alcançado, começa a retornar
// Cada chamada precisa esperar o resultado da próxima antes de poder continuar, e à medida que o caso base é alcançado, as chamadas vão retornando e a pilha vai "desempilhando".

// Exemplos Comuns de Recursividade:
// Fatorial: Como vimos.

// Sequência de Fibonacci: Cada número da sequência é a soma dos dois números anteriores.
// F(0)=0, 𝐹(1)=1, e 𝐹(𝑛)=𝐹(𝑛−1)+𝐹(𝑛−2).

// Percorrer árvores: Se você tiver uma árvore de dados (como uma árvore binária), pode percorrê-la recursivamente.

// Busca e ordenação: Algoritmos como a Busca Binária e QuickSort utilizam recursão para dividir o problema em subproblemas menores.

// Exemplo de Recursão em Fibonacci:
function fibonacci($n) {
    if ($n <= 1) {  // Caso Base
        return $n;
    }
    return fibonacci($n - 1) + fibonacci($n - 2);  // Chamada Recursiva
}

?>

<!-- Recursão vs. Iteração
Embora a recursão seja uma técnica poderosa, em muitos casos, ela pode ser substituída por iterações (laços como for e while). Por exemplo, o cálculo do fatorial pode ser feito de maneira iterativa sem precisar de chamadas recursivas. A principal diferença é que a recursão tende a consumir mais memória, pois mantém uma pilha de chamadas, enquanto a iteração não.

Porém, a recursão pode ser mais intuitiva e fácil de implementar para alguns problemas, especialmente quando o problema pode ser naturalmente dividido em subproblemas menores (como no caso da busca binária ou na ordenação de dados).-->