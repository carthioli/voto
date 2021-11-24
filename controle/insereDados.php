<?php

    function inserirCandidatoEleitor( $tabela, $coluna1, $coluna2, $valor1, $valor2, $link ){

        $inserir = "INSERT INTO $tabela($coluna1,$coluna2) VALUES ('{$valor1}','{$valor2}')";
        $inseriu = pg_query($link , $inserir);

    }