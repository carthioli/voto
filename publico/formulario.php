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
      <p class="text-center mt-5 text-success">
      <?php
        if ( isset( $_SESSION['valida'] ) ){
          echo $mensagem->mensagemValida( $_SESSION['valida'] );
          unset ($_SESSION['valida']);
          unset ($_SESSION['erro']);
        }
      ?>
      </p>
      <p class="text-center mt-5 text-danger">
       <?php
        if ( isset( $_SESSION['erro'] ) ){
          echo $mensagem->mensagemErro( $_SESSION['erro'] );
          unset ($_SESSION['erro']);
          unset ($_SESSION['valida']);
        }
      ?>
      </p>
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
                <button type="button" class="btn btn-success text-white m-1" onclick="enviaFormulario()" data-toggle="modal" data-target="#voto_<?php echo $candidato->id;?>">VOTAR</button>  
                <div class="modal fade"  id="voto_<?php echo $candidato->id;?>">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">INFORME O ELEITOR:</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>                
                      <div class="modal-body">
                        <form method="POST" id="form_candidato_<?php echo $candidato->id;?>"  action="computavoto.php">
                          <input type="hidden" class="form-control" placeholder="Digite o nome do ELEITOR:" name="candidato" value="<?php echo $candidato->id;?>">
                          <input type="text" class="form-control" placeholder="Digite o nome do ELEITOR:" name="nomeeleitor">
                          <input type="text" class="form-control" placeholder="Digite o TÍTULO do ELEITOR:" name="titulo">
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" onclick="enviaFormulario(<?php echo $candidato->id;?>)" class="btn btn-success" name="finalizar" value="finalizar">FINALIZAR</button>
                        <button type="button" class="btn btn-warning ml-2" data-dismiss="modal">CANCELAR</button>
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
