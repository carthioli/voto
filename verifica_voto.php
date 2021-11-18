<?php
  include "conexao.php";

  function verificavoto( $intesao ){
    $query = pg_query("SELECT e.id, e.nome
                     FROM eleitor AS e");               
            
      while ( $queryid = pg_fetch_assoc($query) ){
        if ( isset($_POST['nomeeleitor']) ) {
          $nome = $_POST['nomeeleitor']; 
        
        if ( $queryid['nome'] == $nome){
          echo 'Você já votou';
        }else{
          echo "<pre>";
          echo $queryid['id'];
          echo $queryid['nome'];
        }
        }
      }
  }
  
  
          