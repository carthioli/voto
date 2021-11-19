<?php

  if ( isset($_POST['recomecar'])){
    $cand_voto = pg_query("DELETE FROM candidato_voto");
    $voto      = pg_query("DELETE FROM voto");
    $eleitor   = pg_query("DELETE FROM eleitor");
    $result    = pg_query("DELETE FROM resultado");
  }

  header('location:apuracao.php');