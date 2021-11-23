<?php

    function ultimoId($resultado){
      include "conexao.php";
      include "insereVoto.php";

      $query = "SELECT max(id) as ultimo_id 
                FROM eleitor";

      $resultado = pg_fetch_assoc ( pg_query( $query ) );

        insereVoto($resultado);
    }

?>