<?php

  include '../config.php';

  include CONTROLE . 'eleitor.php';

?>


<table>
  <tr>
    <td>Eleitor</td>
    <td>Documento</td>
    <td></td>
  </tr>
  <?php 
      foreach( pegar_todos() as $eleitor ){
      ?>
        <tr>
          <td><?php echo $eleitor['nome']?></td>
          <td><?php echo $eleitor['documento']?></td>
          <td>
            <a href="excluir.php?id=<?php echo $eleitor['id'];?>">X</a>
            <a href="editar.php?id=<?php echo $eleitor['id'];?>">editar</a>
          </td>
        </tr>
      <?php
      }
  ?>
</table>

<a href="../eleitor.php">Voltar</a>