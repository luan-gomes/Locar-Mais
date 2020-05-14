<?php 
	include('classes/Login.php');
	include('classes/Cliente.php');
	session_start();

	$pdo = new PDO('mysql:host=localhost;dbname=locar_mais','root','');
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql_two = $pdo->prepare("SELECT * FROM cliente WHERE id_cliente=?");
 	$sql_two->execute(array($_SESSION["usuario"]->getFuncionario_id()));
 	$selecao = $sql_two->fetchAll(PDO::FETCH_ASSOC);

 	$cliente;

 	foreach ($selecao as $key => $value) {
 		$cliente = new Cliente($value['nome'],$value['cpf'],$value['email'],$value['telefone'],$value['data_nascimentp']);
 		$cliente->setId_cliente($value['id_cliente']);
 	}

?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8" />
		<title>Locar Mais | Reserva</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>

	<body>	

		<div id="container-1">

			<div id="side-menu"> <!-- Menu lateral -->

				<div id="identity">
					<span>Olá, <?php echo $cliente->getNome(); ?>. Seja bem vindo</span>
				</div> <!-- identity -->

				<ul>
					<li>Reserva de veículo</li>
				</ul>			
				
			</div> <!-- side-menu -->

			<div id="formulario">

				<h1>Faça a sua Reserva</h1>

				<?php
					$pdo = new PDO('mysql:host=localhost;dbname=locar_mais','root','');
					$sql_two = $pdo->prepare("SELECT * FROM veiculo");
		 			$sql_two->execute();
		 			$selecao = $sql_two->fetchAll(PDO::FETCH_ASSOC);

		 			foreach ($selecao as $key => $value) {
		 				echo '<hr/>';
		 				echo '</br>';
		 				echo 'Identificador do veículo: '.$value['chassi'];
		 				echo '</br';
		 				echo 'Chassi: '.$value['chassi'];
		 				echo '</br>';
		 				echo 'Placa: '.$value['placa'];
		 				echo '</br>';
		 				echo 'Modelo: '.$value['modelo'];
		 				echo '</br>';
		 				echo 'Quilometragem: '.$value['quilometragem'];
		 				echo '</br>';
		 				echo 'Disponibilidade: '.$value['disponibilidade'];
		 				echo '</br>';
		 				echo '</br>';
		 			}
				?>
				<form method="post">

					<label for="identificador">Identificador do Veículo</label>
					<input type="text" name="identificador" placeholder="Exemplo: 1" required />
					<label for="nome">Identificador do cliente</label>
					<input type="text" name="nome" value="<?php echo $cliente->getId_cliente(); ?>"/>
					<label for="dtreserva">Data de reserva</label>
					<input type="date" name="dtreserva" required />
					<label for="devolucao">Data de devolução</label>
					<input type="date" name="devolucao" required />
					<div>
						<input type="submit" name="acao" value="Reservar" />
					</div>

				</form>

			</div> <!-- formulario -->
		</div> <!-- container-1 -->

	</body>

</html>