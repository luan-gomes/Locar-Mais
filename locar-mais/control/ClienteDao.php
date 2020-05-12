<?php

 class ClienteDao{


 	public function cadastrar_cliente($cliente){

 		$pdo = new PDO('mysql:host=localhost;dbname=modulo8','root','');
 		$nome = $cliente->getName(); 
 		$cpf = $cliente->getCpf();
 		$email = $cliente->getEmail();
 		$telefone = $cliente->getTelefone;
 		$data = $cliente->getData_nascimento;
 		$sql = $pdo->prepare("INSERT INTO cliente VALUES (null,?,?,?,?,?)");
 		$sql->execute(array($nome,$cpf,$email,$telefone,$data));
 	}
 }

?>