<?php

    function ultimoId($resultado){
      include "conexao.php";

      $query = pg_query("SELECT max(id) as ultimo_id 
                         FROM eleitor
                        ");
      $resultado = pg_fetch_assoc($query);
      
    }
    return ultimoId( );
    
?>