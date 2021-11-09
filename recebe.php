<?php
  session_start();

  if ( isset($_POST['nomeeleitor'] ) ) {
    if( !is_null($_POST['nomeeleitor'])){
      $nomeeleitor = $_POST['nomeeleitor'];
      if(isset($_POST['branco'])){
        $branco =  array('branco' => 'candidatoum', 
                         'eleitor' => $nomeeleitor);
        $_SESSION['branco'][] = $branco;
        header("location:index.php");
      }
      if(isset($_POST['naovotar'])){
        $naovotar =  array('naovotou' => 'candidatoum', 
                           'eleitor' => $nomeeleitor);
        $_SESSION['naovotar'][] = $naovotar;
        header("location:index.php");
      }
      if( isset($_POST['primeirocandidato'] ) ) {
       
        $candidatoum = array('candidato' => 'candidatoum', 
                             'eleitor' => $nomeeleitor);        
        $_SESSION['primeiro'][] = $candidatoum;
        header("location:index.php");
      }
      if(isset($_POST['segundocandidato'])){
        $candidatodois =  array('candidato' => 'candidatodois', 
                                'eleitor' => $nomeeleitor);
        $_SESSION['segundo'][] = $candidatodois;
        header("location:index.php");
      }
      if(isset($_POST['terceirocandidato'])){
        $candidatotres =  array('candidato' => 'candidatotres', 
                                'eleitor' => $nomeeleitor);
        $_SESSION['terceiro'][] = $candidatotres;
        header("location:index.php");
      }
    } 
  } 
?>