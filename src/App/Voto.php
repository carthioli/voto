<?php

    namespace Carlos\Voto\App;

    use Carlos\Voto\App\Conexao;
    use Carlos\Voto\App\Eleitor;


    class Voto
    {
        public $id = null;
        public $eleitor = null;

        public function __construct( Eleitor $eleitor)
        {
            $this->eleitor = $eleitor;
        }

        public function insereVoto()
        {
            $link = new Conexao;

            $insert = "INSERT INTO voto( id_eleitor ) VALUES ( '{$this->eleitor->id}' )";
            $inserted = pg_query( $link->conecta(), $insert );

            if( pg_affected_rows( $inserted ) ){
                $this->id = $link->ultimoId('voto');
                return $this;
            }
            else {
                return false;
            }
        }
    }
         