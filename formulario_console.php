<h2 class="h2titulo">CADASTRO DE CONSOLES</h2>
<div class="cadjg">
<form class="row g-3" method="POST" action="cadastro_console.php">

<div class="col-3">
    <label class="visually-hidden" for="autoSizingInput">Nome</label>
    <input type="text" required="required"  name="nome" placeholder="NOME">
</div>
<div class="col-3">
    <label class="visually-hidden" for="autoSizingInput">Marca</label>
    <input type="text" required="required"  name="marca" placeholder="Genero">
</div>
<div class="col-3">
    <label class="visually-hidden" for="autoSizingInput">Preço</label>
    <input type="number" required="required"  name="preco" placeholder="Preco">  
</div>
<div class="col-3">
    <label class="visually-hidden" for="autoSizingInput">URL</label>
    <input type="url" required="required"  name="url" placeholder="URL da imagem">
</div>


<div class="col-sm-3">
  <button type="submit" id="a01" class="btn btn-dark" value="cadastrar" name="botao">Cadastrar</button>
</div>

</form>
</div>