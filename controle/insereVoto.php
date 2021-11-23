<?php

  function insereVoto($resultado){
    include "conexao.php";
    include "insereCandidatoVoto.php";
    
    $inserir = "INSERT INTO voto(id_eleitor) VALUES ('{$resultado['ultimo_id']}')";
    $inseriu = pg_query($link , $inserir);

    
  }