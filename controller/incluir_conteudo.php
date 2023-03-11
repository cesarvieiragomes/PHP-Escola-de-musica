<?php
   require_once '../persistence/dao_conteudo.php';

   $objetoConteudo = new Conteudo();
   $objetoConteudo->setData($_REQUEST['data']);
   $objetoConteudo->setConteudoDado($_REQUEST['conteudodado']);
   
   $daot = new DAOConteudo();
   $daot->cadastrarConteudo($objetoConteudo, $_REQUEST['codigoCargo']); //basta apenas passar o código do cargo, não precisa criar um objeto cargo para inserir esse objeto na classe Funcionario, pois para cadastrar no banco só precisamos da informação do código
 	
	header('Location: ../view/view_conteudo.php');
	exit;
?>