<?php
    require "../src/App/Apuracao.php";
    require "../vendor/autoload.php";

    use Carlos\Voto\App\Apura;

    $vencedor = (new Apura)->vencedor();
    $candidatos = (new Apura)->totalVotoCandidatos();
    $total = (new Apura)->totalVotos();


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
  <link rel="stylesheet" href="../css/style.css">
    <title>Apuração</title>
</head>
<body>
  <header>
  </header>
  <main>
  <div class="container-fluid bg-secondary mb-5">
    <h1 class="d-flex justify-content-center text-body">APURAÇÃO</h1>
  </div>  
  <div class="float-left col-3 h-50 mt-0">
  <?php foreach( $candidatos as $candidato ):?>
    <p class="d-flex justify-content-center text-body text-uppercase mt-0">
      <div class="border w-50 mb-0">
        <label class="mr-5">Candidato:&nbsp;</label>
        <?php echo $candidato['nome'];?>

        <label class="mr-5">Total votos:</label>
        <?php echo $candidato['id_candidato'];?>
      </div>
      
  </p>
  <?php endforeach;?>
  </div>
  <div class="container bg-light border p-1 rounded col-6 apura">
    
    <div class="container bg-secondary rounded-top mt-2 col-6">
      <h3 class="text-center mt-3 text-body">MAIS VOTADO!</h3>
    </div>  
    <div class="container bg-secondary col-6 candidato">
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
              <p class="text-white mt-1 nomeapuracao"><?php if ( isset($vencedor['nome']) ){echo $vencedor['nome'];}else{echo "INDEFINIDO";};?>
                                                            </p><br>
              <p class="text-white mt-1 qntvoto"><?php if ( isset($vencedor['id_candidato']) ){echo $vencedor['id_candidato'];}else{echo "INDEFINIDO";};?></p>
            </div>  
          </div>
        </div>
    </div>
    <div class="container col-6 mt-3 rounded bg-secondary outro">
      <p class="text-center text-body mt-4">OUTROS VOTOS:</p>
        <div class="container mt-3">
          <div class="row ">
            <div class="col-2 ">  
              <h5 class="text-left text-white mt-4">TOTAL DE VOTOS:</h5>
            </div>
            <div class="col-4">
              <h4 class="text-white mt-3"><?php if ( isset($total['id_candidato']) ){echo $total['id_candidato'];}else{echo "0";}; ?></h4>
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