<?php

  session_start();

  require "../vendor/autoload.php";
 
  use Carlos\Voto\App\{ 
                        Eleitor, 
                        Conexao, 
                        Voto, 
                        Candidato_voto as CandidatoVoto
                      };
  use Carlos\Voto\Mensagem\{Mensagem};                    
    
    if( isset( $_POST['nome'] ) && isset( $_POST['titulo'] ) ){

      $nomeeleitor = $_POST['nome'];
      $titulo = $_POST['titulo'];
      $candidato = $_POST['candidato'];

      if ( !empty( $nomeeleitor ) && !empty( $titulo ) ){

        $eleitor = (new Eleitor ( $nomeeleitor, $titulo ))->insereEleitor();
        
        if ( $eleitor ) 
        {
          $voto = ( new Voto ( $eleitor ) )->insereVoto();
        }
        else
        {
          $msg = (new Mensagem)->mensagemErro(1);
          echo $msg;
          exit;
        }  
        if ( $voto ) 
        {
          $candidatoVoto = ( new CandidatoVoto ( $voto->id, $candidato ) )->insereCandidatoVoto();
        }
        else
        {
          $msg = (new Mensagem)->mensagemErro(1);
          echo $msg;
        }
        if ( $candidatoVoto ) 
        {
          $msg = (new Mensagem)->mensagemValida(1);
          echo $msg;
        }
        else
        {
          $msg = (new Mensagem)->mensagemErro(1);
          echo $msg;
        }
    
      }else{
        $msg = (new Mensagem)->mensagemErro(2);
        echo $msg;
      }
      
    }else{
      $msg = (new Mensagem)->mensagemErro(2);
      echo $msg;
    }
?>    