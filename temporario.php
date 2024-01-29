<html>
<?php
    // INICIAR SESSÃO
    session_start();
    require_once 'acoes/verifica-logado.php';
    require_once 'acoes/conexao.php';
?>
<head>
	<title>Formulário de Autorização de Aluguel</title>
	<style>

	.botao-casa {
		position: absolute;
		top: 10px;
		right: 10px;
		color: #fff;
		font-size: 24px;
		text-decoration: none;
		border-radius: 10px; /* Valor menor para uma forma mais arredondada */
		padding: 10px;
		background-color: #2c3e50;
		box-shadow: 0px 0px 5px #333;
		transition: background-color 0.2s ease-in-out;
	}

.botao-casa:hover {
	background-color: #34495e;
}
		body {
			background-color: green;
		}
		
		form {
			background-color: white;
			padding: 20px;
			border-radius: 10px;
			max-width: 500px;
			margin: 0 auto;
		}
		
		h1 {
			text-align: center;
			color: white;
		}
		
		input[type=text] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
			border: 2px solid #ccc;
			border-radius: 4px;
			background-color: #f8f8f8;
			font-size: 16px;
		}
		
		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
		}
		
		input[type=submit]:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>

	<a href="menu_de_opcoes.php" class="botao-casa">⬅<i class="fas fa-home"></i></a>

	<h1>Formulário de Autorização de Aluguel</h1>
	<form method="post" action="acoes/enviar.php">
		
		<label for="rg">RG dos inquilinos (separado por virgula e sem pontuação)</label>
		<input type="text" name="rg" required><br><br>
		
		<label for="apartamento">Apartamento:</label>
		<input type="text" name="apartamento" value="<?= $_SESSION['apartamento']; ?>" readonly><br><br>
		
		<label for="inquilinos">Nome dos Inquilinos:</label>
		<input type="text" name="inquilinos" required><br><br>
		
		<label for="data_hora_atual">Data e Hora Atual:</label>
		<input type="text" name="data_hora_atual" value="<?php echo date('d/m/Y'); ?>" readonly><br><br>
		
		<label for="data_inicio_aluguel">Data Início do Aluguel:</label>
		<input class="data_input" type="text" name="data_inicio_aluguel" required><br><br>
		
		<label for="data_fim_aluguel">Data Fim do Aluguel:</label>
		<input class="data_input" type="text" name="data_fim_aluguel" required><br><br>

		<label for="tipo_aluguel">Tipo de Aluguel:</label>
			<select name="tipo_aluguel" required>
				<option value="">Selecione</option>
				<option value="Temporada">Temporada</option>
				<option value="Fixo">Fixo</option>
			</select><br><br>

		<input type="submit" value="Enviar">
	</form>
</body>
</html>

<script>
  var camposData = document.querySelectorAll('.data_input');
  camposData.forEach(function(input) {
    input.addEventListener('input', function(event) {
      var inputValue = event.target.value;
      var formattedValue = '';

      // Remova todos os caracteres que não sejam dígitos
      inputValue = inputValue.replace(/\D/g, '');

      // Aplica a máscara de data (dd/mm/aaaa)
      if (inputValue.length > 0) {
        formattedValue = inputValue.substring(0, 2);
      }
      if (inputValue.length > 2) {
        formattedValue += '/' + inputValue.substring(2, 4);
      }
      if (inputValue.length > 4) {
        formattedValue += '/' + inputValue.substring(4, 8);
      }

      // Define o valor formatado de volta para o campo de entrada
      event.target.value = formattedValue;
    });
  });
</script>
