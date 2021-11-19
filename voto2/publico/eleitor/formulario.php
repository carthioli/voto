  <form action="cadastro.php" method="post">
    <input type="hidden" name="id" value="<?php echo @$eleitor['id'] ?>">
    <div>
      <label for="">Nome</label>
      <input type="text" name="nome" value="<?php echo @$eleitor['nome'] ?>"/>      
    </div>
    <div>
      <label for="">Documento</label>
      <input type="text" name="documento" value="<?php echo @$eleitor['documento'] ?>"/>      
    </div>
    <input type="submit" name="salvar" value="salvar"/>
  </form>