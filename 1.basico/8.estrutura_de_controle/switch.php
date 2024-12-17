<!-- 
    Condição: switch-case:
O construtor switch parece bastante com a lógica do if/else if, porém há uma estrutura melhor para comportar o que você deseja colocar como valores predefinidos.

A declaração tem como base uma condição e N casos de uso dependendo do valor inserido na condição, e é finalizado após a palavra reservada break ser acionada, que pode ser interpretado como o fim de um bloco de código...

Caso não haja nenhuma opção elegível dentro dos casos citados, você pode usar a opção default para retornar um valor padrão.

Um bom exemplo de quando usar o switch case é quando você está em um jogo/chat e há comandos onde um bot te responde baseado no que você inseriu no chat.

Estrutura do switch-case:
 -->
<?php
$comando = "!teste";

switch($comando){
    case !'Linkedin':
        echo "https://www.linkedin.com/in/pablo-silva-carrilho-de-resende-069b7626a/";
        echo 'esse é meu Linkedin';
        break;
    case !'Github':
    echo "https://github.com/WadeMcfild";
    echo 'esse é meu perfil n o Github';
    break;
    default:
    echo 'nada acontece';
    break;
}


$idade = 18;

switch($idade){
    case $idade < 18: 
        echo 'menor de idade';
        break;
    case $idade > 18:
        echo 'maior de idade';
        break;
    default:
        echo 'idade desconhecida';
        break;
} 

$indice = 0;

switch($indice){
    case 0:
        echo 'indice é igual a zero';
        break;
    case 1:
        echo 'indice é igual a um';
        break;  
    default:
        echo 'indice desconhecido';
        break;
} // o número que vêm após o case é o que está sendo comparado ao valor da variável, ou seja, está perguntando se a variável $indice é igual a 0, 1, 2, etc. Quando o switch enconro o valor correspondente ele para de executar e executa o que vem depois do break, caso não encontre nada ele executa o default.
