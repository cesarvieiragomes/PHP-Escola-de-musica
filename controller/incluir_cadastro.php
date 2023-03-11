<?php
   require_once '../persistence/dao_cadastro.php';
   
   $objetoCargo = new Cargo();
   $objetoCargo->setNome($_REQUEST['nome']);
   $objetoCargo->setEndereco($_REQUEST['endereco']);
   $objetoCargo->setEmail($_REQUEST['email']);
   $objetoCargo->setTelefone($_REQUEST['telefone']);
   $objetoCargo->setTurno($_REQUEST['turno']);
   $objetoCargo->setCurso($_REQUEST['curso']);
   $objetoCargo->setDia($_REQUEST['dia']);
   
   $dao = new DAOCargo();
   $dao->cadastrarCargo($objetoCargo); 
 	
	header('Location: ../view/view_cadastro.php');
	exit;
?>