<?php
    require "../src/App/Apuracao.php";
    require "../vendor/autoload.php";
    require "../header/headerA.php";

    use Carlos\Voto\App\Apura;
    if( isset( $_POST['busca'] ) ){
      echo json_encode(array('busca' => 13 )); 
    }

    $vencedor = (new Apura)->ultimoMaisVotado();
    $candidatos = (new Apura)->totalVotoCandidatos();
    $total = (new Apura)->totalVotos();  
    
?>
    <title>Apuração</title>
</head>
<body>
  <main>
    <div class="container-fluid bg-light border-bottom mb-5">
      <h1 class="d-flex justify-content-center text-body">APURAÇÃO</h1>
    </div>  
    <div class="float-left col-2 ml-5 border">
      <?php foreach( $candidatos as $candidato ):?>
        <div class="d-flex justify-content-center border-bottom mt-3 w-100 ">
          <p class="text-body mt-2 text-uppercase">
            <label class="">Candidato:&nbsp;</label>
            <?php echo $candidato['nome'];?>
            <label class="">Total votos:</label>
            <?php echo $candidato['id_candidato'];?>
          </p>
      </div>
      <?php endforeach;?>
    </div>
    <div class="container bg-light border-left border-top border-right rounded-top mt-2 col-3">
      <h3 class="text-center mt-3 text-body">MAIS VOTADO!</h3>
    </div>  

    <div class="container bg-light border-left border-bottom border-right col-3 candidato">
      <div class="d-flex justify-content-center h-50">
        <img width="70px" height="70px" class="p-1 mt-3 bg-info rounded-circle">
      </div>
      
        <div class="container">
          <div class="row">
            <div class="col-2">  
              <h6 class="text-left text-body ">NOME DO CANDIDATO:</h6><br>
              <h6 class="text-left text-body ">QUANTIDADE DE VOTOS:</h6>
            </div>
            <div class="col-4 mt-1">
              <p class="text-body mt-1 text-uppercase"><?php if ( isset($vencedor['nome']) ){echo $vencedor['nome'];}else{echo "INDEFINIDO";};?>
                                                            </p><br>
              <p class="text-body mt-1 qntvoto"><?php if ( isset($vencedor['id_candidato']) ){echo $vencedor['id_candidato'];}else{echo "INDEFINIDO";};?></p>
            </div>  
          </div>
        </div>
    </div>
    <div class="container col-3 mt-3 rounded bg-light border outro">
      <p class="text-center text-body mt-4">OUTROS VOTOS:</p>
        <div class="container mt-3">
          <div class="row ">
            <div class="col-2 ">  
              <h5 class="text-left text-body mt-4">TOTAL DE VOTOS:</h5>
            </div>
            <div class="col-4">
              <h4 class="text-body mt-3" id="total"><?php if ( isset($total['id_candidato']) ){echo $total['id_candidato'];}else{echo "0";}; ?></h4>
            </div>  
          </div>
        </div>
    </div>  
    <div class="container rounded-top mt-2 col-3">
      <div class="d-flex justify-content-center mt-2">
        <div class="p-1">
          <form>
            <button type="button" id="verificar" class="btn btn-success text-body">VERIFICAR</button>
          </form>
        </div>
      </div>     
    </div>  
  </main>  
  <script src="../javascript/script.js"></script>
  <footer>
  </footer>
</body>
</html>