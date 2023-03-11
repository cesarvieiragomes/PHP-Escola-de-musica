<?php
       require_once '../persistence/dao_cadastro.php';
   
   $objetoDao = new DAOCargo();
   $objetoDao->removerCargo($_REQUEST['codigo']);
 	
	header('Location: ../view/view_cadastro.php');
	exit;
?>