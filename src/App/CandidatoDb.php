<?php

    namespace Carlos\Voto\App;

    class CandidatoDb{
        
        public function pega(){

            $link = new Conexao;

            $query = pg_query("SELECT id, nome
                            FROM candidato   
                            ORDER BY 1 ASC");

            $lista = [];

            while( $result = pg_fetch_assoc( $query ) ){

                $lista[] = new Candidato($result['id'], $result['nome']);

            }

         return $lista;

        }

    }

