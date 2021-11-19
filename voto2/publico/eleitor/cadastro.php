<?php

  include "../config.php";

  include CONTROLE . "eleitor.php";

  if( $_POST['salvar'] ){
    
    if( $_POST['id']){
      alterar( $_POST );
    }
    else{
      inserir( $_POST );
    }
    header('location:../eleitor.php');

  }