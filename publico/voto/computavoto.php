<?php

  include "../config.php";
  include CONTROLE . "insereVoto.php";
  include CONTROLE . "insereEleitor.php";
  include CONTROLE . "insereCandidatoVoto.php";
  include CONTROLE . "mensagem.php";

  if( ! isset( $_POST['id_candidato'] ) ){
    header('location:formulario.php?confirma=1');
  }

  if( isset( $_POST['nomeeleitor'] ) && isset( $_POST['titulo'] ) ){

    $eleitor_inserido = inserirEleitor( $_POST );
      if( $eleitor_inserido ){
        $voto = inserirVoto( $eleitor_inserido );
        header('location:formulario.php?confirma=4');
      }else{
        return false;
      }
              
  }else{
    header('location:formulario.php?confirma=1');
  }
  if( isset( $_POST['id_candidato'] ) ){
    if ( $voto ){
      inserirCandidatoVoto( $voto, $_POST );
    }else{
      return false;
    } 
  }
  
  