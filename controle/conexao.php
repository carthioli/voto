<?php
    
    try {
      $link = pg_connect("host=localhost port=2408 dbname=eleicao user=postgres password=24082015");
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