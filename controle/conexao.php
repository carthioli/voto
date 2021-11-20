<?php
      try {
          $link= pg_connect("host=127.0.0.1 port=5432 dbname=eleicao user=postgres password=24082015");
      } Catch (Exception $e) {
          Echo $e->getMessage();
      }
?>      