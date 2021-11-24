<?php

      function inserirVoto( $id_eleitor ){
        
        $link = include "conexao.php";

        $inserir = "INSERT INTO voto(id_eleitor) VALUES ('{$id_eleitor}')";
        $inseriu = pg_query( $link, $inserir );
        
        if( pg_affected_rows( $inseriu ) ){
          return ultimoVoto( "Voto" );
        }
        else{
          return false;
        }

        
      }