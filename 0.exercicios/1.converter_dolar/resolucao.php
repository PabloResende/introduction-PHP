<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>resolução</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        $numero_um = $_GET["primeironumero"];
        $antecessor = $numero_um - "1";
        $sucessor = $numero_um + "1";
        $numero_ramdomico = rand(0, $numero_um);
        echo "o antecessor de $numero_um é $antecessor e seu sucessor é $sucessor<br/>
        um número aleatório entre $numero_um e 0: $numero_ramdomico<br/>
        ";
        ?>
    </main>
</body>
<p><a href="javascript:history.go(-1)">voltar a página anterior</a></p>
</html>