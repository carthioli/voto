<?php

    function ultimoId( $tabela )
    {
        $query = pg_query("SELECT id
                           FROM $tabela
                           ORDER BY 1 DESC");
        $result = pg_fetch_assoc( $query );

        return $result;
    }