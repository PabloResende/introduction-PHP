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
?>