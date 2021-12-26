<?php

    namespace Carlos\Voto\Mensagem;

    class Mensagem{
        function mensagemValida( $mensagem )
        {
            switch ( $mensagem )
            {
                case 1:
                    return "VOTO REALIZADO COM SUCESSO!";
                    break;   
            }
        }
        function mensagemErro( $mensagem )
        {
            switch ( $mensagem )
            {
                case 1:
                    return "Ocorreu um problema: Voto não realizado";
                    break;
                case 2:
                    return "Campos obrigatórios não preenciados*";
                    break; 
                case 3:
                    return "Voto já realizado*";
                    break;            
            }
        }
    }
    
?>