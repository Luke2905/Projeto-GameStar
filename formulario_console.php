<h2 class="h2titulo">CADASTRO DE CONSOLES</h2>
<div class="cadjg">
<form class="row g-3" method="POST" action="cadastro_console.php">

<div class="col-3">
    <label class="visually-hidden" for="autoSizingInput">Nome</label>
    <input id="cons" type="text" required="required"  name="nome" placeholder="NOME">
</div>
<div class="col-3">
    <label class="visually-hidden" for="autoSizingInput">Marca</label>
    <input id="cons" type="text" required="required"  name="marca" placeholder="Marca">
</div>
<div class="col-3">
    <label class="visually-hidden" for="autoSizingInput">Preço</label>
    <input id="cons"  type="number" required="required"  name="preco" placeholder="Preco">  
</div>
<div class="col-3">
    <label class="visually-hidden" for="autoSizingInput">URL</label>
    <input id="cons"  type="url" required="required"  name="url" placeholder="URL da imagem">
</div>


<div class="col-sm-3">
  <button type="submit" id="a01" class="btn btn-dark" value="cadastrar" name="botao">Cadastrar</button>
</div>

</form>
</div>