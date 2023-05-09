<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Tipos Primitivos</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1>testes de tipos primitivos</h1>
    <!-- <h3>velocidade da luz</h3> -->
    <?php 
    $valor = 300;
    $valor = 3e8; //isso é igual 3x10 elevado á 8
    var_dump($valor);
    echo $valor;
    $vet = [1, 2, 3, 1.2, True, 'pablo', 0x1];
    var_dump($vet);

    class Pessoa{
        private string $nome;
    }
    $p = new Pessoa;
    var_dump($p);

    echo "\u{1F418}"
    ?>
</body>
</html>




<!-- 
0x é hexadecimal
ob é binário
0 é Octal
escalares
compostos
especiais 
-->