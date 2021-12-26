<?php
    require "../src/App/Apuracao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Apuração</title>
  <style>
    .container{
      height: 50px
    }
    .apura{
      height: 455px;
    }
    .candidato{
      height: 200px
    }
    .outro{
      height: 115px
    }
  </style>  
</head>
<body>
  <header>
  </header>
  <main>
  <div class="container-fluid bg-secondary mb-5">
    <h1 class="d-flex justify-content-center text-body">APURAÇÃO</h1>
  </div>  
  <div class="container bg-secondary p-1 rounded col-6 apura">
    <div class="container bg-dark rounded-top mt-2 col-6">
      <h3 class="text-center mt-3 text-success">MAIS VOTADO!</h3>
    </div>  
    <div class="container bg-dark col-6 candidato">
      <div class="d-flex justify-content-center h-50">
        <img width="70px" height="70px" class="p-1 mt-3 bg-info rounded-circle">
      </div>
        <div class="container">
          <div class="row">
            <div class="col-2">  
              <h6 class="text-left text-white ">NOME DO CANDIDATO:</h6><br>
              <h6 class="text-left text-white ">QUANTIDADE DE VOTOS:</h6>
            </div>
            <div class="col-4 mt-1">
              <p class="text-white mt-1 nomeapuracao"><?php if ( isset($resultado['nome']) ){echo $resultado['nome'];}else{echo "INDEFINIDO";};?>
                                                            </p><br>
              <p class="text-white mt-1 qntvoto"><?php if ( isset($resultado['total_votos']) ){echo $resultado['total_votos'];}else{echo "INDEFINIDO";};?></p>
            </div>  
          </div>
        </div>
    </div>
    <div class="container col-6 mt-3 rounded bg-dark outro">
      <p class="text-center text-danger">OUTROS VOTOS:</p>
        <div class="container mt-3">
          <div class="row">
            <div class="col-2 ">  
              <h6 class="text-left text-white ">VOTOS BRANCO:</h6>
              <h6 class="text-left text-white mt-4">NÃO VOTOU:</h6>
              <h6 class="text-left text-white mt-4">TOTAL DE VOTOS:</h6>
            </div>
            <div class="col-4 mt-1">
              <p class="text-white bncvoto"><?php if ( isset($totalbranco['total_votos']) ){echo $totalbranco['total_votos'];}else{echo "0";}; ?></p>
              <p class="text-white"><?php if ( isset($totalnulo['total_votos']) ){echo $totalnulo['total_votos'];}else{echo "0";}; ?></p>
              <p class="text-white"><?php if ( isset($totalvoto['count']) ){echo $totalvoto['count'];}else{echo "0";}; ?></p>
            </div>  
          </div>
        </div>
    </div>  
    <div class="container d-flex justify-content-center col-6 mt-3">
      <form method="POST" action="apuracao.php">
          <button type="submit" class="btn btn-success text-body" name="atualizar">ATUALIZAR</button>
      </form>
      <form method="POST" action="recomecar.php">
          <button type="submit" class="btn btn-danger text-body" name="recomecar">RECOMEÇAR</button>
      </form>      
    </div>  
  </div>  
  </main>  
  <footer>
  </footer>
</body>
</html>