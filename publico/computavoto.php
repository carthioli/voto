<?php

  session_start();

  require "../vendor/autoload.php";
 
  use Carlos\Voto\App\{ Eleitor, 
                        Conexao, 
                        Voto, 
                        Candidato_voto as CandidatoVoto
                      };
    
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
          header ( 'location: formulario.php' );
          $_SESSION['erro'] = 1;  
        }  
        if ( $voto ) 
        {
          $candidatoVoto = ( new CandidatoVoto ( $voto->id, $candidato ) )->insereCandidatoVoto();
        }
        else
        {
          header ( 'location: formulario.php' );
          $_SESSION['erro'] = 1;  
        }
        if ( $candidatoVoto ) 
        {
          header ( 'location: formulario.php' );
          $_SESSION['valida'] = 1;
        }
        else
        {
          header ( 'location: formulario.php' );
          $_SESSION['erro'] = 1; 
        }
    
      }else{
         header ( 'location: formulario.php' );
         $_SESSION['erro'] = 2;       
      }
      
    }else{
      $_SESSION['erro'] = 2;
      header( 'location: formulario.php' );
    }
?>    