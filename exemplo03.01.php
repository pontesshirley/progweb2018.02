<?php
    
    
    //detalhando a superglobal $_GET
    var_dump($_GET);
    
    echo'<br>';

    //efetuando o casting em tempo de execução
    var_dump((int)$_GET);

    echo '<br>';

    //imprimindo o valor pela chave
    echo($_GET['a']);
?>
