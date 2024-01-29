<!DOCTYPE html>
<html lang="pt-br">
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Área de aluguel </title>

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
      <a class="navbar-brand" href="#">Área de aluguel</a>
    </div>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav d-flex justify-content-end" id="links">
            <li><a href="painel.php">X</a></li>
        </ul>
    </div>
  </div>
</nav>

<!-- container fluido 100% -->
<div class="container-fluid bg1 text-center cadcurso" id="quem">

  <h3>Aluguel atual</h3>
  	<div class="col-sm-12" style="color: black;">
		<?php
			session_start();
			require_once 'acoes/verifica-logado.php';
			// Conectar ao banco de dados e consultar os aluguéis
			require_once 'acoes/conexao.php';

			$ap = $_SESSION['apartamento'];

			$sql = "SELECT * FROM aluguel where DATE(data_fim_aluguel) >= DATE(NOW()) AND apartamento = $ap AND 'status' = 1";
			$resultado = mysqli_query($con, $sql);

			// Iterar sobre os resultados e criar um card para cada aluguel
			if (mysqli_num_rows($resultado) > 0) {
				foreach ($resultado as $aluguel) {
					echo '<div class="card">';
					echo '<div class="apartamento">Apartamento ' . htmlspecialchars($aluguel["apartamento"]) . '</div>';
					echo '<div class="inquilinos">Inquilinos: ' . htmlspecialchars($aluguel["inquilinos"]) . '</div>';
					echo '<div class="data-aluguel">Alugado de ' . htmlspecialchars($aluguel["data_inicio_aluguel"]) . ' até ' . htmlspecialchars($aluguel["data_fim_aluguel"]) . '</div>';
					echo '<div class="tipo-aluguel">Tipo do aluguel: ' . htmlspecialchars($aluguel["tipo_aluguel"]) . '</div>';
					echo '</div>';
				}
			}else {
				echo '<p><a class="btn btn-primary" href="formulario_aluguel.php">Adicionar inquilino</a></p>';
			}
			// Fechar a conexão com o banco de dados
			mysqli_close($con);
		?>
  	</div>	
	<form action="acoes/excluir_aluguel.php" method="POST">
		<?php  
		if (mysqli_num_rows($resultado) > 0) {
			foreach ($resultado as $aluguel) {
				echo '<input type="hidden" id="id" name="id" value="' . $aluguel['id']  . '">';
			}		
		}		
		?>
	  <button class="w-50 btn btn-primary btn-lg" type="submit" name="bt_excluiinq">
      Excluir inquilino
      </button>
	</form>
</div>

</body>
</html>