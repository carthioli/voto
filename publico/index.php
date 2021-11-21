<?php 
    include "\\..\\controle\\conexao.php";
    $query = pg_query("SELECT id, nome, partido
                       FROM candidato;")
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
    <?php for($i = 0; $i < 3; $i++) : ?>
        <p>100</p>
    <?php endfor;?>
</body>
</html>