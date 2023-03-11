<?php
    require_once 'conexao.php';
	require_once '../model/class_mensalidade.php';
	require_once '../model/class_cadastro.php';
	
	class DAOFuncionario{
		
		private $conexao;
		
		public function __construct(){
			$this->conexao = new Conexao();
				 if($this->conexao->conectar() == false){
				 	 echo "Não conectou!" . mysql_error();	
				 }
		}	
		
		public function cadastrarFuncionario(Funcionario $funcionario, $codigoCargo){
			$data = $funcionario->getData();
			$valor = $funcionario->getValor();
			$status = $funcionario->getStatus();
			$situacao = $funcionario->getSituacao();
			$codigoCargo = $codigoCargo;
			

			$sql = "INSERT INTO mensalidade ( data, valor, status, situacao, codigocargo) 
						 VALUES ( '$data', '$valor', '$status', '$situacao', '$codigoCargo')";
			$this->conexao->executarQuery($sql);
		}
		
		public function listarFuncionarios(){
			$lista = $this->conexao->executarQuery("SELECT m.codigo as codigofuncionario, m.data, m.valor, m.status, m.situacao,
														c.codigo as codigocargo, c.nome as nomecargo, c.endereco, c.email, c.telefone, c.turno, c.curso, c.dia
 														FROM mensalidade m, cadastro c WHERE m.codigocargo = c.codigo");
			$arrayFuncionarios = array();
			
			while ($linha = mysqli_fetch_array($lista)) {
				$cargo = new Cargo($linha['codigocargo'], $linha['nomecargo'], $linha['endereco'], $linha['email'], $linha['telefone'], $linha['turno'], $linha['curso'], $linha['dia']);
				$funcionario = new Funcionario($linha['codigofuncionario'],$linha['data'],$linha['valor'],
									$linha['status'],$linha['situacao'], $cargo); //observe aqui, que $cargo é o objeto da classe Cargo() que estamos adicionando dentro da classe Funcionário()
				
				array_push($arrayFuncionarios,$funcionario);
			}
			return $arrayFuncionarios;
		}
		
		public function removerFuncionario($codigo){
			$sql = "DELETE FROM mensalidade WHERE codigo = '$codigo'";
			$this->conexao->executarQuery($sql);
		}
		 
		
	}
	
?>