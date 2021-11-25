<?php

       function verificaDuplicado( $documento, $tabela, $coluna ){

        $link = include "conexao.php";
  
        $query = pg_query("SELECT id
                           FROM  {$tabela} 
                           WHERE $coluna = '{$documento}'");
        
        $resultado = pg_fetch_assoc( $query );
        
        if( $resultado ){
          return true;
        }
        else{
          return false;
        }
      }  