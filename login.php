<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Login</title>
    <style>
    .container{
        padding: 20px;
    }
    h1{
        text-align: center;
    }
</style>
</head>
<body>
<h1>Game Star Shop</h1>
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col"><div class="card">
  <div class="card-header">
   Login
  </div>
  <div class="card-body">
   <form action="autenticar.php" method="post">
       <label class="form-label" for="">Usuario</label>
       <input class="form-control" type="text" name="usuario" id="">
       <label class="form-label" for="">Senha</label>
       <input class="form-control" type="password" name="senha" id="">
       <button class="mt-3 form-control btn btn-primary" type="submit">Login</button>
       <a href="cadastro.php">Novo Usuario</a>
   </form>
  </div>
</div></div>
        <div class="col"></div>
    </div>
</div>
