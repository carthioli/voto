<?php

  include "../config.php";

  include CONTROLE . "insereEleitor.php";
  
    
    if( isset( $_POST['nomeeleitor'] ) && isset( $_POST['titulo'] ) ){
      inserirEleitor( $_POST );

    }
    header('location: formulario.php');