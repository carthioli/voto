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
  <style>

  .grid {
  display: grid;
  grid-template-columns: 6fr 6fr 6fr;
  grid-template-areas: "g1 g2 g3";
  height: 550px;
  }
  .g1 {
    grid-area: g1;
  }
  .g2 {
    grid-area: g2;
  }
  .g3 {
    grid-area: g3;
  }
  </style>  
</head>
<body>
  <header>
  </header>
  <main>
  <div class="container-fluid bg-secondary mb-5">
    <h1 class="d-flex justify-content-center text-body">REALIZE SEU VOTO</h1>
  </div>  
  <div class="container-fluid mt-2">
      <div class="grid">
        <div class="grid-item g1 mr-2 bg-secondary rounded h-50">
          <div class="d-flex justify-content-center h-50">
            <img type="image" src="img/candidato1.jpeg" width="120px" height="120px" class="p-1 mt-3 bg-info rounded-circle">
          </div>
          <h1 class="d-flex justify-content-center text-light mt-4">CANDIDATO 1</h1> 
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
                
                    <input type="text" class="form-control" placeholder="Digite o nome do ELEITOR:" name="nomeeleitor" required>
                  </div>
                  <div class="modal-footer">
                      <input type="hidden" name="primeirocandidato">
                      <button type="submit" class="btn btn-success">FINALIZAR</button>
                      <a class="text-decoration-none text-body" href="index.php"><button type="button" class="btn btn-warning ml-2">CANCELAR</button></a>
                      </form> 
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="grid-item g2 mr-2 bg-secondary rounded h-50">   
          <div class="d-flex justify-content-center h-50">
            <img type="image" src="img/candidato2.jpg" width="120px" height="120px" class="p-1 mt-3 bg-info rounded-circle">
          </div>
          <h1 class="d-flex justify-content-center text-light mt-4">CANDIDATO 2</h1> 
            <div class="btn d-flex justify-content-center">
                <button type="button" class="btn btn-success text-white m-1" data-toggle="modal" data-target="#segundovoto">VOTAR</button>  
            <div class="modal fade" id="segundovoto">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">INFORME O ELEITOR:</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>                
                  <div class="modal-body">
                  <form method="POST" action="recebe.php">
                    <input type="text" class="form-control" placeholder="Digite o nome do ELEITOR:" name="nomeeleitor" required>
                  </div>
                  <div class="modal-footer">
                      <input type="hidden" name="segundocandidato">
                      <button type="submit" class="btn btn-success">FINALIZAR</button>
                      <a class="text-decoration-none text-body" href="index.php"><button type="button" class="btn btn-warning ml-2">CANCELAR</button></a>
                    </form>  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="grid-item g3 bg-secondary rounded h-50">
          <div class="d-flex justify-content-center h-50">
            <img type="image" src="img/candidato3.jpg" width="120px" height="120px" class="p-1 mt-3 bg-info rounded-circle">
          </div>
          <h1 class="d-flex justify-content-center text-light mt-4">CANDIDATO 3</h1> 
            <div class="btn d-flex justify-content-center">
                <button type="button" class="btn btn-success text-white m-1" data-toggle="modal" data-target="#terceirovoto">VOTAR</button>  
            <div class="modal fade" id="terceirovoto">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">INFORME O ELEITOR:</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>                
                  <div class="modal-body">
                  <form method="POST" action="recebe.php">
                    <input type="text" class="form-control" placeholder="Digite o nome do ELEITOR:" name="nomeeleitor" required>
                  </div>
                  <div class="modal-footer">
                      <input type="hidden" name="terceirocandidato">
                      <button type="submit" class="btn btn-success">FINALIZAR</button>
                      <a class="text-decoration-none text-body" href="index.php"><button type="button" class="btn btn-warning ml-2">CANCELAR</button></a> 
                    </form>  
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
  </div>  
  <div class="container bg-secondary p-3 border rounded col-3">
    <div class="botaoform d-flex justify-content-center">
        <button type="button" class="btn btn-light border ml-2 mr-2" data-toggle="modal" data-target="#branco">BRANCO</button> 
        <div class="modal fade" id="branco">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content"> 
              <div class="modal-header">
                <h4 class="modal-title">INFORME O ELEITOR: </h4>      
              </div>  
              <div class="modal-body">
                <form method="POST" action="recebe.php">
                  <input type="text" class="form-control" placeholder="Digite o nome do ELEITOR:" name="nomeeleitor" required>  
                </div>
                <div class="modal-footer">  
                  <input type="hidden" name="branco">
                  <button type="submit" class="btn btn-success">FINALIZAR</button>
                  <a class="text-decoration-none text-body" href="index.php"><button type="button" class="btn btn-warning ml-2">CANCELAR</button></a> 
                </form>  
              </div>  
            </div>  
          </div>
        </div>    
        <button type="button" class="btn btn-danger ml-2" data-toggle="modal" data-target="#naovotar">NÃO VOTAR</button> 
        <div class="modal fade" id="naovotar">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">INFORME O ELEITOR: </h4>
              </div>  
              <div class="modal-body">
                <form method="POST" action="recebe.php">
                  <input type="text" class="form-control" placeholder="Digite o nome do ELEITOR:" name="nomeeleitor" required>
              </div>  
              <div class="modal-footer">
                <input type="hidden" name="naovotar">
                <button type="submit" class="btn btn-success">FINALIZAR</button>
                <a class="text-decoration-none text-body" href="index.php"><button type="button" class="btn btn-warning ml-2">CANCELAR</button></a>
              </form>  
              </div>
            </div>  
          </div>   
        </div>   
    </div>  
  </div>    
  </main>  
  <footer>
  </footer>
</body>
</html>