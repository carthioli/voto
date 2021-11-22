<?php

function ultimoId(){
  include "conexao.php";

  $query = "SELECT max(id) as ultimo_id 
            FROM eleitor";

  $resultado = pg_fetch_assoc ( pg_query( $query ) );
  
  $inserir = "INSERT INTO voto(id_eleitor) VALUES ('{$resultado['ultimo_id']}')";
  $inseriu = pg_query($link , $inserir);

}