<?php 

  function mensagens( $erro ){
    
     switch ( $erro ){
       case 1:
         return "ERRO: Informe o CANDIDATO";//OK
         break;
       case 2:
         return "ERRO: Informe o ELEITOR VALIDO";//OK
         break;
       case 3:
         return "ERRO: Voto já realizado";//OK
         break;
       case 4:
         return "VOTO REALIZADO COM SUCESSO!";//OK
         break;  
       case 5:
         return "INICIE A VOTAÇÃO!";//OK
         break;  
       default:
         return "ERRO não catalogado";
         break;      
         
     }
     }
