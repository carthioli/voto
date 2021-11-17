<?php 

    session_start();

    include "verifica_voto.php";

    if( isset( $_POST ) && !empty( $_POST['voto'] ) ) {
      
      if ( !empty( $_POST['nomeeleitor'] ) &&
           is_string( $_POST['nomeeleitor']) &&
           !is_numeric( $_POST['nomeeleitor'] ) ){

            $voto         = $_POST['voto'];
            $eleitor      = $_POST['nomeeleitor'];

            $verificavoto = verificavoto( $eleitor );

            if ( ! $verificavoto ) {
              $_SESSION['voto'][ $voto ][] = $eleitor;
              header('location:index.php?confirma=1');
            } else {
              header('location:index.php?erro=3');
            }
      }
      else {
           header('location:index.php?erro=2');
      } 
    }
    else{
        header('location:index.php?erro=1');
    }
    
  
