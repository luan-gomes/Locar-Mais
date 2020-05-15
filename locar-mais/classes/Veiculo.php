<?php 

	class Veiculo{

		//Atributos 
		private $id_veiculo;
		private $chassi;
		private $placa;
		private $modelo;
		private $quilometragem;
		private $disponibilidade;
		private $diaria;

		//Método Construtor

		public function __construct($chassi, $placa, $modelo, $quilometragem, $diaria){

			$this->setChassi($chassi);
			$this->setPlaca($placa);
			$this->setModelo($modelo);
			$this->setQuilometragem($quilometragem);
			$this->setDisponibilidade(true);
			$this->setDiaria($diaria);

		}

		public function cadastrar_veiculo(){
			$pdo = new PDO('mysql:host=localhost;dbname=locar_mais','root','');
			$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$sql = $pdo->prepare("INSERT INTO veiculo VALUES (null,?,?,?,?,?,?)");
			$sql->execute(array($this->getChassi(),$this->getPlaca(),$this->getModelo(),$this->getQuilometragem(),$this->getDisponibilidade(),$this->getDiaria()));
		}

		//Métodos get e set de cada um dos atributos para manipulação

		public function setId_veiculo($id_veiculo){

			$this->id_veiculo = $id_veiculo;

		}

		public function getId_veiculo(){

			return $this->id_veiculo;

		}

		public function setChassi($chassi){

			$this->chassi = $chassi;

		}

		public function getChassi(){

			return $this->chassi;

		}

		public function setPlaca($placa){

			$this->placa = $placa;

		}

		public function getPlaca(){

			return $this->placa;

		}

		public function setModelo($modelo){

			$this->modelo = $modelo;

		}

		public function getModelo(){

			return $this->modelo;

		}

		public function setQuilometragem($quilometragem){

			$this->quilometragem = $quilometragem;

		}

		public function getQuilometragem(){

			return $this->quilometragem;

		}			

		public function setDisponibilidade($disponibilidade){

			$this->disponibilidade = $disponibilidade;

		}

		public function getDisponibilidade(){

			return $this->disponibilidade;

		}		

		public function setDiaria($diaria){

			$this->diaria = $diaria;

		}

		public function getDiaria(){

			return $this->diaria;

		}				
	}
	
?>