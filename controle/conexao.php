<?php

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
  