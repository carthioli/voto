<?php

  function verificavoto( $intecao ){
    
    $lista = $_SESSION['voto'];

    $votei = false;

    foreach ( $lista as $chave => $tipovoto ) {

      foreach ( $lista[ $chave ] as $voto ){
        if ( $voto == $intecao ){
          $votei = ["votou" => true];
          break;
        }
      }
    }
    return $votei;
  }