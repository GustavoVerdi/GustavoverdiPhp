<?php

    require_once 'lib/conexaobd.php';
    require_once 'lib/query.php';

    $connbd = new conexaobd();
    $connbd->setIp('localhost');
    $connbd->setPorta(5432);
    $connbd->setUser('postgres');
    $connbd->setPassword('123456');
    $connbd->setDatabase('local');

    if($connbd->conecta()) {
        echo $connbd->getStatus() . "<br>";
        
        $query = new query($connbd);
        $query->setSql("select * from tbpessoa");
        $query->open();
        while($row = $query->getNextRow()) {
            echo print_r($row) . "<br>";
        }

        $query->update("tbpessoa", "pesnome, pesemail", array("maria", "maria@gmail.com"), "pescodigo = 2");
    }

    $connbd->desconecta();
    echo $connbd->getStatus();
?>