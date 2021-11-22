<?php


function insertCandidatoVoto($voto , $candidato){

  $link = include "conexao.php";

  $inserir = "INSERT INTO candidato_voto(id_voto, id_candidato) VALUES ('{$voto}','{$candidato})";
  $inseriu = pg_query($link , $inserir);

  if( $inseriu ){
    return ultimoId('candidato_voto');
  }
  else{
    return false;
  }

}