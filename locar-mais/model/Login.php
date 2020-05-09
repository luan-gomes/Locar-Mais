<?php 

	class Login{

		//Atributos
		private $id_login;
		private $username;
		private $password;
		private $funcionario_id;

		//Método Construtor

		public function __construct($username,$password){

			$this->setUsername($username);
			$this->setPassword($password);

		}

		//Métodos get e set de cada um dos atributos para manipulação

		public function setId_login($id_login){

			$this->id_login = $id_login;

		}

		public function getId_login(){

			return $this->id_login;

		}

		public function setUsername($username){

			$this->username = $username;

		}

		public function getUsername(){

			return $this->username;

		}

		public function setPassword($password){

			$this->password = $password;

		}

		public function getPassword(){

			return $this->password;

		}

		public function setFuncionario_id($funcionario_id){

			$this->funcionario_id = $funcionario_id;

		}

		public function getFuncionario_id(){

			return $this->funcionario_id;

		}

	}


?>