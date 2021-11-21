<?php
    $nome = ['Thaysa', 'Thiago', 'Joao'];
    $img1 = header(location:"../img/candidato1.jpeg");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <title>Votação</title>
</head>
<body>
<?php foreach( $nome as $candidato ):?>
        
          <div class="container">      
            <div class="p-2 border float-left ml-5 mt-5">
              <div class="d-flex justify-content-center h-50">
                <img type="image"  width="120px" height="120px" class="p-1 mt-3 rounded-circle"><?= $img1?></img>
              </div>
              <h1 class="d-flex justify-content-center text-body mt-4">CANDIDATO 1</h1>
              <div class="btn d-flex justify-content-center">
                    <button type="button" class="btn btn-success text-white m-1" data-toggle="modal" data-target="#primeirovoto">VOTAR</button>  
                <div class="modal fade" id="primeirovoto">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">INFORME O ELEITOR:</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>                
                      <div class="modal-body">
                      <form method="POST" action="recebe.php">
                        <input type="text" class="form-control" placeholder="Digite o nome do ELEITOR:" name="nomeeleitor">
                        <input type="text" class="form-control" placeholder="Digite o TÍTULO do ELEITOR:" name="titulo">
                      </div>
                      <div class="modal-footer">
                          <input type="hidden" name="voto" value="primeirocandidato">
                          <button type="submit" class="btn btn-success">FINALIZAR</button>
                          <a class="text-decoration-none text-body" href="recebe.php"><button type="button" class="btn btn-warning ml-2">CANCELAR</button></a>
                          </form> 
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
    
    <?php endforeach;?> 
</body>
</html>