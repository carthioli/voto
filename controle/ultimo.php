<?php

      function ultimoId( $tabela ){
        
        $link = include "conexao.php";

        $query = pg_query("SELECT MAX(id) as ultimo_id
                           FROM $tabela");
        
        $resultado = pg_fetch_assoc( $query );
        
        if( $resultado ){
          return $resultado['ultimo_id'];
        }
        else{
          return false;
        }

      }

      function ultimoVoto( $tabela ){

        $link = include "conexao.php";

        $query = pg_query("SELECT MAX(id) as ultimo_id
                           FROM $tabela");
        
        $resultado = pg_fetch_assoc( $query );
        
        if( $resultado ){
          return $resultado['ultimo_id'];
        }
        else{
          return false;
        }
        
      }