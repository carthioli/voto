<?php

    namespace Carlos\Voto\App;

    use Carlos\Voto\Model\Pessoa;
    use Carlos\Voto\App\Conexao;

    class Eleitor extends Pessoa
    {
        public $id = null;
        public $documento = null;

        public function getDocumento(){
            return $this->documento;
        }

        public function __construct( string $nome=null, int $documento=0)
        {
            parent:: __construct( $nome );
            $this->documento = $documento;
            return $this;
        }

        public function insereEleitor()
        {
            $link = new Conexao;
            
            $insert = "INSERT INTO eleitor( nome, numero_documento ) VALUES ( '{$this->nome}', '{$this->documento}' )";
            $inserted = pg_query( $link->conecta(), $insert ); 

            if( pg_affected_rows( $inserted ) ){
                $this->id = $link->ultimoId('eleitor');
                return $this;
            }
            else {
                return false;
            }
         
        } 
    }    