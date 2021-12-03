<style>
    .card-body{
        border-style:  solid;
        border-width: 2px;
    }
</style>
<h2 class="h2titulo">CADASTRO DE JOGOS</h2>
<div class="cadjg">
<form class="row g-3" method="POST" action="cadastro_jg.php">

<div class="col-3">
    <label class="visually-hidden" for="autoSizingInput">Nome</label>
    <input id="jg" type="text" required="required"  name="nome" placeholder="NOME">
</div>
<div class="col-3">
    <label class="visually-hidden" for="autoSizingInput">Genero</label>
    <input id="jg" type="text" required="required"  name="genero" placeholder="Genero">
</div>
<div class="col-3">
    <label class="visually-hidden" for="autoSizingInput">Genero</label>
    <input id="jg" type="number" min="0" required="required"  name="classificacao" placeholder="Classificação Etaria" step="any">
</div>
<div class="col-3">
    <label class="visually-hidden" for="autoSizingInput">Preço</label>
    <input id="jg" type="number" min="0" required="required"  name="preco" placeholder="Preco">  
</div>
<div class="col-3">
    <label class="visually-hidden" for="autoSizingInput">URL</label>
    <input id="jg"  type="url" required="required"  name="url" placeholder="URL da imagem">
</div>
<div class="col-sm-3">
  <button type="submit" id="a01" class="btn btn-danger" value="cadastrar" name="botao">Cadastrar</button>
</div>

</form>
</div>

<span class="placeholder col-12"></span>

<h2 class="h2titulo">Deletar Jogos</h2>

<form class="row g-3" method="POST" action="deletar.php">
<?php

include 'Jgs_DB1.php';

$Jgs_DB = new Jgs_DB1();
if($Jgs_DB->buscarJogo() == 0){
    echo "<p style='color: white';>Nenhum Jogo cadastrado.</p> ";
} else {
  foreach ($Jgs_DB->buscarJogo() as $resultado){
  echo "<div id='del' class='col-3'>";
  echo "<label class='visually-hidden' for='autoSizingInput'></label>";
  echo "<input  type='text' readonly  required='required'  name='nome' value='".$resultado['nome']."'>";
  echo "</div>";
  echo "<div class='col-sm-3'>";
  echo "<button type='submit' id='a01' class='btn btn-danger' value='deletar' name='botao'>Deletar</button>";
  echo "</div>";
  }
}
?>
</form>
