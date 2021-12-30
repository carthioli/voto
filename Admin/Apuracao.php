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
    <div class="grid">
      <div class="grid-item ml-5 mr-5 g1">
        <div id="mostraResult">
          <div id="mostra" class="h-100 ">
          </div>
        </div>
      </div> 
      <div class="grid-item g2 ">
        <div class="container bg-light border-left border-top border-right rounded-top mt-2 col-4 ">
          <h3 class="text-center mt-3 text-body">MAIS VOTADO!</h3>
        </div>  

        <div class="container bg-light border-left border-bottom border-right col-4 candidato">
          <div class="d-flex justify-content-center h-50">
            <img width="70px" height="70px" class="p-1 mt-3 bg-info rounded-circle">
          </div>
          
            <div class="d-flex justify-content-center">
              <div class="row">
                <div class="col-8 ">  
                  <h6 class="text-left text-body ">CANDIDATO(A):</h6><br>
                  <h6 class="text-left text-body ">TOTAL DE VOTOS:</h6>
                </div>
                <div class="col-4 mt-1">
                  <p class="text-body mt-1 text-uppercase" id="nomeMaisVotado">INDEFINIDO</p><br>
                  <p class="text-body mt-1 qntvoto" id="qtdVotosMaisVotado">INDEFINIDO</p>
                </div>  
              </div>
            </div>
            </div>
            <div class="container col-4 mt-3 rounded bg-light border outro">
              <p class="text-center text-body mt-4">OUTROS VOTOS:</p>
                <div class=" mt-3">
                  <div class="row">
                    <div class="text-center col-8 d-flex ">  
                      <h5 class="col-12 text-body mt-4">TOTAL DE VOTOS:</h5>
                      <h3 class="text-body mt-3" id="total">0</h4>
                    </div>
                  </div>
                </div>
            </div>  
            <div class="container rounded-top mt-2 col-3">
              <div class="d-flex justify-content-center mt-2">
                <div class="p-1" id="button">
                  <button type="button" id="verificar" class="btn btn-success text-body">VERIFICAR</button>
                </div>
              </div>     
            </div>  
          </div>
        </div>
  </main>  
    <script src="../javascript/script.js"></script>
</body>
</html>