<?php 

  function mensagens( $erro ){
    
    print_r($erro);

     switch ( $erro ){
       case 1:
         $mensagem = "Erro: Informe o CANDIDATO";
         break;
       case 2:
         $mensagem = "Erro: Informe o ELEITOR VALIDO";
         break;
       case 3:
         $mensagem = "Erro: Voto já realizado";
         break;
       case 4:
         $mensagem = "VOTO REALIZADO COM SUCESSO!";
         break;  
       case 5:
         $mensagem = "REALIZE SEU VOTO!";
         break;  
       default:
         $mensagem = "Erro não catalogado";
         break;  ;      
         
     }
     }
