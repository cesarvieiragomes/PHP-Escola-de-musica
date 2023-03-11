<?php
   require_once '../persistence/dao_mensalidade.php';

   $objetoFuncionario = new Funcionario();
   $objetoFuncionario->setData($_REQUEST['data']);
   $objetoFuncionario->setValor($_REQUEST['valor']);
   $objetoFuncionario->setStatus($_REQUEST['status']);
   $objetoFuncionario->setSituacao($_REQUEST['situacao']);
   
   $daof = new DAOFuncionario();
   $daof->cadastrarFuncionario($objetoFuncionario, $_REQUEST['codigoCargo']); //basta apenas passar o código do cargo, não precisa criar um objeto cargo para inserir esse objeto na classe Funcionario, pois para cadastrar no banco só precisamos da informação do código
 	
	header('Location: ../view/view_mensalidade.php');
	exit;
?>