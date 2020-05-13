<?php

	class Funcionario{

		//Atributos
		private $id_funcionario;
		private $nome;
		private $cpf;
		private $ctps;
		private $email;
		private $telefone;
		private $data_nascimento;

		//Construtor

		public function __construct($nome, $cpf, $ctps, $email, $telefone, $data_nascimento){

			$this->setNome($nome);
			$this->setCpf($cpf);
			$this->setCtps($ctps);
			$this->setEmail($email);
			$this->setTelefone($telefone);
			$this->setData_nascimento($data_nascimento);

		}

		//Método para inserir os dados no banco

		public function cadastrar_funcionario(){
			$pdo = new PDO('mysql:host=localhost;dbname=locar_mais','root','');
			$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$sql = $pdo->prepare("INSERT INTO funcionario VALUES (null,?,?,?,?,?,?)");
 			$sql->execute(array($this->getNome(),$this->getCpf(),$this->getCtps(),$this->getEmail(),$this->getTelefone(),$this->getData_nascimento()));

 			//setando o id
 			
 			$sql_two = $pdo->prepare("SELECT id_funcionario FROM funcionario WHERE nome=? and cpf=?");
 			$sql_two->execute(array($this->getNome(),$this->getCpf()));
 			$selecao = $sql_two->fetch(PDO::FETCH_ASSOC);

 			foreach ($selecao as $key => $value) {
 				$this->setId_funcionario($value);
 			}

		}

		//Métodos get e set de cada um dos atributos para manipulação

		public function setId_funcionario($id_funcionario){

			$this->id_funcionario = $id_funcionario;

		}

		public function getId_funcionario(){

			return $this->id_funcionario;

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

		public function setCtps($ctps){

			$this->ctps = $ctps;

		}

		public function getCtps(){

			return $this->ctps;

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