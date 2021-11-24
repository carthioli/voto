<?php

    function inserirCandidatoVoto( $voto ){
  
        $link = include "conexao.php";

        $id_candidato = $_POST['id_candidato'];

        $inserir = "INSERT INTO candidato_voto(id_voto, id_candidato) VALUES ('{$voto}','{$id_candidato}')";
        $inseriu = pg_query( $link, $inserir );
        
        if( $inseriu ){
          return $id_eleitor;
        }else{
          return false;
        }
    }