<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/usuario.css">
    <title>Página Usuário</title>
</head>
  <body >
    <div class="texto"></div>
      <h1>USUARIO</h1>
    </div>
  <form action="usuario.php" name="menu" class="menu"  method="post" data-toggle="validator">
    <div class="row mb-lg-3">
      <label for="exampleInputEmail1" class="form-label" ></label>
      <input name='chassi' type="text" class="form-control mb-lg-3 "placeholder="CHASI" id="inputName" required> 
    </div>
    <div class="row">
      <label for="exampleInputPassword1 " class="form-label"></label>
      <input name='modelo_carro' type="text" class="form-control mb-lg-3 " placeholder="MODELO DO CARRO" id="inputName"  required>
    </div> 
      <button type="submit" class="btn btb-primary">ENTRAR</button>
  </form>
</body>
<script src="../js/formulario_U.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>