<!DOCTYPE html>
<html lang="pt-br">
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Formulário de Autorização de Aluguel </title>

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
      <a class="navbar-brand" href="#">Formulário Aluguel</a>
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

  <h3>Cadastro de aluguel</h3>
  
  <form action="acoes/enviar.php" method="POST" class="needs-validation container" novalidate>

  <div class="row g-12">
	<div class="col-sm-12">
		<div class="form-group">
			<label for="rg">RG dos inquilinos (separado por vírgula e sem pontuação)</label>
			<input type="text" name="rg" class="form-control" required>
		</div>

		<div class="form-group">
			<label for="apartamento">Apartamento:</label>
			<input type="text" name="apartamento" class="form-control" value="<?= $_SESSION['apartamento']; ?>" readonly>
		</div>

		<div class="form-group">
			<label for="inquilinos">Nome dos Inquilinos:</label>
			<input type="text" name="inquilinos" class="form-control" required>
		</div>

		<div class="form-group">
			<label for="data_hora_atual">Data e Hora Atual:</label>
			<input type="text" name="data_hora_atual" class="form-control" value="<?php echo date('d/m/Y'); ?>" readonly>
		</div>

		<div class="form-group">
			<label for="data_inicio_aluguel">Data Início do Aluguel:</label>
			<input class="form-control data_input" type="text" name="data_inicio_aluguel" required>
		</div>

		<div class="form-group">
			<label for="data_fim_aluguel">Data Fim do Aluguel:</label>
			<input class="form-control data_input" type="text" name="data_fim_aluguel" required>
		</div>

		<div class="form-group">
			<label for="tipo_aluguel">Tipo de Aluguel:</label>
			<select name="tipo_aluguel" class="form-control" required>
				<option value="">Selecione</option>
				<option value="Temporada">Temporada</option>
				<option value="Fixo">Fixo</option>
			</select>
		</div>
	</div>
</div>
      </br>
      </br>
      </br>
      </br>
      <button class="w-50 btn btn-primary btn-lg" type="submit">
      Enviar
      </button>
  
  </form>
</div>

<!-- bootstrap.js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/form-validation.js"></script>

</body>
</html>