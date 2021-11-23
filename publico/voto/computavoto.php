<?php

  include "../config.php";

  include CONTROLE . "insereEleitor.php";
  include CONTROLE . "insereVoto.php";
  include CONTROLE . "insereCandidatoVoto.php";
  include CONTROLE . "ultimoId.php";

  if( isset( $_POST['nomeeleitor'] ) && isset( $_POST['titulo'] ) && isset( $_POST['titulo'] ) ){
    
    $eleitor_inserido = inserirEleitor( $_POST );
                         ultimoId($resultado);
                 $voto = insereVoto();
    $candidato_inserido = insereCandidatoVoto( $_POST );
    
  }
  /*if(  ) ){ 
    
  }*/