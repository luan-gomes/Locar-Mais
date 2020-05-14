<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8" />
		<title>Locar Mais - Relatório de Clientes</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>

	<body>	

		<div id="container-1">

			<div id="side-menu"> <!-- Menu lateral -->

				<div id="identity">
					<span>Olá, Fulano. Seja bem vindo</span>
				</div> <!-- identity -->

				<ul>
					<li>Cadastrar cliente</li>
					<li>Validar devolução</li>
					<li>Cadastrar funcionário</li>
					<li>Cadastrar veículo</li>
					<li>Relatório de clientes</li>
					<li>Relatório de veículos</li>
					<li>Relatório de reservas</li>
				</ul>			
				
			</div> <!-- side-menu -->

			<div id="formulario">

				<h1>Relatório de Clientes</h1>

				<?php
					$pdo = new PDO('mysql:host=localhost;dbname=locar_mais','root','');
					$sql_two = $pdo->prepare("SELECT * FROM cliente");
		 			$sql_two->execute();
		 			$selecao = $sql_two->fetchAll(PDO::FETCH_ASSOC);

		 			foreach ($selecao as $key => $value) {
		 				echo '<hr/>';
		 				echo '</br>';
		 				echo 'Nome: '.$value['nome'];
		 				echo '</br>';
		 				echo 'CPF: '.$value['cpf'];
		 				echo '</br>';
		 				echo 'E-mail: '.$value['email'];
		 				echo '</br>';
		 				echo 'Telefone: '.$value['telefone'];
		 				echo '</br>';
		 				echo 'Data de nascimento: '.$value['data_nascimentp'];
		 				echo '</br>';
		 				echo '</br>';
		 			}
				?>

			</div> <!-- formulario -->
		</div> <!-- container-1 -->

	</body>

</html>