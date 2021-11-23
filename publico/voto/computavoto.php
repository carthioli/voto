<?php

  include "../config.php";

 // include CONTROLE . "insereCandidatoVoto.php";
  include CONTROLE . "insereEleitor.php";
  include CONTROLE . "insereVoto.php";

  if( isset( $_POST['nomeeleitor'] ) && isset( $_POST['titulo'] ) && isset( $_POST['id_candidato'] ) ){
    
    $eleitor_inserido = inserirEleitor( $_POST );
                        inserirVoto( $eleitor_inserido );

    echo "<pre>";
    print_r( $eleitor_inserido );
    exit;

    //$voto = inserirVoto();
    
  }