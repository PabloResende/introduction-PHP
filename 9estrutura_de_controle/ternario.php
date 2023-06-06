<!-- Condição: ternário
O operador ternário ajuda na escrita de condições if/else diminuindo para uma única linha. Ou seja, será algo para ser usado quando você tem uma fácil comparação e um retorno SIMPLES.

O operador ternário leva alguns símbolos para substituir o uso de parênteses e chaves, sendo eles o ? e :

O Sinal de ? sinaliza para o interpretador que tudo que for escrito anteriormente, será a condição a ser executada.

Após o sinal de ? e entre o sinal de : é o que irá retornar se a condição for verdadeira e após o sinal de : é o que irá retornar caso a condição for falsa.

Abaixo alguns exemplos:

Modelos de ternário

condition ? case true : case false; -->

<?php 

$nickname = 'PedrinhoGameplays';

$who = $nickname == "jorge123" ? "é o jorge online" : "não é o jorge online";

echo "$who";

#exemplo dois:

$modoTeste = true;

return $modoTeste ? "MODO DESENVOLVEDOR ATIVADO" : "MODO DE DESENVOLVEDOR DESATIVADO";

?>