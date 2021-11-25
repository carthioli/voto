<?php

    session_start();

    function inserirEleitor( $eleitor ){

        try
        {
          $link = include "conexao.php";
                  include "ultimo.php";
                  include "verificaDuplicado.php";

          if ( ! empty( $eleitor['nomeeleitor'] ) && ! is_numeric( $eleitor['nomeeleitor'] ) && ! empty( $eleitor['titulo'] ) && is_numeric( $eleitor['titulo'] ) ){

            $verificaDocumento = verificaDuplicado( $_POST['titulo'], "eleitor", "documento" );

            if( ! $verificaDocumento ){
              $inserir = "INSERT INTO eleitor(nome,documento) VALUES ('{$eleitor['nomeeleitor']}','{$eleitor['titulo']}')";
              $inseriu = pg_query($link , $inserir);
  
              if( pg_affected_rows( $inseriu ) ){
                return ultimoId( "eleitor" );
              }
              else{
                return false;
              }
            }
            else
            {  
              header('location:formulario.php');
              $_SESSION['erro'] = 3;
            }
          }else{
            header('location:formulario.php');
            $_SESSION['erro'] = 2;
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
    
                       
