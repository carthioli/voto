<?php

namespace Carlos\Voto\Model;

interface Db
{
    public function conecta();
    public function ultimoId( $tabela );

}