<?php
    include "..\..\controle\conexao.php";
    include "..\config.php";
    include "..\..\controle\mostraCandidatos.php";
    include "..\..\controle\mensagem.php";
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
  <script src="../javascript/script.js"></script>
  <title>Votação</title>
</head>
<body>
      <div class="container d-flex justify-content-center mt-4">
          <p class="text-success">
            <?php
                if ( $_GET ){
                  if ( isset( $_GET['confirma'] ) ){
                    $mensagem_confirma = mensagens( $_GET['confirma'] );
                    echo "{$mensagem_confirma}";
                  }
                  if ( isset( $_GET['inicio'] ) ){
                    $mensagem_confirma = mensagens( $_GET['inicio'] );
                    echo "{$mensagem_confirma}";
                  }
                }
            ?>
          </p>
      </div>
<?php
      foreach( $candidatos as $candidato ):?>
          <div class="container">      
            <div class="p-2 border float-left w-25 ml-5 mt-3">
              <h1 class="d-flex justify-content-center text-body text-uppercase mt-4">
                <?php 
                  echo $candidato['nome'];
                ?>
              </h1><br/>
              <h4 class="d-flex justify-content-center text-body text-uppercase mt-4">
                <?php
                  echo $candidato['id'];
                ?>
              </h4>
              <div class="btn d-flex justify-content-center">
                
                <button type="button" class="btn btn-success text-white m-1" onclick="enviaFormulario()" data-toggle="modal" data-target="#voto_<?php echo $candidato['id'];?>">VOTAR</button>  
                <div class="modal fade" id="voto_<?php echo $candidato['id'];?>">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">INFORME O ELEITOR:</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>                
                      <div class="modal-body">
                        <form method="POST" id="form_candidato_<?php echo $candidato['id'];?>"  action="computavoto.php">
                          <input type="hidden" name="id_candidato" value="<?php echo $candidato['id'];?>">
                          <input type="text" class="form-control" placeholder="Digite o nome do ELEITOR:" name="nomeeleitor">
                          <input type="text" class="form-control" placeholder="Digite o TÍTULO do ELEITOR:" name="titulo" id="titulo" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}">
                          <!-- <script type="text/javascript">$("#titulo").mask("000.000.000-00");</script> -->
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" onclick="enviaFormulario(<?php echo $candidato['id'];?>)" class="btn btn-success" name="finalizar" value="finalizar">FINALIZAR</button>
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
