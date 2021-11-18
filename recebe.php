<?php 
    include "conexao.php";

    /*include "verifica_voto.php";*/
    if( isset( $_POST ) && !empty( $_POST['voto'] ) ) {
      
      if ( !empty( $_POST['nomeeleitor'] ) &&
           is_string( $_POST['nomeeleitor']) &&
           !is_numeric( $_POST['nomeeleitor'] ) ){

            $voto         = $_POST['voto'];
            $eleitor      = $_POST['nomeeleitor'];
            $titulo       = $_POST['titulo'];
            
            $salvaeleitor = "INSERT INTO eleitor(nome, documento) VALUES ('{$eleitor}', '{$titulo}')";
            pg_query($link, $salvaeleitor);

            $query = pg_query("SELECT max(e.id), e.id, e.nome
                               FROM eleitor as e
                               GROUP BY e.id, e.nome
                               ORDER BY 1 DESC
                               LIMIT 1");               
            $queryid   = pg_fetch_assoc($query);

            $salvavoto = "INSERT INTO voto(id_eleitor) VALUES ($queryid[id])"; 
            pg_query($link, $salvavoto);
            
            if ( $voto == 'primeirocandidato' ) {
              $salvaprimeiro = "INSERT INTO candidato_voto(id_voto, id_candidato)
                                VALUES ($queryid[id], 1)";
              pg_query($link, $salvaprimeiro);                  
            }
            if ( $voto == 'segundocandidato' ) {
              $salvasegundo = "INSERT INTO candidato_voto(id_voto, id_candidato)
                                VALUES ($queryid[id], 2)";
              pg_query($link, $salvasegundo);                  
            }
            if ( $voto == 'terceirocandidato' ) {
              $salvaterceiro = "INSERT INTO candidato_voto(id_voto, id_candidato)
                                VALUES ($queryid[id], 3)";
              pg_query($link, $salvaterceiro);                  
            }
            if ( $voto == 'branco' ) {
              $branco = "INSERT INTO candidato_voto(id_voto, id_candidato)
                                VALUES ($queryid[id], 4)";
              pg_query($link, $branco);                  
            }
            if ( $voto == 'naovotar' ) {
              $naovotar = "INSERT INTO candidato_voto(id_voto, id_candidato)
                                VALUES ($queryid[id], 5)";
              pg_query($link, $naovotar);              
            }     
      }
    }  
   $queryd=pg_query("DELETE from resultado");
    $query=pg_query("SELECT count(cv.id_candidato) as qnt_voto, cv.id_candidato,
                     ca.nome
                     FROM candidato_voto as cv
                     JOIN candidato as ca on cv.id_candidato = ca.id
                     GROUP BY cv.id_candidato, ca.nome
                     ;");            
    while( $resultado = pg_fetch_assoc($query) ){
      $salvacount = "INSERT INTO resultado(id_candidato, total_votos)
                     VALUES ($resultado[id_candidato],$resultado[qnt_voto])";
      pg_query($link, $salvacount);  
    }  
    
  header('location:index.php');