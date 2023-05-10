<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>resolução</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="sytle.css">
</head>
<body>
    <main>
        <?php 
        $numero_um = $_GET["primeironumero"];
        $antecessor = $numero_um - "1";
        $sucessor = $numero_um + "1";
        echo "o antecessor de $numero_um é $antecessor e seu sucessor é $sucessor";
        ?>
    </main>
</body>
<p><a href="javascript:history.go(-1)">voltar a página anterior</a></p>
</html>