<?php

    namespace Carlos\Voto\App;

    class Candidato
    {
        public $id = null;
        public $nome = null;

        public function __construct(int $id, string $nome){
            $this->id = $id;
            $this->nome = $nome;
        }  
    }
