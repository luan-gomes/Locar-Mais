<?php 

	class Veiculo{


		//Atributos 
		private $id_veiculo;
		private $chassi;
		private $placa;
		private $modelo;
		private $quilometragem;
		private $disponibilidade;

		//Método Construtor

		public function __construct($chassi, $placa, $modelo, $quilometragem){

			$this->setChassi($chassi);
			$this->setPlaca($placa);
			$this->setModelo($modelo);
			$this->setQuilometragem($quilometragem);
			$this->setDisponibilidade(true);

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

		public function getQuilometrageme(){

			return $this->quilometragem;

		}			

		public function setDisponibilidade($disponibilidade){

			$this->disponibilidade = $disponibilidade;

		}

		public function getDisponibilidade(){

			return $this->disponibilidade;

		}						
	}
	
?>