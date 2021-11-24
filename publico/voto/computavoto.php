<?php

  include "../config.php";

  //include CONTROLE . "insereCandidatoVoto.php";
  include CONTROLE . "insereEleitor.php";
  include CONTROLE . "insereVoto.php";

  if( isset( $_POST['nomeeleitor'] ) && isset( $_POST['titulo'] ) && isset( $_POST['id_candidato'] ) ){
    
    $eleitor_inserido = inserirEleitor( $_POST );

    if ( $eleitor_inserido ){
      return inserirVoto( $eleitor_inserido );
    }else{
      return false;
    }
                
                        
    
    
  }