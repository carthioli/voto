<?php
    require "../header/headerA.php";
?>
    <title>Apuração</title>
</head>
<body>
  <main>
    <div class="container-fluid bg-light border-bottom mb-5">
      <h1 class="d-flex justify-content-center text-body">APURAÇÃO</h1>
    </div>  
    <div class="float-left col-2 ml-5 border">
      <div class="mt-4 w-100" id="mostraResultados">
        <table class="table table-striped table-bordered  w-10">
          <thead>
            <th class="text-center">ID</th>
            <th class="text-center">CANDIDATO</th>
            <th class="text-center">VOTOS</th>
          </thead>
          <tbody id="tbody" class="">

          </tbody>
        </table>
      </div>
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
              <p class="text-body mt-1 text-uppercase" id="nomeMaisVotado">INDEFINIDO</p><br>
              <p class="text-body mt-1 qntvoto" id="qtdVotosMaisVotado">INDEFINIDO</p>
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
              <h4 class="text-body mt-3" id="total">0</h4>
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