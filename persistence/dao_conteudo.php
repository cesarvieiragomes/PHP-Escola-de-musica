<?php
    require_once 'conexao.php';
	require_once '../model/class_conteudo.php';
	require_once '../model/class_cadastro.php';
	
	class DAOConteudo{
		
		private $conexao;
		
		public function __construct(){
			$this->conexao = new Conexao();
				 if($this->conexao->conectar() == false){
				 	 echo "Não conectou!" . mysql_error();	
				 }
		}	
		
		public function cadastrarConteudo(Conteudo $conteudo, $codigoCargo){
			$data = $conteudo->getData();
			$conteudodado = $conteudo->getConteudoDado();
			$codigoCargo = $codigoCargo;
			

			$sql = "INSERT INTO conteudo ( data, conteudodado, codigocargo) 
						 VALUES ( '$data', '$conteudodado', '$codigoCargo')";
			$this->conexao->executarQuery($sql);
		}
		
		public function listarConteudos(){
			$lista = $this->conexao->executarQuery("SELECT t.codigo as codigoconteudo, t.data, t.conteudodado,
														c.codigo as codigocargo, c.nome as nomecargo, c.endereco, c.email, c.telefone, c.turno, c.curso, c.dia
 														FROM conteudo t, cadastro c WHERE t.codigocargo = c.codigo");
			$arrayConteudos = array();
			
			while ($linha = mysqli_fetch_array($lista)) {
				$cargo = new Cargo($linha['codigocargo'], $linha['nomecargo'], $linha['endereco'], $linha['email'], $linha['telefone'], $linha['turno'], $linha['curso'], $linha['dia']);
				$conteudo = new Conteudo($linha['codigoconteudo'],$linha['data'],
									$linha['conteudodado'], $cargo); //observe aqui, que $cargo é o objeto da classe Cargo() que estamos adicionando dentro da classe Funcionário()
				
				array_push($arrayConteudos,$conteudo);
			}
			return $arrayConteudos;
		}
		
		public function removerConteudo($codigo){
			$sql = "DELETE FROM conteudo WHERE codigo = '$codigo'";
			$this->conexao->executarQuery($sql);
		}
		 
		
	}
	
?>