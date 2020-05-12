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