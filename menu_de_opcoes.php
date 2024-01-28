<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Menu de opções</title>
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
		body {
			background-color: #008000;
		}
		div {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
		button {
			font-size: 24px;
			padding: 10px 20px;
			background-color: white;
			border: none;
			border-radius: 5px;
			box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
			transition: all 0.3s ease-in-out;
			cursor: pointer;
		}
		button:hover {
			background-color: #f2f2f2;
			box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
		}
		.menu-btn + .menu-btn {
			margin-left: 10px;
		}
	</style>
</head>
<body>
	
	<a href="painel.php" class="botao-casa">⬅<i class="fas fa-home"></i></a>
	<div>
		<button class="menu-btn" onclick="window.location.href='ver_alugueis.php'">Ver aluguéis</button>
		<button class="menu-btn" onclick="window.location.href='formulario_aluguel.php'">Enviar aluguel</button>
	</div>
</body>
</html>
