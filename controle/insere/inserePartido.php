<?php
  session_start();

    $link = include "conexao.php";

    $inserir = "INSERT INTO partido(nome) VALUES ('{$_POST['nome']}')";
    $inseriu = pg_query( $link, $inserir );

    if( pg_affected_rows( $inseriu ) ){
      
      $_SESSION['insere'] = 3;
    }
    else{
      return false;
    }
    header('location:..\\..\\admin\\cadastraPartido.php');