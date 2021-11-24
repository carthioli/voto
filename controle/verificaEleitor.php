<?php

       function verificaDocumento( $documento, $tabela = "eleitor" ){

        $link = include "conexao.php";
  
        $query = pg_query("SELECT id
                           FROM  {$tabela} 
                           WHERE documento = '{$documento}'");
        
        $resultado = pg_fetch_assoc( $query );
        
        if( $resultado ){
          return true;
        }
        else{
          return false;
        }
      }  