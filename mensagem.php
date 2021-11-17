<?php

  function mensagens( $erro ){
    switch ( $erro ){
      case 1:
        return "Erro: Informe o CANDIDATO";
        break;
      case 2:
        return "Erro: Informe o ELEITOR VALIDO";
        break;
      case 3:
        return "Erro: Voto já realizado";
        break;
      default:
        return "Erro não catalogado";
        break;      
    }
  }