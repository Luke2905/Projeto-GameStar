

<h2 class="h2titulo">Deletar Jogos</h2>


  <!-- <div class="col-3">
    <label class="visually-hidden" >Nome</label>
    <input id="jg" type="text" required="required"  name="nome" placeholder="NOME">
</div> -->


<form class="row g-3" method="POST" action="deletar.php">
<label for="jb"></label>
  <select name="id" id="jb">

  <?php


include 'classes/Jgs_DB.php';

$Jgs_DB = new Jgs_DB();
if($Jgs_DB->buscarJogo() == 0){
    echo "<p style='color: white';>Nenhum Jogo cadastrado.</p> ";
} else {
  foreach ($Jgs_DB->buscarJogo() as $resultado){
  echo "<option value='".$resultado['id']."'> ".$resultado['nome']."</option>";
  }
}
?>
  </select>
  <br><br>

  <div class="col-sm-3">
  <button type="submit" class="btn btn-danger" value="deletar" name="botao">Deletar</button>
</div>
</form>