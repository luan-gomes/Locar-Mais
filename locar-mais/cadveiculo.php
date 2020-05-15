<?php

	include('classes/Veiculo.php');

	if(isset($_POST['acao'])){

		$chassi = $_POST['chassi'];
		$placa = $_POST['placa'];
		$modelo = $_POST['modelo'];
		$km = $_POST['km'];
		$valor = $_POST['diaria'];

		$car = new Veiculo($chassi,$placa,$modelo,$km,$valor);
		$car->cadastrar_veiculo();

		//criar o processo de login do cliente 
	}

?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8" />
		<title>Cadastro de Clientes</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>

	<body>	

		<div id="container-1">

			<div id="side-menu"> <!-- Menu lateral -->

				<div id="identity">
					<span>Olá, Fulano. Seja bem vindo</span>
				</div> <!-- identity -->

				<ul>
					<li><a href="cadcliente.php">Cadastrar cliente</a></li>
					<li><a href="devolucao.php">Validar devolução</a></li>
					<li><a href="validarlocacao.php">Validar reserva</a></li>
					<li><a href="cadfuncionario.php">Cadastrar funcionário</a></li>
					<li><a href="cadveiculo.php">Cadastrar veículo</a></li>
					<li><a href="relclientes.php">Relatório de clientes</a></li>
					<li><a href="relveiculos.php">Relatório de veículos</a></li>
					<li><a href="relreservas.php">Relatório de reservas</a></li>
				</ul>			
				
			</div> <!-- side-menu -->

			<div id="formulario">

				<h1>Cadastro de Veículos</h1>

				<form method="post">
					<label for="chassi">Número do chassi</label>
					<input type="text" name="chassi" placeholder="Chassi" required />

					<label for="placa">Placa</label>
					<input type="text" name="placa" placeholder="Placa" required />

					<label for="modelo">Modelo do carro</label>
					<input type="text" name="modelo" placeholder="Marca Modelo Ano" required />

					<label for="km">Quilometragem</label>
					<input type="text" name="km" placeholder="Em km" required />

					<label for="diaria">Valor da diária</label>
					<input type="text" name="diaria" placeholder="Valor da diária" required />
					
					<div>
						<input type="submit" name="acao" value="Enviar!" />
					</div>
					
				</form>

			</div> <!-- formulario -->
			
		</div> <!-- container-1 -->

	</body>

</html>