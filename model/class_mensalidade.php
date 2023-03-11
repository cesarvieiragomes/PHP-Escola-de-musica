<?php
   class Funcionario{
   		private $codigo;
		private $data;
		private $valor;
		private $status;
		private $situacao;
		private $cargo; //esse atributo será para adicionar um objeto do tipo classe Cargo(), e não simplesmente o nome do cargo, mas o objeto inteiro (essa é a forma mais coerente)
		
		public function __construct($codigo=0, $data="", $valor=0, $status="", $situacao="", $cargo=""){
			$this->codigo = $codigo;	
			$this->data = $data;
			$this->valor = $valor;
			$this->status = $status;
			$this->situacao = $situacao;
			$this->cargo = $cargo;
		}		
		
		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}
		
		public function getCodigo(){
			return $this->codigo;
		}
		
		
		
		public function setData($data){
			$this->data = $data;
		}
		
		public function getData(){
			return $this->data;
		}
		
		public function setValor($valor){
			$this->valor = $valor;
		}
		
		public function getValor(){
			return $this->valor;
		}
		
		public function setStatus($status){
			$this->status = $status;
		}
		
		public function getStatus(){
			return $this->status;
		}
		
		public function setSituacao($situacao){
			$this->situacao = $situacao;
		}
		
		public function getSituacao(){
			return $this->situacao;
		}
		
		public function setCargo($cargo){
			$this->cargo = $cargo;
		}
		
		public function getCargo(){
			return $this->cargo;
		}
	
   }
?>