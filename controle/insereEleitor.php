<?php

    function inserirEleitor( $eleitor ){

        try
        {
          $link = include "conexao.php";
          include "ultimo.php";
          
          $inserir = "INSERT INTO eleitor(nome,documento) VALUES ('{$eleitor['nomeeleitor']}','{$eleitor['titulo']}')";
          $inseriu = pg_query($link , $inserir);

          if( pg_affected_rows( $inseriu ) ){
            return ultimoId( "eleitor" );
          }
          else{
            return false;
          }
          
        }
        catch( Exception $e )
        {
          echo $e->getMessage();
        }
        catch( Error $e )
        {
          echo $e->getMessage();
        }
        
    } 
?>
    
                       
