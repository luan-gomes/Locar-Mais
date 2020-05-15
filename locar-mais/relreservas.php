<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8" />
		<title>Locar Mais - Relatório de Reservas</title>
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

				<h1>Relatório de Reservas</h1>

				<?php
					$pdo = new PDO('mysql:host=localhost;dbname=locar_mais','root','');
					$sql_two = $pdo->prepare("SELECT * FROM reserva");
		 			$sql_two->execute();
		 			$selecao = $sql_two->fetchAll(PDO::FETCH_ASSOC);

		 			foreach ($selecao as $key => $value) {
		 				echo '<hr/>';
		 				echo '</br>';
		 				echo 'Data da locação: '.$value['dt_locacao'];
		 				echo '</br>';
		 				echo 'Data da devolução: '.$value['dt_vecolucao'];
		 				echo '</br>';
		 				echo 'Valor: '.$value['valor'];
		 				echo '</br>';
		 				echo 'Confirmada: '.$value['confirmada'];
		 				echo '</br>';
		 				echo 'Cliente: '.$value['cliente_id'];
		 				echo '</br>';
		 				echo 'Carro: '.$value['veiculo_id'];
		 				echo '</br>';
		 				echo '</br>';
		 			}
				?>

			</div> <!-- formulario -->
		</div> <!-- container-1 -->

	</body>

</html>