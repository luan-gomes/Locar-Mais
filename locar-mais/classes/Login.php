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
			//$this->setFuncionario_id($id);

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

		//Método para validar login de funcionário

		public function validar_funcionario(){
			$pdo = new PDO('mysql:host=localhost;dbname=locar_mais','root','');
			$sql = $pdo->prepare("SELECT * FROM login WHERE username=? and pass=?");
			$sql->execute(array($this->getUsername(),$this->getPassword()));
			$selecao = $sql->fetchAll(PDO::FETCH_ASSOC);

			if($selecao==null){
				return false;
			}
			else {
				foreach ($selecao as $key => $value) {
					$this->setFuncionario_id($value['funcionario_id']);
					return true;
				}
			}
		}

		//Método para validar login de cliente

		public function validar_cliente(){
			$pdo = new PDO('mysql:host=localhost;dbname=locar_mais','root','');
			$sql = $pdo->prepare("SELECT * FROM login_cliente WHERE user_cliente=? and pass_cliente=?");
			$sql->execute(array($this->getUsername(),$this->getPassword()));
			$selecao = $sql->fetchAll(PDO::FETCH_ASSOC);

			if($selecao==null){
				return false;
			}
			else {
				foreach ($selecao as $key => $value) {
					$this->setFuncionario_id($value['cliente_id']);
					return true;
				}
			}
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