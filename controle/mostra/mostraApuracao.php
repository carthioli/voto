<?php

    include "..\insere\conexao.php";

    $querybranco = pg_query("SELECT count(id_candidato) AS total_votos, nome
                             FROM candidato_voto AS cv
                             JOIN candidato AS ca ON cv.id_candidato = ca.id 
                             WHERE ca.nome = 'branco'
                             GROUP BY nome");

      $querynulo = pg_query("SELECT count(id_candidato) AS total_votos,nome
                             FROM candidato_voto AS cv
                             JOIN candidato AS ca ON cv.id_candidato = ca.id
                             WHERE ca.nome = 'nulo'
                             GROUP BY nome");

     $querytotal = pg_query("SELECT count(id_candidato)
                             FROM candidato_voto;"); 

$querytotalvotos = pg_query("SELECT ca.id, ca.nome, cv.id_candidato, count(id_candidato)
                             FROM candidato_voto AS cv
                             JOIN candidato AS ca ON cv.id_candidato = ca.id
                             GROUP BY ca.id, ca.nome, cv.id_candidato
                             ORDER BY count DESC;");       

 $querymaiorvoto = pg_query("SELECT id, nome, total_voto
                             FROM resultado
                             GROUP BY id, total_voto, nome
                             HAVING total_voto = (SELECT MAX(total_voto) FROM resultado)
                             ORDER BY id, nome, total_voto");

   $totalbranco = pg_fetch_assoc($querybranco); 
     $totalnulo = pg_fetch_assoc($querynulo);
     $totalvoto = pg_fetch_assoc($querytotal);  
     $resultado = pg_fetch_assoc($querymaiorvoto); 

     $candidatos = [];

     while ( $candidato = pg_fetch_assoc( $querytotalvotos ) ){
        $candidatos[] = [
                 'id' => $candidato['id'],
               'nome' => $candidato['nome'],
              'total' => $candidato['count'] 
        ];
     }