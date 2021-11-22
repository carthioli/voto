<?php

    function inserirEleitor( $eleitor ){

        try
        {
          $link = include "conexao.php";
                  include "insereVoto.php";
    
          $inserir = "INSERT INTO eleitor(nome,documento) VALUES ('{$eleitor['nomeeleitor']}','{$eleitor['titulo']}')";
          $inseriu = pg_query($link , $inserir);
          
          ultimoId();
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
    
                       
