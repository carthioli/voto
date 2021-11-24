<?php

      function inserirVoto( $id_eleitor ){
        
        $link = include "conexao.php";

        $inserir = "INSERT INTO voto(id_eleitor) VALUES ('{$id_eleitor}')";
        $inseriu = pg_query( $link, $inserir );
        
        if( $inseriu ){
          return $id_eleitor;
        }else{
          return false;
        }

        
      }