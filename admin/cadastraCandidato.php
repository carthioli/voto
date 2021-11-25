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

  <div class="text-center border">
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
      <div class=" container col-3 d-flex justify-content-center mt-5 border p-3">
          <div class="float-left">     
          <label>NOME:</label><br/><br/>
          <label>PARTIDO:</label>
          </div>
          <div class="float-left ml-5">
          <input type="text" id="nome" name="nome" placeholder="Nome:"><br/><br/>
          <input type="text" id="nome" name="id_partido" placeholder="ID do Partido:"><br/>
          </div>
      </div>   
      <div class=" container col-3 d-flex justify-content-center">     
          <div class="botaoform float-left mt-5">
          <input class="button" type="submit" name="salvar" value="SALVAR">
          
          <a class="button border text-decoration-none text-body bg-light p-1 rounded" href="..\\index.php">VOLTAR</a>    
        </div>
            </div>
    </form> 

</main>      
</body>
</html>