<?php
  session_start();

    $link = include "conexao.php";

    $inserir = "INSERT INTO candidato(nome, id_partido) VALUES ('{$_POST['nome']}', '{$_POST['id_partido']}')";
    $inseriu = pg_query( $link, $inserir );

    if( pg_affected_rows( $inseriu ) ){
      
      $_SESSION['confirma'] = 4;
    }
    else{
      return false;
    }
    header('location:..\\..\\admin\\cadastraCandidato.php');