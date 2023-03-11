<?php
   class Conteudo{
   		private $codigo;
		private $data;
		private $conteudodado;
		private $cargo; //esse atributo será para adicionar um objeto do tipo classe Cargo(), e não simplesmente o nome do cargo, mas o objeto inteiro (essa é a forma mais coerente)
		
		public function __construct($codigo=0, $data="", $conteudodado="", $cargo=""){
			$this->codigo = $codigo;	
			$this->data = $data;
			$this->conteudodado = $conteudodado;
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
		
		public function setConteudoDado($conteudodado){
			$this->conteudodado = $conteudodado;
		}
		
		public function getConteudoDado(){
			return $this->conteudodado;
		}
		
		
		public function setCargo($cargo){
			$this->cargo = $cargo;
		}
		
		public function getCargo(){
			return $this->cargo;
		}
	
   }
?>