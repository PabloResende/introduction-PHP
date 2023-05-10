<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="sytle.css">
</head>
<body>
    <main>
        <h1>Conversão para dólar:</h1>
        <?php
        $numero = $_GET["converter"];
        $numero_convertido = $numero / 4.99;
        $numero_formatado = number_format($numero_convertido, 2);
        echo "$numero convertido para dólar é \$$numero_formatado
        <br/><br/>
        (valor fixo de conversão $4,99)";
        ?>
            <p><a href="javascript:history.go(-1)">Voltar a página anterior</a></p>
    </main>
</body>
</html>