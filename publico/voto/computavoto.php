<?php

  include "../config.php";

  include CONTROLE . "insereEleitor.php";

    if( isset( $_POST['nomeeleitor'] ) && isset( $_POST['titulo'] ) ){
      inserirEleitor( $_POST );
    }
   /*if( isset( $_POST['id_candidato'] ) ){
      
      recebeCandidato( $_POST );
      
    }*/