<?php

    namespace Carlos\Voto\App;

    use Carlos\Voto\App\Conexao;
    
    class Candidato_voto
    {

        public $id_voto = null;
        public $id_candidato = null;

        public function __construct( $id_voto=null, $id_candidato=null )
        {
            $this->id_voto = $id_voto;
            $this->id_candidato = $id_candidato;
            return $this;
        }
        public function insereCandidatoVoto()
        {
        $link = new Conexao;

        $insert = "INSERT INTO candidato_voto( id_voto, id_candidato ) VALUES ( {$this->id_voto}, {$this->id_candidato} )";
        $inserted = pg_query( $link->conecta(), $insert );   

        if ( pg_affected_rows( $inserted ) ){
            $this->id = $link->ultimoId('eleitor');
            return $this;
        }else{
            return false;
        }
        }
    } 