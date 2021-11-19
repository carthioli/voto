<?php

    // esperando array com o eleitor a ser inserido
  function inserir( $eleitor ){

    try
    {
      $link = include "conexao.php";

      $inserir = "INSERT INTO eleitor(nome,documento) VALUES ('{$eleitor['nome']}','{$eleitor['documento']}')";
      $inseriu = pg_query($link , $inserir);

    }
    catch( Exception $e )
    {
      echo $e->getMessage();
    }
    catch( Error $e )
    {
      echo $e->getMessage();
    }

  }

  function excluir( $id ){

    $link = include "conexao.php";
    $exclui = "DELETE FROM eleitor WHERE id = {$id}";

    $excluiu = pg_query( $link, $exclui );

  }

  function alterar( $eleitor ){
    
    $link = include "conexao.php";

    $inserir = "UPDATE eleitor SET nome = '{$eleitor['nome']}', documento = '{$eleitor['documento']}' WHERE id ={$eleitor['id']}";
    $inseriu = pg_query($link , $inserir);

  }

  function pegar_todos(){

    $link = include "conexao.php";
    
    $consulta = "SELECT id,nome,documento FROM eleitor";
    $consulta = pg_query( $link , $consulta );
    
    $eleitores = [];
    while( $eleitor = pg_fetch_assoc( $consulta ) ){
      $eleitores[] = $eleitor;
    }
    return $eleitores;

  }

  function pegar( $id ){

    $link = include "conexao.php";
    $consulta = "SELECT id,nome,documento FROM eleitor WHERE id = {$id}";
    $consulta = pg_query( $link , $consulta );

    return pg_fetch_assoc( $consulta );

  }