<!DOCTYPE html>
<html lang="pt-br">
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Saquarema - Sugestao </title>

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
      <a class="navbar-brand" href="#">Sugestao</a>
    </div>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav d-flex justify-content-end" id="links">
            <li><a href="painel.php">Voltar</a></li>
        </ul>
    </div>
  </div>
</nav>

<!-- container fluido 100% -->
<div class="container-fluid bg1 text-center cadcurso" id="quem">

  <h3>Envie sua sugestão</h3>
  
  <form action="acoes/cria-sugestao.php" method="POST" class="needs-validation container" novalidate>

    <div class="row g-12">

      <div class="col-sm-12">
        <label for="assunto" class="form-label">Assunto</label>
        <input type="text" class="form-control" id="assunto" name="assunto" placeholder="" value="" autofocus required>
        <div class="invalid-feedback">
          Assunto
        </div>
      </div>


      <div class="col-sm-12">
        <label for="sugestao" class="form-label">Sugestão/Reclamação</label>
        <input type="text" class="form-control1" id="sugestao" name="sugestao" placeholder="" value="" autofocus required>
        <div class="invalid-feedback">
          Sugestão/Reclamação
        </div>
      </div>
      </br>
      </br>
      </br>
      </br>
      <button class="w-100 btn btn-primary btn-lg" type="submit" name="bt_cadastrar">
      Enviar
      </button>
  
  </form>
</div>

<!-- bootstrap.js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/form-validation.js"></script>

</body>
</html>