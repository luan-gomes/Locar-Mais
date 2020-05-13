<?php 

	class Login{

		//Atributos
		private $id_login;
		private $username;
		private $password;
		private $funcionario_id;

		//Método Construtor

		public function __construct($username,$password,$id){

			$this->setUsername($username);
			$this->setPassword($password);
			$this->setFuncionario_id($id);

		}

		//Método para cadastrar o login de funcionário

		public function cadastrar_login(){
			$pdo = new PDO('mysql:host=localhost;dbname=locar_mais','root','');
			$sql = $pdo->prepare("INSERT INTO login VALUES (null,?,?,?)");
			$sql->execute(array($this->getUsername(),$this->getPassword(),$this->getFuncionario_id()));
		}

		//Método para cadastrar o login de cliente

		public function cadastrar_login_cliente(){
			$pdo = new PDO('mysql:host=localhost;dbname=locar_mais','root','');
			$sql = $pdo->prepare("INSERT INTO login_cliente VALUES (null,?,?,?)");
			$sql->execute(array($this->getUsername(),$this->getPassword(),$this->getFuncionario_id()));
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