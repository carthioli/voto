<?php



function insereVoto( $eleitor ){

  $link = include "conexao.php";

  $inserir = "INSERT INTO voto(id_eleitor) VALUES ('{$eleitor}')";
  $inseriu = pg_query($link , $inserir);

  if( $inseriu ){
    return ultimoId('voto');
  }
  else{
    return false;
  }

}