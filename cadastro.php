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
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Senha</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Endereço</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Rua , 123, Bairro">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Complemento</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Casa, Bloco e Aparatmento">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Cidade</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-2">
    <label for="inputState" class="form-label">Estado</label>
    <select id="inputState" class="form-select">
      <option selected>AC</option>
      <option selected>AL</option>
      <option selected>AP</option>
      <option selected>AM</option>
      <option selected>BA</option>
      <option selected>CE</option>
      <option selected>DF</option>
      <option selected>ES</option>
      <option selected>GO</option>
      <option selected>MA</option>
      <option selected>MT</option>
      <option selected>MS</option>
      <option selected>MG</option>
      <option selected>PA</option>
      <option selected>PB</option>
      <option selected>PR</option>
      <option selected>PE</option>
      <option selected>PI</option>
      <option selected>RJ</option>
      <option selected>RN</option>
      <option selected>RS</option>
      <option selected>RO</option>
      <option selected>RR</option>
      <option selected>RC</option>
      <option selected>SP</option>
      <option selected>SE</option>
      <option selected>TO</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">CEP</label>
    <input type="text" class="form-control" id="inputZip">
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
<a href="login.php">Voltar</a>