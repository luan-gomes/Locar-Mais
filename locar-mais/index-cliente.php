<?php 
	session_start();
	include('classes/Login.php');

	//Simulação de login

	if(isset($_POST['acao'])){

		$user = $_POST['user'];
		$pass = $_POST['pass'];

		$login = new Login($user,$pass);
		$liberacao = $login->validar_cliente();

		if($liberacao==true){
			$_SESSION["usuario"] = $login;
			header('Location: reserva.php');
		} else {
			echo 'arf';
		}
	}


?>

<html>
	<head>
		
		<meta charset="UTF-8" />
		<title>Locar Mais | Login Cliente</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />

	</head>

		<div id="login-form">
			<span>Login - Cliente</span>
			<form method="post">

				<input type="text" name="user" placeholder="Nome de usuário" required />
				<input type="password" name="pass" placeholder="Senha" required />
				<input type="submit" name="acao" value="Entrar" />

			</form> 
		</div> <!-- login-form -->

</html>