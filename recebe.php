<?php
session_start();

  if ( isset( $_POST['nomeeleitor'] ) ) {
    if ( !is_null( $_POST['nomeeleitor'] ) ){
      $nomeeleitor = $_POST['nomeeleitor'];

      if ( isset( $_POST['primeirocandidato'] ) ) {
        $primeiro = array('candidato' => "candidatoum",
                          'eleitor' => $nomeeleitor );
        $_SESSION['verifica'][] = $nomeeleitor;  
        $verifica = $_SESSION['verifica']; 
        
        foreach ( $verifica as $eleitor ){
          if ( $nomeeleitor == $eleitor ){
            $mensagem = ("Você já votou!");
          } else {
            $_SESSION['primeiro'][] = $primeiro;
              $mensagem = ("Voto realizado com SUCESSO!");
          }
        } 
      }
    
      if ( isset( $_POST['segundocandidato'] ) ) {
        $segundo = array('candidato' => "candidatodois",
                          'eleitor' => $nomeeleitor );
        $_SESSION['verifica'][] = $nomeeleitor;  
        $verifica = $_SESSION['verifica'];         
        $_SESSION['segundo'][] = $segundo;  
      }

      if ( isset( $_POST['terceirocandidato'] ) ) {
        $terceiro = array('candidato' => "candidatotres",
                          'eleitor' => $nomeeleitor );
        $_SESSION['verifica'][] = $nomeeleitor;  
        $verifica = $_SESSION['verifica'];         
        $_SESSION['terceiro'][] = $terceiro;  
      }

      if ( isset( $_POST['branco'] ) ) {
        $branco = array('voto' => "branco",
                        'eleitor' => $nomeeleitor );
        $_SESSION['verifica'][] = $nomeeleitor;  
        $verifica = $_SESSION['verifica'];         
        $_SESSION['branco'][] = $branco;  
      }

      if ( isset( $_POST['naovotar'] ) ) {
        $naovotar = array('voto' => "naovotou",
                          'eleitor' => $nomeeleitor );
        $_SESSION['verifica'][] = $nomeeleitor;  
        $verifica = $_SESSION['verifica'];         
        $_SESSION['naovotar'][] = $naovotar;  
      }
    }
    
    
  $_SESSION['mensagem'] = $mensagem;
  }  
header('location: index.php');
?>