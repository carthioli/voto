<?php
  include "../config.php";
  include CONTROLE . "insereVoto.php";
  include CONTROLE . "insereEleitor.php";
  include CONTROLE . "insereCandidatoVoto.php";
  include CONTROLE . "mensagem.php";

  if( ! isset( $_POST['id_candidato'] ) ){
    header('location:formulario.php');
    $_SESSION['erro'] = 1;
    exit;
  }

  if( isset( $_POST['nomeeleitor'] ) && isset( $_POST['titulo'] ) ){

    $eleitor_inserido = inserirEleitor( $_POST );

      if( $eleitor_inserido ){
        
        $voto = inserirVoto( $eleitor_inserido );
        if ( $voto ){
          if( isset( $_POST['id_candidato'] ) ){
            
            inserirCandidatoVoto( $voto, $_POST ); 

            header('location:formulario.php');
            $_SESSION['confirma'] = 1;
            exit;

          }
          else{
            header('location:formulario.php');
            $_SESSION['erro'] = 1;
            exit;            
          }

        }
        else{
          return false;
        }
      }else{
        return false;
      }
              
  }else{
    header('location:formulario.php');
    $_SESSION['erro'] = 1;
    exit;
  }