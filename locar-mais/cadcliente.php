<?php 

	include('classes/Login.php');
	include('classes/Cliente.php');

	if(isset($_POST['acao'])){

		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$email = $_POST['email'];
		$tel = $_POST['telefone'];
		$dt = $_POST['nascimento'];

		$client = new Cliente($nome,$cpf,$email,$tel,$dt);
		$client->cadastrar_cliente();

		//criar o processo de login do cliente 

		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$ident = $client->getId_cliente();

		/*$login = new Login($user,$pass,$ident);
		$login->cadastrar_login_cliente();*/

		$login = new Login($user,$pass);
		$login->setFuncionario_id($ident);
		$login->cadastrar_login_cliente();

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

				<h1>Cadastro de Clientes</h1>

				<form method="post">
					<label for="nome">Nome completo</label>
					<input type="text" name="nome" placeholder="Nome" required />

					<label for="cpf">CPF</label>
					<input type="text" name="cpf" placeholder="CPF" required />

					<label for="email">Email</label>
					<input type="email" name="email" placeholder="exemplo@exemplo.com" required />

					<label for="telefone">Telefone</label>
					<input type="text" name="telefone" placeholder="Telefone" required />

					<label for="nascimento">Data de nascimento</label>
					<input type="date" name="nascimento" required />

					<div class="splitter"> <!-- div para usar como separador -->
					</div> <!-- splitter -->

					<label for="user">Nome de usuário</label>
					<input type="text" name="user" placeholder="Nome de usuário" required />

					<label for="pass">Senha</label>
					<input type="password" name="pass" required />
					
					<div>
						<input type="submit" name="acao" value="Enviar!" />
					</div>

				</form>

			</div> <!-- formulario -->
			
		</div> <!-- container-1 -->

	</body>

</html>