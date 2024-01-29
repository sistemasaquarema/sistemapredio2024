<!DOCTYPE html>
<html lang="pt-br">
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Redefinir Senha </title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
  <!-- Icones -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- fonte personalizada -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  
  <!-- estilo do nosso tema -->
  <link rel="stylesheet" href="assets/css/tema.css" />
  <link rel="stylesheet" href="assets/css/form-validation.css" />
  
</head>
<body>

<!-- barra de navegacao -->
 <nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container">
    <div class="navbar-header">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Redefinir senha</a>
    </div>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav d-flex justify-content-end" id="links">
            <li><a href="index.php">X</a></li>
        </ul>
    </div>
  </div>
</nav>

<!-- container fluido 100% -->
<div class="container-fluid bg1 text-center" id="quem">

  <h3>Cadastre-se</h3>
  
  <form action="acoes/redefinicao.php" method="POST" class="needs-validation container" novalidate onSubmit="return validaCampo()">
  <?php
      $id = $_GET['email'] ?? ''; 
      echo '<input type="hidden" id="idInput" name="email" value="' . $email . '">'; // Insere o valor do ID no campo oculto
    ?>



    <div class="row g-12">

    <div class="col-12">
        <label for="senha" class="form-label">Digite a nova Senha</label>
        <div class="input-group has-validation">
          <input type="password" class="form-control" id="senha" name="senha" placeholder="" required>
        <div class="invalid-feedback">
            Crie uma senha.
          </div>
        </div>
      </div>
      <br>
      <button class="w-100 btn btn-primary btn-lg" type="submit" name="bt_cadastrar">
      Redefinir
      </button>
  
  </form>
</div>

<!-- bootstrap.js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/form-validation.js"></script>
</body>
</html>