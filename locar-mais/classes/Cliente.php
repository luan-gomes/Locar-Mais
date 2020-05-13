<?php 
		
	//namespace Modelo;	

	class Cliente{

		//Atributos
		private $id_cliente;
		private $nome;
		private $cpf;
		private $email;
		private $telefone;
		private $data_nascimento;

		//Construtor

		public function __construct($nome, $cpf, $email, $telefone, $data_nascimento){

			$this->setNome($nome);
			$this->setCpf($cpf);
			$this->setEmail($email);
			$this->setTelefone($telefone);
			$this->setData_nascimento($data_nascimento);

		}

		//Método para inserir os dados no banco

		public function cadastrar_cliente(){
			$pdo = new PDO('mysql:host=localhost;dbname=locar_mais','root','');
			$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$sql = $pdo->prepare("INSERT INTO cliente VALUES (null,?,?,?,?,?)");
 			$sql->execute(array($this->getNome(),$this->getCpf(),$this->getEmail(),$this->getTelefone(),$this->getData_nascimento()));

 			//setando o id

 			$sql_two = $pdo->prepare("SELECT id_cliente FROM cliente WHERE nome=? and cpf=?");
 			$sql_two->execute(array($this->getNome(),$this->getCpf()));
 			$selecao = $sql_two->fetch(PDO::FETCH_ASSOC);

 			foreach ($selecao as $key => $value) {
 				$this->setId_cliente($value);
 			}

		}

		//Métodos get e set de cada um dos atributos para manipulação

		public function setId_cliente($id_cliente){

			$this->id_cliente = $id_cliente;

		}

		public function getId_cliente(){

			return $this->id_cliente;

		}

		public function setNome($nome){

			$this->nome = $nome;

		}

		public function getNome(){

			return $this->nome;

		}

		public function setCpf($cpf){

			$this->cpf = $cpf;

		}

		public function getCpf(){

			return $this->cpf;

		}

		public function setEmail($email){

			$this->email = $email;

		}

		public function getEmail(){

			return $this->email;

		}

		public function setTelefone($telefone){

			$this->telefone = $telefone;

		}

		public function getTelefone(){

			return $this->telefone;

		}

		public function setData_nascimento($data_nascimento){

			$this->data_nascimento = $data_nascimento;

		}

		public function getData_nascimento(){

			return $this->data_nascimento;

		}

	}

?>