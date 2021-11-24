<?php

  include "../config.php";
  include CONTROLE . "insereVoto.php";
  include CONTROLE . "insereEleitor.php";
  include CONTROLE . "insereCandidatoVoto.php";

  if( isset( $_POST['nomeeleitor'] ) && isset( $_POST['titulo'] ) && isset( $_POST['id_candidato'] ) ){
    
    $eleitor_inserido = inserirEleitor( $_POST );
      if( $eleitor_inserido ){
        $voto = inserirVoto( $eleitor_inserido );
      }else{
        return false;
      }
      if ( $voto ){
        inserirCandidatoVoto( $voto, $_POST );
      }else{
        return false;
      }         
  }
  header('location:formulario.php');