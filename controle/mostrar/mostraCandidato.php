<?php

    conectar();

    $query = pg_query("SELECT id, nome
                      FROM candidato   
                      ORDER BY 1 ASC");

    $candidatos = [];

    while ( $resultado = pg_fetch_assoc( $query ) ){
    $candidatos[] = [
      'id'       => $resultado['id'],
      'nome'     => $resultado['nome']
    ];
    }