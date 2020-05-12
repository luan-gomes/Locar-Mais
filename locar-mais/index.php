<?php 
	include('model/Cliente.php');
	include('control/ClienteDao.php');

	if(isset($_POST['acao'])){

		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$email = $_POST['email'];
		$tel = $_POST['telefone'];
		$dt = $_POST['nascimento'];

		$cient = new Cliente($nome,$cpf,$email,$tel,$dt);
		//echo 'inclusão realizada! '.$dt;

		$clientdao = new ClienteDao;
		$clientedao->cadastrar_cliente($client);

		//formato da data: YYYY-MM-DD

		//instanciar um objeto ClienteDao e mandar pro banco
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
		<input type="email" name="email" placeholder="exemplo@exemplo.com" required />
		<input type="text" name="telefone" placeholder="Telefone" required />
		<input type="date" name="nascimento" required />
		<input type="submit" name="acao" value="Enviar!" />

	</form>
</html>