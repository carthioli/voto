<?php

      function inserirVoto( $id_eleitor ){
        print_r($id_eleitor);
        
        $link = include "conexao.php";

        $inserir = "INSERT INTO voto(id_eleitor) VALUES ('{$id_eleitor}')";
        $inseriu = pg_query( $link, $inserir );
        
        if( $inseriu ){
          return $inseriu;
        }else{
          return false;
        }

        
      }