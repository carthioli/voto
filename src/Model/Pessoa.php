<?php

    namespace Carlos\Voto\Model;
    
    class Pessoa
    {
        public $nome;
        public function __construct( string $nome=null)
        {
            $this->nome = $nome;
        }
    }

?>