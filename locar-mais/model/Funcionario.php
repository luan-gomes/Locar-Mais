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