<?php

  include "../config.php";

  include CONTROLE . "insereEleitor.php";
  
    
    if( isset( $_POST['nomeeleitor'] ) && isset( $_POST['titulo'] ) ){

      $eleitor = inserirEleitor( $_POST );
      echo "eleitor: {$eleitor}" . PHP_EOL;

      $voto = insereVoto( $eleitor );
      echo "voto: {$voto}" . PHP_EOL;

      $candidato = insertCandidatoVoto( $voto, $_POST['candidato'] );
      echo "candidato: {$candidato}" . PHP_EOL;      

    }
    
    /*
    if( isset( $_POST['candidato'] ) ){
      $candidato = $_POST['candidato'];
      candidato_voto( $candidato );  
    }
    */