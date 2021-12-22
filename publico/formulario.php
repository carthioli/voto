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
      <?php
      foreach( $candidatos as $candidato ):?>
          <div class="container">      
            <div class="p-2 border float-left w-25 ml-5 mt-2">
              <h1 class="d-flex justify-content-center text-body text-uppercase mt-4">
                <?php echo $candidato->nome;?>
              </h1><br/>
              <h4 class="d-flex justify-content-center text-body text-uppercase mt-4">
                <?php
                  echo $candidato->id;
                ?>
              </h4>
              <div class="btn d-flex justify-content-center">
                <button type="button" class="btn btn-success text-white m-1" data-toggle="modal" data-target=".form-voto">VOTAR</button>  
                <div class="modal fade form-voto" class="form-voto" id="candidato" value="<?php echo $candidato->id;?>">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">INFORME O ELEITOR:</h4>
                        <button type="button" class="close">&times;</button>
                      </div>                
                      <div class="modal-body">
                        <form >
                          <input type="text" class="form-control" placeholder="Digite o nome do ELEITOR:" id="nomeeleitor" name="nomeeleitor">
                          <input type="text" class="form-control" placeholder="Digite o TÍTULO do ELEITOR:" name="titulo">
				                  <input type="hidden" id="metodo" value="formulario-ajax" />
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-success" id="finalizar" value="finalizar" data-dismiss="">FINALIZAR</button>
                              <button type="submit" class="btn btn-warning ml-2" id="cancelar">CANCELAR</button>
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
		
		<!-- JAVASCRIPT -->
			<script src="../javascript/script.js"></script>
		<!-- JAVASCRIPT -->
</body>
</html>
