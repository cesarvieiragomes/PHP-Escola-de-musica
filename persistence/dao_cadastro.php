<?php
    require_once 'conexao.php';
	require_once '../model/class_cadastro.php'; 
	
	class DAOCargo{
		
		private $conexao;
		
		public function __construct(){
			$this->conexao = new Conexao();
				 if($this->conexao->conectar() == false){
				 	 echo "Não conectou!" . mysql_error();	
				 }
			
		}	
		
		public function cadastrarCargo(Cargo $cargo){
			$nome = $cargo->getNome();
			$endereco = $cargo->getEndereco(); 
			$email = $cargo->getEmail();
			$telefone = $cargo->getTelefone();
			$turno = $cargo->getTurno();
			$curso = $cargo->getCurso();
			$dia = $cargo->getDia();

			$sql = "INSERT INTO cadastro (nome, endereco, email, telefone, turno, curso, dia) VALUES ('$nome', '$endereco', '$email', '$telefone', '$turno', '$curso', '$dia')";
			$this->conexao->executarQuery($sql);
		}
		
		public function listarCargos(){
			$lista = $this->conexao->executarQuery("SELECT * FROM cadastro");
			$arrayCargos = array();
			
			while ($linha = mysqli_fetch_array($lista)) {
				$cargo = new Cargo($linha['codigo'],$linha['nome'],$linha['endereco'],$linha['email'],$linha['telefone'],$linha['turno'],$linha['curso'],$linha['dia']);
				array_push($arrayCargos,$cargo);
				
				
			}
			return $arrayCargos;
		}
		
		public function removerCargo($codigo){
			$sql = "DELETE FROM cadastro WHERE codigo = '$codigo'";
			$this->conexao->executarQuery($sql);
		}
		 
		
	}
	
?>