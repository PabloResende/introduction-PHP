<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>resultado</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="sytle.css">
</head>
<body>
    <!-- <header>resultado do processamento</header> -->
    <main>
        <?php 
        $nome = $_GET["nome"] ?? "Sem nome";
        $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
        echo "Bem-vindo, <strong>$nome $sobrenome</strong>!";
        //<strong>$nome $sobrenome</strong> o strong serve para
        //deixar em negrito, e é importante fechar o 'strong' para
        //que outras coisas também não fiquem em negrito

        // $_REQUEST é uma junção de $_GET, $_POST e $_COOKIES
        // var_dump($_REQUEST)//isso é uma variável super global que
        // já vêm declarada

        // isset() verifica se uma variável existe
        
        // ?? e o operador de coalescência nula, serve para retornar o valor da variável antes do sinal de ?? caso o valor exista e não seja NULL ou retorna o valor através do sinal de ??
        ?>
        <p><a href="javascript:history.go(-1)">voltar a página anterior</a></p>
    </main>
</body>
</html>