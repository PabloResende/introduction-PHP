<!-- Condição: coalescência nula
O operador de coalescência nula (??) fornece uma forma conveniente de retornar o valor antes do sinal de ?? caso o valor exista e não seja NULL ou retorna o valor após o sinal de ??.

É especialmente útil quando queremos retornar um valor padrão caso uma chave não exista em um array associativo, pois é um ótimo substituto para o operador ternário ou uma estrutura de if/else nesses casos. -->
<?php 

$descriçãoPorCodigo = array(
    1 => 'este usuário já existe',
    2 => 'senha incorreta',
    3 => 'este usuário está bloqueado',
);

// exemplo utilizando operador ternário:

return isset($descriçãoPorCodigo[5]) ? $descriçãoPorCodigo[5] : 'alguma coisa deu errado';

// jeito mais simplificado de faze-lo:

return isset( $descriçãoPorCodigo[5]) ?? 'alguma coisa deu errado';

?>
