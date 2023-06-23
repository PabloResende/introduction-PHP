<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>caixa eletrônico</title>
</head>
<body>
    <h1>caixa eletrônico</h1>
    <section>
        <form action="" method="get">
            <label for="saque">Quanto você quer sacar: </label>
            <input type="number" name="saque" id="saque">
        </form>
    </section>
    <?php
    $saque = $_GET['saque'];

    $resto = $saque;

    // saque de 100
    // floor serve para arredondar para baixo
    $tot100 = floor($resto / 100);
    $resto %= 100;

    //  saque de 50
    $tot50 = floor($resto / 50);
    $resto %= 50;

    //  saque de 10
    $tot10 = floor($resto / 10);
    $resto %= 10;

    //  saque de 5
    $tot5 = floor($resto / 5);
    $resto %= 5;

    echo "seu saque é de R\$$saque vai resultar em: $tot100 notas de 100, $tot50 notas de 50, $tot10 notas de 10 e $tot5 notas de 5. Faltou $resto para sacar";
    ?>
</body>
</html>