<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>anatomia da divisão</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $dividendo = $_GET['dividendo' ?? 0];
    $divisor = $_GET['divisor' ?? 1];
    ?>
    <main>
        <form action="" method="get">
            <label for="dividento">Dividendo: </label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>">
            <label for="divisor">Divisor: </label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>">
            <input type="submit" value="calcular">
        </form>
    </main>
        <?php 
        $quociente = intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;
        ?>
    <table class = divisao>
        <tr>
            <td><?=$dividendo?></td>
            <td><?=$divisor?></td>
        </tr>
        <tr>
            <td><?=$resto?></td>
            <td><?=$quociente?></td>
        </tr>
    </table>
    <a href="javascript:history.go(-1)">voltar a página anterior</a>
</body>
</html>