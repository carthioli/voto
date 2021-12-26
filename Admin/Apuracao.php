<?php
  session_start();

    $totalbranco = 0; 
    $totalnao = 0;
    $totalum = 0;
    $totaldois = 0;
    $totaltres = 0;    
    $totalvoto = 0;
    $resultado = "INDEFIRIDO";
    $candidatovoto = "INDEFIRIDO";

    if ( isset( $_SESSION['primeiro'] ) ) {
      $candidatoum = $_SESSION['primeiro'];
      foreach ( $candidatoum as $eleitorum ){
        $totalum = count( $candidatoum );
      }  
    }
    if ( isset( $_SESSION['segundo'] ) ) {
      $candidatodois = $_SESSION['segundo'];
      foreach ( $candidatodois as $eleitordois ){
        $totaldois = count( $candidatodois );
      } 
    }
    if ( isset( $_SESSION['terceiro'] ) ) {
      $candidatotres = $_SESSION['terceiro'];
      foreach ( $candidatotres as $eleitortres ){
        $totaltres = count( $candidatotres );
      } 
    }
    if ( isset( $_SESSION['branco'] ) ) {
      $branco = $_SESSION['branco'];
      foreach ($branco as $eleitorbranco){
        $totalbranco = count($branco);
      }
    }
    if ( isset( $_SESSION['naovotar'] ) ) {
      $naovotar = $_SESSION['naovotar'];
      foreach ($naovotar as $eleitornao){
        $totalnao = count($naovotar);  
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
    
    if ( isset($_POST['recomecar'] ) ) {
      session_destroy();
      echo "<meta HTTP-EQUIV ='refresh' CONTENT='0'>";
    }
    

?>