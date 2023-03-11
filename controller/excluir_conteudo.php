<?php
   require_once '../persistence/dao_conteudo.php';
   
   $objetoDao = new DAOConteudo();
   $objetoDao->removerConteudo($_REQUEST['codigo']);
 	
	header('Location: ../view/view_conteudo.php');
	exit;
?>