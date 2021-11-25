<?php
  session_start();
  include "..\\controle\\mensagem.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
  <link rel="stylesheet" href="../publico/css/style.css">
  <script src="js/script1.js"></script>

  <title>Cadastros</title>
</head>
<body>

<header>

  <div class="text-center">
    <p class="text-success">
      <?php
              if ( isset( $_SESSION['confirma'] ) ){    
                $mensagem_confirma = mensagensConfirma( $_SESSION['confirma'] );
                echo "{$mensagem_confirma}";
              }
       ?>
    </p>
    <h3>CADASTRO</h3>
  </div>
</header>
<main>
 
    <form method="POST" action="..\controle\insere\insereCandidato.php">  
      <div class=" container col-6 text-center">
        <div class="lineinput">
          <label>NOME:</label>
          <input type="text" id="nome" name="nome" placeholder="Nome:"><br/>
          <label>PARTIDO:</label>
          <input type="text" id="nome" name="id_partido" placeholder="ID do Partido:">
        </div>
        <div class="botaoform">
          <input class="button" type="submit" name="salvar" value="SALVAR">
          
          <a class="button border text-decoration-none text-body bg-light p-1 rounded" href="..\\index.php">VOLTAR</a>    
        </div>
      </div>
    </form> 

</main>      
</body>
</html>