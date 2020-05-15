<?php 
	
	include('classes/Eventual.php');
	if(isset($_POST['acao'])){

		$evento = new Eventual($_POST['descricao'],$_POST['identificador'],$_POST['valor']);
	}

?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8" />
		<title>Locar Mais - Devolução</title>
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

				<h1>Devolução - Cadastrar Eventuais</h1>

				<?php
					$pdo = new PDO('mysql:host=localhost;dbname=locar_mais','root','');
					$sql_two = $pdo->prepare("SELECT * FROM reserva");
		 			$sql_two->execute();
		 			$selecao = $sql_two->fetchAll(PDO::FETCH_ASSOC);

		 			foreach ($selecao as $key => $value) {
		 				if($value['confirmada']==true){
			 				echo '<hr/>';
			 				echo '</br>';
			 				echo 'Identificador da Reserva: '.$value['id_reserva'];
			 				echo '</br>';
			 				echo 'Data da locação: '.$value['dt_locacao'];
			 				echo '</br>';
			 				echo 'Data da devolução: '.$value['dt_vecolucao'];
			 				echo '</br>';
			 				echo 'Valor: '.$value['valor'];
			 				echo '</br>';
			 				echo 'Cliente: '.$value['cliente_id'];
			 				echo '</br>';
			 				echo 'Carro: '.$value['veiculo_id'];
			 				echo '</br>';
			 				echo '</br>';
		 				}
		 			}
				?>
				<form method="post">

					<label for="identificador">Identificador da Reserva</label>
					<input type="text" name="identificador" placeholder="Exemplo: 1" required />
					<label for="descricao">Descrição</label>
					<input type="text" name="descricao" placeholder="Breve descricao" required />
					<label for="valor">Valor</label>
					<input type="text" name="valor" placeholder="Exemplo: 100,00" required />
					<div>
						<input type="submit" name="acao" value="Liberar" />
					</div>

				</form>

			</div> <!-- formulario -->
		</div> <!-- container-1 -->

	</body>

</html>