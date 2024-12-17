<h1>introdução a if e elses da vida</h1>

    <?php 
    
    $idade = 15;

    if( $idade >= 18) {
        echo 'maior de idade';
    } else {
        echo 'menor de idade';
    }
    
    $estouLogado = True;

    if( $estouLogado) {
        echo 'estou logado';
    } else {
        echo 'não estou logado';
    }

    $Adimin = 'admin';
    $passAdmin = 123;

    $Admin2 = 'admin2';
    $passAdmin2 = 1234;

    if( $Adimin == 'admin' && $passAdmin == 123) {
        echo 'Bem-vindo' . $Admin;
    } else if( $Admin2 == 'admin2' && $passAdmin2 == 1234) {
        echo 'Bem-vindo' . $Admin2;
    } else {
        echo 'erro ao conectar';
    }
    // também serve 'elseif' junto

    ?>
</body>
</html>