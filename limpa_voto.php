<?php
    session_start();
    
        $_SESSION['voto'] = null;
        
  header('location: apuracao.php');