<?php
  session_start();

  if ( isset($_POST['nomeeleitor'] ) ) {
    if( !is_null($_POST['nomeeleitor'])){
      $nomeeleitor = $_POST['nomeeleitor'];
      if(isset($_POST['branco'])){
        $branco =  array('branco' => 'candidatoum', 
                         'eleitor' => $nomeeleitor);
        $_SESSION['branco'][] = $branco;
      }
      if(isset($_POST['naovotar'])){
        $naovotar =  array('naovotou' => 'candidatoum', 
                           'eleitor' => $nomeeleitor);
        $_SESSION['naovotar'][] = $naovotar;
      }
      if( isset($_POST['primeirocandidato'] ) ) {
        $verificaum = $_SESSION['primeiro'];
        foreach ( $verificaum as $posicao){
          if ( $nomeeleitor === $posicao ){
            $candidatoum = array('candidato' => 'candidatoum', 
                             'eleitor' => $nomeeleitor);
        $_SESSION['primeiro'][] = $candidatoum;
          }
        }
        
      }
      if(isset($_POST['segundocandidato'])){
        $candidatodois =  array('candidato' => 'candidatoum', 
                                'eleitor' => $nomeeleitor);
        $_SESSION['segundo'][] = $candidatodois;
      }
      if(isset($_POST['terceirocandidato'])){
        $candidatotres =  array('candidato' => 'candidatoum', 
                                'eleitor' => $nomeeleitor);
        $_SESSION['terceiro'][] = $candidatotres;
      }
    } 
  } 
  header("location:index.php");
?>