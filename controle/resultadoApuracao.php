<?php

    include "conexao.php";

 
    $querybranco = pg_query("SELECT count(id_candidato) as total_votos
                             FROM candidato_voto
                             WHERE id_candidato = 4");

    $querynulo = pg_query("SELECT count(id_candidato) as total_votos
                           FROM candidato_voto
                           WHERE id_candidato = 5");

    $querytotal = pg_query("SELECT count(id_candidato) 
                          FROM candidato_voto;");       

    $totalbranco = pg_fetch_assoc($querybranco); 
    $totalnulo = pg_fetch_assoc($querynulo);
    $totalvoto = pg_fetch_assoc($querytotal);  