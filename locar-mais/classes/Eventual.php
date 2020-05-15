<?php 

	class Eventual{
		private $id;
		private $descricao;
		private $reserva;
		private $valor;

		//Construtor

		public function __construct($descricao,$reserva,$valor){
			$this->setDescricao($descricao);
			$this->setReserva($reserva);
			$this->setValor($valor);
			$this->cadastrar_eventual();
		}

		public function cadastrar_eventual(){
			$pdo = new PDO('mysql:host=localhost;dbname=locar_mais','root','');
			$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$sql = $pdo->prepare("INSERT INTO eventual VALUES (null,?,?,?)");
 			$sql->execute(array($this->getDescricao(),$this->getValor(),$this->getReserva()));

		}

		public function setDescricao($descricao){

			$this->descricao = $descricao;

		}

		public function getDescricao(){

			return $this->descricao;

		}

		public function setReserva($reserva){

			$this->reserva = $reserva;

		}

		public function getReserva(){

			return $this->reserva;

		}


		public function setValor($valor){

			$this->valor = $valor;

		}

		public function getValor(){

			return $this->valor;

		}


		public function setId($id){

			$this->id = $id;

		}

		public function getId(){

			return $this->id;

		}
	}

?>