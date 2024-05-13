<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>exercicio php</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php 
    // pegar os dados do formulário retro alimentado
    $val1 = $_GET['v1'] ?? 0;
    $val2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']  ?>" method="get">
        <label for="V1">Valor 1</label>
        <input type="number" name="v1" id="v1" value="<?=$val1?>">
        <label for="v2">Valor 2</label>
        <input type="number" name="v2" id="v2" value="<?=$val2?>">
        <input type="submit" value="somar">
        </form>
    </main>  

    <section id= "resultado":>
        <h2>Resultado da Soma:</h2>
        <?php 
        $soma = $val1 + $val2;
        echo "o resultado da soma é $soma";
        ?>
    </section>
</body>
</html>