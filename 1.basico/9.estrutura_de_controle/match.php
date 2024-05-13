<!-- Condição: match
O Match é uma novidade do PHP 8, com ela ganhamos uma nova opção para fazer comparações multiplas, além dos classico if e else e do switch, visto anteriomente.

O match apróxima-se bastante do switch, em sua lógica. Onde ele pecorre as opções e retorna a primeira que é compativel com suas condicionais. As diferenças entre eles é sua sintaxe mais elegante e suas operações sempre, são acompanhadas pela comparação com os tipos (===).

Outra vantagem do match, é a relização de operações, entre cenário positivos (Exemplo 02), onde podemos fazer novas comparações, para encontrar um resultado esperado. -->

<?php 

$comando = "!Github";

echo match($comando) {
    "!site" => "https://www.linkedin.com/in/pablo-silva-carrilho-de-resende-069b7626a/",
    "!Github" => "https://github.com/WadeMcfild",
    default  => "não acontece nada"
};

$idade = 18;

$resultado = match(true){
    $idade >= 65 => 'idoso',
    $idade >= 25 => 'jovem adulto',
    $idade >= 15 => 'jovem',
    default => 'criança',
};
echo "$resultado";

?>