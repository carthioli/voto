<?php

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
        }
    }
?>