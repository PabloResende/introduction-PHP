<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PHP</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
   <h1>exemplo de php</h1>
   <?php 
    date_default_timezone_set("America/Sao_Paulo");
    echo "hoje é ". date("d:m:Y");
     //D maiúsculo para dia da semana e minúsculo para dia mês, quase o mesmo vale para 'm' e 'y'
    echo "e a hora é ". date("g:i:s");//GMT-3 é o código da 
    //'TimeZone' do Brasil, para checar isso usa se o T separado na hora
   ?>
</body>
</html>