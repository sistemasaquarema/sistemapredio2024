<html>
<head>
	<title>Lista de Aluguéis</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-1O+LMF7sIyHj6TrlUg0Cf6pehaSDXZzI2Zr+YMXdJ/yckSVU4BBh2x4N4L12j51g+XdL14aJGpOZ9Kj5O5f+g==" crossorigin="anonymous" />

	<style>
body {
	background-color: #fff;
}
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
#centralizado {
	background-color: #000;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 80%;
	height: 80%;
	z-index: -1;
}

.card {
	background-color: #1abc9c;
	color: #fff;
	padding: 20px;
	border-radius: 10px;
	max-width: 500px;
	margin: 20px auto;
	box-shadow: 0px 3px 5px rgba(0,0,0,0.2);
	border: 1px solid #16a085;
}

h1 {
	text-align: center;
	color: #000;
}

.apartamento {
	font-size: 24px;
	font-weight: bold;
	margin-bottom: 10px;
}

.inquilinos {
	margin-bottom: 10px;
}

.data {
	margin-bottom: 10px;
}

.data-hora {
	margin-bottom: 10px;
}

.data-aluguel {
	margin-bottom: 10px;
}



		
	</style>
</head>
<body>
<a href="menu_de_opcoes_ocorrencia.php" class="botao-casa">⬅<i class="fas fa-home"></i></a>
	<h1>Ocorrências</h1>
	<?php
		// Conectar ao banco de dados e consultar os aluguéis
		require_once 'acoes/conexao.php';
		$sql = "SELECT * FROM ocorrencias";
		$resultado = mysqli_query($con, $sql);

		// Iterar sobre os resultados e criar um card para cada aluguel
		if (mysqli_num_rows($resultado) > 0) {
			foreach ($resultado as $oco) {
				echo '<div class="card">';
				echo '<div class="inquilinos">Titulo: ' . htmlspecialchars($oco["titulo"]) . '</div>';
				echo '<div class="inquilinos">Descrição: ' . htmlspecialchars($oco["descri"]) . '</div>';
				echo '<div class="data-aluguel">Data da ocorrência: ' . htmlspecialchars($oco["data_ocorrencia"]).  '</div>';
				echo '<form method="post" action="acoes/excluir_ocorrencia.php">';
				echo '<input type="hidden" name="id" value="' . htmlspecialchars($oco["id"]) . '">';
				echo '</form>';
				echo '</div>';
			}
		}else {
			echo "A query não retornou nenhum resultado.";
		  }
		// Fechar a conexão com o banco de dados
		mysqli_close($con);
	?>
</body>
</html>
