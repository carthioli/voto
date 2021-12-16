<?php

    $query = pg_query("SELECT id, nome 
                       FROM candidato
                      ");

    $candidatos = [];

    while ( $resultado = pg_fetch_assoc( $query ) ){
    $candidatos[] = [
        'id'   => $resultado['id'],
        'nome' => $resultado['nome']
    ];
    }
    
?>