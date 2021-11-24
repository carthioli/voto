<?php

       function verificaDocumento( $documentoeleitor, $tabela ){

        $link = include "conexao.php";

        $documento = $documentoeleitor['titulo'];
        json_encode($documento);
  
        $query = pg_query("SELECT id, documento
                           FROM  $tabela 
                           WHERE documento = '$documento';
                          ");
        
        $resultado = pg_fetch_assoc( $query );
        
        if( $resultado ){
          return $documento;
        }
        else{
          return false;
        }
      }  