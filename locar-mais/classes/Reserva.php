<?php 

	class Reserva{

		private $id_reserva;
		private $data_locacao;
		private $data_devolucao;
		private $valor;
		private $confirmada;
		private $cliente_id;
		private $carro;

		//Método construtor

		public function __construct($dtloc,$dtdev,$valor,$cliente,$carro){

			$this->setData_locacao($dtloc);
			$this->setData_devolucao($dtdev);
			$this->setValor($valor);
			$this->setConfirmada(false);
			$this->setCliente_id($cliente);
			$this->setCarro($carro);
		}

		//Método para cadastrar reserva

		public function cadastrar_reserva(){
			$pdo = new PDO('mysql:host=localhost;dbname=locar_mais','root','');
			$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$sql = $pdo->prepare("INSERT INTO reserva VALUES (null,?,?,?,?,?,?)");
			$sql->execute(array($this->getData_locacao(),$this->getData_devolucao(),$this->getValor(),$this->getConfirmada(),$this->getCliente_id(),$this->getCarro()));

			/*setando o id_reserva

			$sql_two = $pdo->prepare("SELECT id_reserva FROM reserva WHERE dt_locacao=? and dt_devolucao=? and cliente_id=?");
			$sql_two->execute(array($this->getData_locacao(),$this->getData_devolucao(),$this->getCliente_id()));
			$selecao = $sql_two->fetch(PDO::FETCH_ASSOC);

			foreach ($selecao as $key => $value) {
				$this->setId_reserva($value);
			}*/
		}

		//Métodos get e set

		public function setId_reserva($id){

			$this->id_reserva = $id;

		}

		public function getId_reserva(){

			return $this->id_reserva;

		}

		public function setData_locacao($dt){

			$this->data_locacao = $dt;

		}

		public function getData_locacao(){

			return $this->data_locacao;

		}

		public function setData_devolucao($dt){

			$this->data_devolucao = $dt;
		}

		public function getData_devolucao(){

			return $this->data_devolucao;

		}

		public function setValor($valor){

			$this->valor = $valor;

		}

		public function getValor(){

			return $this->valor;

		}

		public function setConfirmada($ok){

			$this->confirmada = $ok;

		}

		public function getConfirmada(){

			return $this->confirmada;

		}

		public function setCliente_id($cliente){

			$this->cliente_id = $cliente;

		}

		public function getCliente_id(){

			return $this->cliente_id;

		}

		public function setCarro($carro){

			$this->carro = $carro;

		}

		public function getCarro(){

			return $this->carro;

		}
	}

?>