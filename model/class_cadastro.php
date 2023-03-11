<?php
   class Cargo{
   		private $codigo;
		private $nome;
		private $endereco;
		private $email;
		private $telefone;
		private $turno;
		private $curso;
		private $dia;
		
		public function __construct($codigo=0, $nome="", $endereco="", $email="", $telefone="", $turno="", $curso="", $dia=""){
			$this->codigo = $codigo;	
			$this->nome = $nome;
			$this->endereco = $endereco;
			$this->email = $email;
			$this->telefone = $telefone;
			$this->turno = $turno;
			$this->curso = $curso;
			$this->dia = $dia;
		}		
		
		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}
		
		public function getCodigo(){
			return $this->codigo;
		}
		
		public function setNome($nome){
			$this->nome = $nome;
		}
		
		public function getNome(){
			return $this->nome;
		}
		
		public function setEndereco($endereco){
			$this->endereco = $endereco;
		}
		
		public function getEndereco(){
			return $this->endereco;
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
		
		public function setTurno($turno){
			$this->turno = $turno;
		}
		
		public function getTurno(){
			return $this->turno;
		}
		
		public function setCurso($curso){
			$this->curso = $curso;
		}
		
		public function getCurso(){
			return $this->curso;
		}
		
		public function setDia($dia){
			$this->dia = $dia;
		}
		
		public function getDia(){
			return $this->dia;
		}
   }
?>