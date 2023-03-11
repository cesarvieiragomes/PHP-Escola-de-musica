<?php
   require_once '../persistence/dao_mensalidade.php';
   
   $objetoDao = new DAOFuncionario();
   $objetoDao->removerFuncionario($_REQUEST['codigo']);
 	
	header('Location: ../view/view_mensalidade.php');
	exit;
?>