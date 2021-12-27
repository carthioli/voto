<?php
    session_start();

    require "../header/header.php";
    require "../vendor/autoload.php";
    
    $mensagem = new \Carlos\Voto\Mensagem\Mensagem;
    $candidatos = ( new \Carlos\Voto\App\CandidatoDb )->pega();
   
?>
  <title>Votação</title>
</head>
<body>
    <div class="container-fluid bg-light border-bottom mb-5">
      <h1 class="d-flex justify-content-center text-body">VOTAÇÃO</h1>
    </div>
      <div class="d-flex justify-content-center" id="mostrar"></div>
      <?php foreach( $candidatos as $candidato ):?>
          <div class="container">      
            <div class="p-2 border float-left w-25 ml-5 mt-2">
              <h1 class="d-flex justify-content-center text-body text-uppercase mt-4">
                <?php echo $candidato->nome;?>
              </h1><br/>
              <h4 class="d-flex justify-content-center text-body text-uppercase mt-4">
                <?php echo $candidato->id;?>
              </h4>

              <div class="btn d-flex justify-content-center">
                <button type="button" class="btn btn-success text-white m-1" data-toggle="modal" onclick="enviar(<?php echo $candidato->id;?>)" data-target="#form">VOTAR</button>  
                <div class="modal fade" id="form">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">INFORME O ELEITOR:</h4>
                        <button type="button" class="close" id="close" data-dismiss="modal">&times;</button>
                      </div>               
                      <div class="modal-body">
                        <form>
                          <input type="hidden" class="form-control" id="candidato" value="<?php echo $candidato->id;?>">
                          <input type="text" class="form-control" placeholder="Digite o nome do ELEITOR:" id="nomeeleitor">
                          <input type="text" class="form-control cpf" placeholder="Digite o TÍTULO do ELEITOR:" id="titulo" name="titulo">
                        </form>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#form-voto" id="confirma">CONFIRMAR</button>
                        <button type="button" class="btn btn-warning ml-2" id="cancelar">CANCELAR</button>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

               <div class="modal fade form_voto" id="form-voto">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">CONFIRMAR VOTO:</h4>
                        <button type="button" class="close" id="close" data-dismiss="modal">&times;</button>
                      </div>               
                      <div class="modal-body">
                          <div id="mostraeleitor"></div>
                          <div id="mostratitulo"></div>
                          <div id="mostracandidato"></div>
                          <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-success" name="finalizar" id="finalizar">FINALIZAR</button>
                            <button type="button" class="btn btn-danger ml-2" data-dismiss="modal">CANCELAR</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach;?>

    
		
			<script src="../javascript/script.js"></script>
		
</body>
</html>
