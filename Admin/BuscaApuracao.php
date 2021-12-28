<?php

  require "../vendor/autoload.php";
 
  use Carlos\Voto\App\Apura;                    
    
    if( isset( $_POST['busca'] ) ){
      
      $total = (new Apura)->totalVotos();
      $ultimo = (new Apura)->ultimoMaisVotado();
      $candidatos = (new Apura)->totalVotoCandidatos();

      echo json_encode( array( 'busca' => $total, 'candidatos' => $candidatos, 'ultimoMaisVotado' => $ultimo ) );
    }
?>    