		<?php
	require_once '../persistence/dao_mensalidade.php';
	require_once '../persistence/dao_cadastro.php';
	
	$daoFuncionario = new DAOFuncionario();
	$listaFuncionarios = $daoFuncionario->listarFuncionarios();
	
	$daoCargo = new DAOCargo();
	$listaCargos = $daoCargo->listarCargos();
	
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Widmarck</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css"  href="estilo.css" />
	
  </head>
  
  <body>
 	<nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          	<a class="navbar-brand" href="index.php">Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
          <ul class="nav navbar-nav">
           
            <li><a href="view_cadastro.php">Cadastro</a></li>
			<li class="active"><a href="view_mensalidade.php">Mensalidade</a></li>
			<li><a href="view_conteudo.php">Conteudo</a></li>
            
           
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav>
    
<div>	
  	<div class="container">   

</br></br></br>
		<h1>Widmarck Souza</h1>
		<h2>....</h2>
	</div>
</div>  


	
<div class="container">
	
	<form action="../controller/incluir_mensalidade.php" method="post">
		<fieldset>
	  		<legend>Mensalidades</legend>
			
			
	
		  		
		  	<label>Data do Pagamento</label>
		  		<div class="form-group">
		    			<input type="date" class="form-control" id="data" name="data">  
		  		</div>
				
				<div class="form-group">
	    			<input type="number" min="0" step="any" class="form-control" id="valor" name="valor" placeholder="Valor">  
	  		    </div>
			
			
			<div class="form-group">	
	  			<label>Status</label>
			    <select name="status">
					  <option value="Pago">Pago</option>
					  <option value="À Pagar">À Pagar</option>  
					  <option value="inativo">- - -</option>
					  
				</select>
			</div>
			
			
			<div class="form-group">	
	  			<label>Situação</label>
			    <select name="situacao">
					  <option value="Ativo">Ativo</option>
					  <option value="Desistente">Desistente</option>  
					  
					  
				</select>
			</div>
		
			
			
			<div class="form-group">	
		  			<label>Aluno</label>
				    <select name="codigoCargo">
				    	<?php
				    		while ($objetoCargo = array_shift($listaCargos)) {
				    	?>
						  <option value="<?php echo $objetoCargo->getCodigo(); ?>">  <?php echo $objetoCargo->getNome(); ?>  </option>
						 <?php
						}
						 ?>
					</select>
			</div>
	  
	  		<button type="submit" class="btn btn-primary">
	  				<span class="glyphicon glyphicon-thumbs-up"></span>
	  				Efetuar
			</button>
		</fieldset>  
	</form> 			
</div> <!-- fim .container 1 --> 

<div class="container">
 	<br /> <br /> 
</div> <!-- fim .container 2 -->
	
	
<div class="container">
  <div class="panel panel-default">
  		<div class="panel-heading">
    		<h2 class="panel-title">Lista de Pagamentos</h2>
 	 	</div><!-- fim .panel-heading -->
		
		<div class="panel-body">  
  			<table class="table table-hover">
  				<tr>
  						<th>Código</th>
  						<th>Data</th>
						<th>Valor</th>
						<th>Status</th>
						<th>Situação</th>
  						<th>Aluno</th>
  						<th></th>
  				</tr>
  				<?php
  					while ($objetoFuncionario = array_shift($listaFuncionarios)) {
  				?>	
    				<tr>
    					<td class="col-md-1"><?php echo $objetoFuncionario->getCodigo(); ?></td>
    					<td class="col-md-1"><?php echo date('d/m/Y',  strtotime($objetoFuncionario->getData())); ?></td>
						<td class="col-md-1"><?php echo "R$ ".$objetoFuncionario->getValor(); ?></td>
    					<td class="col-md-1"><?php echo $objetoFuncionario->getStatus(); ?></td>
						<td class="col-md-1"><?php echo $objetoFuncionario->getSituacao(); ?></td>
    					<td class="col-md-1"><?php echo $objetoFuncionario->getCargo()->getNome();?></td>
    					<td class="col-md-1">
    						<a class="btn btn-danger" href="../controller/excluir_mensalidade.php?codigo=<?= $objetoFuncionario->getCodigo(); ?>" role="button">Excluir</a>  								
    					</td>
    				</tr>
    			<?php
					}
    			?>
    				
    			</table>
    			
 		</div><!-- fim .panel-body -->
	</div><!-- fim .panel -->
</div><!-- fim .container 3 -->
<footer><em>Produzido por César Vieira</em></footer>
    </body>
</html>