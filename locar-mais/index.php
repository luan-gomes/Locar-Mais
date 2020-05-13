<?php 
	include('classes/Cliente.php');
	include('classes/Login.php');
	include('classes/Funcionario.php');

	//Simulação de cadastro de funcionario

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

		$login = new Login($user,$pass,$ident);
		$login->cadastrar_login();

	}


?>

<html>
	<head>
		
		<meta charset="UTF-8" />
		<title>Formulário de Cadastro de Cliente</title>

	</head>

	<form method="post">
		
		<input type="text" name="nome" placeholder="Nome" required />
		<input type="text" name="cpf" placeholder="CPF" required />
		<input type="text" name="ctps" placeholder="CTPS" required />
		<input type="email" name="email" placeholder="exemplo@exemplo.com" required />
		<input type="text" name="telefone" placeholder="Telefone" required />
		<input type="date" name="nascimento" required />
		<br/>
		<input type="text" name="user" placeholder="Nome de usuário" required />
		<input type="password" name="pass" required />
		<input type="submit" name="acao" value="Enviar!" />

	</form>
</html>