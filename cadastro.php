<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>cadastro</title>
</style>
</head>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Senha</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-8">
    <label  class="form-label" for="logradouro">Endereço</label>
    <input type="text" class="form-control" id="logradouro" placeholder="Rua" required/>
  </div>
  <div class="col-4">
    <label class="form-label" for="numero">Numero</label>
    <input type="text" class="form-control" id="numero" placeholder="123">
  </div>
  <div class="col-6">
    <label  class="form-label" for="complemento">Complemento</label>
    <input type="text" class="form-control" id="complemento" placeholder="Casa, Bloco e Apartamento">
  </div>
  <div class="col-6">
    <label  class="form-label" for="bairro">Bairro</label>
    <input type="text" class="form-control" id="bairro" placeholder="Bairro" required/>
  </div>
  <div class="col-md-6">
    <label  class="form-label" for="cidade">Cidade</label>
    <input type="text" class="form-control" id="cidade" required/>
  </div>
  <div class="col-md-2">
    <label class="form-label" for="uf">Estado</label>
    <select id="uf" class="form-select">
    <option value="AC">Acre</option>
			<option value="AL">Alagoas</option>
			<option value="AP">Amapá</option>
			<option value="AM">Amazonas</option>
			<option value="BA">Bahia</option>
			<option value="CE">Ceará</option>
			<option value="DF">Distrito Federal</option>
			<option value="ES">Espírito Santo</option>
			<option value="GO">Goiás</option>
			<option value="MA">Maranhão</option>
			<option value="MT">Mato Grosso</option>
			<option value="MS">Mato Grosso do Sul</option>
			<option value="MG">Minas Gerais</option>
			<option value="PA">Pará</option>
			<option value="PB">Paraíba</option>
			<option value="PR">Paraná</option>
			<option value="PE">Pernambuco</option>
			<option value="PI">Piauí</option>
			<option value="RJ">Rio de Janeiro</option>
			<option value="RN">Rio Grande do Norte</option>
			<option value="RS">Rio Grande do Sul</option>
			<option value="RO">Rondônia</option>
			<option value="RR">Roraima</option>
			<option value="SC">Santa Catarina</option>
			<option value="SP">São Paulo</option>
			<option value="SE">Sergipe</option>
			<option value="TO">Tocantins</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label" for="cep">CEP</label>
    <input type="text" class="form-control" id="cep" required/>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
          Lembra depois
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Confirmar</button>
  </div>
</form>
<script type="text/javascript">
		$("#cep").focusout(function(){

			$.ajax({

				url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',

				dataType: 'json',

				success: function(resposta){

					$("#logradouro").val(resposta.logradouro);
					$("#complemento").val(resposta.complemento);
					$("#bairro").val(resposta.bairro);
					$("#cidade").val(resposta.localidade);
					$("#uf").val(resposta.uf);

					$("#numero").focus();
				}
			});
		});
	</script>
<a href="login.php">Voltar</a>