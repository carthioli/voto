<?php
  session_start();

  require "../config.php";
  require CONTROLE . "conexao.php";
  require CONTROLE . "mostrar/mostraUltimoId.php";
  require CONTROLE . "inserir/inserirPessoa.php";
  require CONTROLE . "inserir/inserirVoto.php";
    
    if( isset( $_POST['nomeeleitor'] ) && isset( $_POST['titulo'] ) ){

      $nomeeleitor = $_POST['nomeeleitor'];
      $titulo = $_POST['titulo'];
      $candidato = $_POST['candidato'];

      if ( !empty( $nomeeleitor ) && !empty( $titulo ) ){

        $eleitor = new Eleitor ( $nomeeleitor, $titulo );
        $eleitor->insereEleitor( array( $eleitor->nome, $eleitor->documento ) );
        
        if ( $eleitor ) {
          $ultimoEleitor = ultimoId( 'eleitor' );
          $voto = new Voto ( $ultimoEleitor );
          $voto->insereVoto( $ultimoEleitor );
          $ultimoVoto = ultimoId( 'voto' );
          $voto->insereCandidatoVoto( $ultimoVoto, $candidato );
        }
        
        header ( 'location: formulario.php' );
        $_SESSION['valida'] = 1;
      }else{
          header ( 'location: formulario.php' );
          $_SESSION['erro'] = 2;        
      }
      
    }else{
      $_SESSION['erro'] = 2;
      header( 'location: formulario.php' );
    }
?>    