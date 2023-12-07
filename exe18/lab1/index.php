<?php

    require_once 'lib/httable.php';

    $oTabela = new htmlTable();
    $oTabela->setDados(array(
                         0 => array(
                            0 => 'Guilherme Augusto',
                            1 => 'GuilhermeAug@gmail.com'
                        ),
                        1 => array(
                            0 => 'Douglas',
                            1 => 'Douglas@gmail.com'
                        ))
                       );

    echo $oTabela->renderHtml();
?>