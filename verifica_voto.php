<?php
  include "conexao.php";

  function verificavoto( $intesao ){
    
  }
  $query = pg_query("SELECT  e.id, e.nome
                               FROM eleitor as e
                               GROUP BY e.id, e.nome");               
            $queryid   = pg_fetch_assoc($query);
            echo $queryid['nome'];