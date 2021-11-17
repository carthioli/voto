<?php
  session_start();
  if ( isset( $_SESSION['voto'] ) ){
      $totalum     = 0;
      $totaldois   = 0;
      $totaltres   = 0;
      $totalbranco = 0;
      $totalnao    = 0;
      $totalvoto   = 0;

      if (isset($_SESSION['voto']['primeirocandidato'])){
      $candidatoum     = $_SESSION['voto']['primeirocandidato'];
      foreach ( $candidatoum as $eleitorum ){
        $totalum = count( $candidatoum );
      } 
      }
      if (isset($_SESSION['voto']['segundocandidato'])){
      $candidatodois   = $_SESSION['voto']['segundocandidato'];
      foreach ( $candidatodois as $eleitordois ){
        $totaldois = count( $candidatodois );
      }
      }
      if (isset($_SESSION['voto']['terceirocandidato'])){
      $candidatotres   = $_SESSION['voto']['terceirocandidato'];
      foreach ( $candidatotres as $eleitortres ){
        $totaltres = count( $candidatotres );
      }
      }
      if (isset($_SESSION['voto']['branco'])){
      $branco          = $_SESSION['voto']['branco'];
      foreach ( $branco as $eleitor){
        $totalbranco = count( $branco );
      }
      }
      if (isset($_SESSION['voto']['naovotar'])){
      $naovotou        = $_SESSION['voto']['naovotar'];
      foreach ( $naovotou as $eleitor){
        $totalnao = count( $naovotou );
      }
      }
      if ($totalum > $totaldois && $totalum > $totaltres){
        $resultado = "Candidato 1";
        $candidatovoto = $totalum;
      }
      if ($totaldois > $totalum && $totaldois > $totaltres){
        $resultado = "Candidato 2";
        $candidatovoto = $totaldois;
      }
      if ($totaltres > $totalum && $totalum > $totaldois){
        $resultado = "Candidato 3";
        $candidatovoto = $totaltres;
      }
      $totalvoto = ($totalbranco + $totalnao + $totalum + $totaldois + $totaltres);
    
  } 
?>