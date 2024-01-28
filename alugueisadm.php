<!DOCTYPE html>
<html>
<head>
	<title>Lista de Aluguéis</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-1O+LMF7sIyHj6TrlUg0Cf6pehaSDXZzI2Zr+YMXdJ/yckSVU4BBh2x4N4L12j51g+XdL14aJGpOZ9Kj5O5f+g==" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
background-color: #f4f4f4;
font-family: Arial, sans-serif;
font-size: 16px;
margin: 0;
}

h1 {
text-align: center;
color: #000;
margin-top: 0;
}

.botao-casa {
position: absolute;
top: 10px;
right: 10px;
color: #fff;
background-color: #4CAF50;
border: none;
padding: 10px;
border-radius: 5px;
font-size: 20px;
cursor: pointer;
}

.botao-casa i {
margin-right: 5px;
}

.limpar-filtro {
margin-left: 20px;
font-size: 14px;
}

form {
display: flex;
align-items: center;
margin-bottom: 20px;
}

form label {
margin-right: 10px;
}

form input[type="text"] {
padding: 5px;
border-radius: 5px;
border: 1px solid #ccc;
}

form button[type="submit"] {
background-color: #4CAF50;
border: none;
padding: 5px 10px;
border-radius: 5px;
font-size: 14px;
color: #fff;
cursor: pointer;
}

table {
margin: 0 auto;
border-collapse: collapse;
width: 80%;
}

th, td {
padding: 8px;
text-align: left;
border: 1px solid #ddd;
}

th {
background-color: #4CAF50;
color: #fff;
}

tr:nth-child(even) {
background-color: #f2f2f2;
}
    </style>
</head>
<body>

	<a href="painel_adm.php" class="botao-casa">⬅<i class="fas fa-home"></i></a>
	<h1>Lista de Aluguéis</h1>

	<form method="GET">
		<label for="apartamento">Filtrar por apartamento:</label>
		<input type="text" id="apartamento" name="apartamento" value="<?php echo isset($_GET['apartamento']) ? htmlspecialchars($_GET['apartamento']) : '' ?>">
		<button type="submit">Filtrar</button>
	<a href="alugueisadm.php" class="limpar-filtro">Limpar filtro</a>
	</form>

	<table>
		<thead>
			<tr>
				<th>Apartamento</th>
				<th>Inquilinos</th>
				<th>Data de início do aluguel</th>
				<th>Data de fim do aluguel</th>
				<th>Tipo de aluguel</th>
			</tr>
		</thead>
		<tbody>
			<?php
				// Conectar ao banco de dados e consultar os aluguéis
// Conectar ao banco de dados e consultar os aluguéis
require_once 'acoes/conexao.php';

// Construir a consulta SQL
$sql = "SELECT * FROM aluguel WHERE DATE(data_fim_aluguel) >= DATE(NOW())";

// Adicionar filtro por apartamento, se necessário
if (isset($_GET['apartamento']) && $_GET['apartamento'] !== '') {
	$apartamento = mysqli_real_escape_string($con, $_GET['apartamento']);
	$sql .= " AND apartamento = '{$apartamento}'";
}

// Executar a consulta SQL
$resultado = mysqli_query($con, $sql);

// Iterar sobre os resultados e criar uma linha de tabela para cada aluguel
if (mysqli_num_rows($resultado) > 0) {
	foreach ($resultado as $aluguel) {
		echo '<tr>';
		echo '<td>' . htmlspecialchars($aluguel["apartamento"]) . '</td>';
		echo '<td>' . htmlspecialchars($aluguel["inquilinos"]) . '</td>';
		echo '<td>' . htmlspecialchars($aluguel["data_inicio_aluguel"]) . '</td>';
		echo '<td>' . htmlspecialchars($aluguel["data_fim_aluguel"]) . '</td>';
		echo '<td>' . htmlspecialchars($aluguel["tipo_aluguel"]) . '</td>';
		echo '</tr>';
	}
} else {
	echo "<tr><td colspan='5'>A query não retornou nenhum resultado.</td></tr>";
}

// Fechar a conexão com o banco de dados
mysqli_close($con);
			?>
		</tbody>
	</table>

</body>
</html>