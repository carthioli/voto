<?php

    include "conexao.php";

    $query = pg_query("SELECT max(total_votos), total_votos, id_candidato, nome
                       FROM resultado 
                       JOIN candidato on id = resultado.id_candidato
                       GROUP BY total_votos, id_candidato, nome  
                       order by 1 desc
                      ");
    $querybranco=pg_query("SELECT total_votos
                           FROM resultado
                           WHERE id_candidato = 4
                          ");
    $querynulo = pg_query("SELECT total_votos
                           FROM resultado
                           WHERE id_candidato = 5
                          ");
    $querytotal=pg_query("SELECT count(id_candidato) 
                          FROM candidato_voto;");       

    $resultado = pg_fetch_assoc($query); 
    $totalbranco = pg_fetch_assoc($querybranco); 
    $totalnulo = pg_fetch_assoc($querynulo);
    $totalvoto = pg_fetch_assoc($querytotal);  

?>