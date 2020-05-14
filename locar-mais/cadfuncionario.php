<?php

	include('classes/Login.php');
	include('classes/Funcionario.php');

	if(isset($_POST['acao'])){

		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$ctps = $_POST['ctps'];
		$email = $_POST['email'];
		$tel = $_POST['telefone'];
		$dt = $_POST['nascimento'];

		$worker = new Funcionario($nome,$cpf,$ctps,$email,$tel,$dt);
		$worker->cadastrar_funcionario();

		//Criar login do funcionário

		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$ident = $worker->getId_funcionario();

		/*$login = new Login($user,$pass,$ident);
		$login->cadastrar_login();*/

		$login = new Login($user,$pass);
		$login->setFuncionario_id($ident);
		$login->cadastrar_login();

	}

?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8" />
		<title>Cadastro de Funcionários</title>
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

				<h1>Cadastro de Funcionários</h1>

				<form method="post">
					<label for="nome">Nome completo</label>
					<input type="text" name="nome" placeholder="Nome" required />

					<label for="cpf">CPF</label>
					<input type="text" name="cpf" placeholder="CPF" required />

					<label for="ctps">CTPS</label>
					<input type="text" name="ctps" placeholder="CTPS" required />

					<label for="email">Email</label>
					<input type="email" name="email" placeholder="exemplo@exemplo.com" required />

					<label for="telefone">Telefone</label>
					<input type="text" name="telefone" placeholder="Telefone" required />

					<label for="nascimento">Data de nascimento</label>
					<input type="date" name="nascimento" required />

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