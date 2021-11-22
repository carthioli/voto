<?php

  function ultimoId( $tabela , $campo_id = "id" ){

    $link = conecta();

    $query = "SELECT max({$campo_id}) as ultimo_id FROM {$tabela}";
  
    $resultado = pg_fetch_assoc ( pg_query( $link, $query ) );      
    if( $resultado ){
      return $resultado['ultimo_id'];
    }else{
      return false;
    }

  }

  function conecta(){

    try {
      $link = pg_connect("host=127.0.0.1 port=5432 dbname=eleicao user=postgres password=@1234bf");
      return $link;
    } 
    catch (Exception $e) 
    {
      echo $e->getMessage();
    }
    catch (Erro $e)
    {
      echo $e->getMessage();
    }
   
  }

  return conecta();