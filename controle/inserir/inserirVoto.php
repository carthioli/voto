<?php

    class Voto
    {
        public function __construct( $id=null)
        {
            $this->id = $id;
        }
        public function insereVoto( $eleitor )
        {
            $link = conectar();

            $insert = "INSERT INTO voto( id_eleitor ) VALUES ( '{$eleitor['id']}' )";
            $inserted = pg_query( $link, $insert );

        }   
        public function insereCandidatoVoto( $id_voto, $id_candidato )
        {
            $link = conectar();

            $insert = "INSERT INTO candidato_voto( id_voto, id_candidato ) VALUES ( {$id_voto['id']}, $id_candidato )";
            $inserted = pg_query( $link, $insert );   
        }
    }
    
          