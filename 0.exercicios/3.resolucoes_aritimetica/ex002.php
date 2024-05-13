<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>calcular salários mínimos</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="valor">Digite um valor: </label>
        <input type="number" name="valor" id="valor" value= "$valor">
        <input type="submit" value="calcular">
        </form>
    </main>
    <main>
        <?php
           $valor = $_GET['valor'] ?? 0;
            $salario = 1380;
            $resultado = intdiv($valor, $salario);
            $resultado2 = $valor % $salario;
            echo "em $valor cabem $resultado salários mínimos mais $resultado2$";
            ?>
    </main>
</body>
<a href="javascript:history.go(-1)">voltar a página anterior</a>
</html> 