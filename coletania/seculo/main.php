<?php

    $ano = $_GET['ano'];    

    function seculoAno($ano){
        $valor = ($ano/100);
        $unidade = strpos( $valor, '.' );

        if ($unidade === false) {
            echo floor($valor);
        } else {
            echo floor($valor)+1;
        }
    };

    echo seculoAno($ano);
?>