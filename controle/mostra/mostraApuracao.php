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
                             ORDER BY 1 ASC;");       


   $totalbranco = pg_fetch_assoc($querybranco); 
     $totalnulo = pg_fetch_assoc($querynulo);
     $totalvoto = pg_fetch_assoc($querytotal);  

     $candidatos = [];

     while ( $candidato = pg_fetch_assoc( $querytotalvotos ) ){
        $candidatos[] = [
                 'id' => $candidato['id'],
               'nome' => $candidato['nome'],
              'total' => $candidato['count'] 
        ];
     }