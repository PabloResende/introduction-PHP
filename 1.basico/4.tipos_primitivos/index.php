
    <!-- velocidade da luz -->
    
    <?php 
    $valor = 300;
    $valor = 3e8; //isso é igual 3x10 elevado á 8
    var_dump($valor);
    // o var_dump mostra o tipo da variável
    echo $valor;
    $vet = [1, 2, 3, 1.2, True, 'pablo', 0x1];
    var_dump($vet);

    class Pessoa{
        private string $nome;
        // private string serve para dizer que essa variável é privada, o que significa que ela não pode ser acessada fora da classe
    }
    $p = new Pessoa;
    var_dump($p);
    // o new Pessoa é para criar um novo objeto, e o var_dump mostra o tipo da variável

    echo "\u{1F418}"
    ?>


<!-- 
0x é hexadecimal
ob é binário
0 é Octal
escalares
compostos
especiais 
-->