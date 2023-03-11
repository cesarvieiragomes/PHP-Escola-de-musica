<?php
	require_once '../persistence/dao_conteudo.php';
	require_once '../persistence/dao_cadastro.php';
	
	$daoConteudo = new DAOConteudo();
	$listaConteudos = $daoConteudo->listarConteudos();
	
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
			<li><a href="view_mensalidade.php">Mensalidade</a></li>
			<li class="active"><a href="view_conteudo.php">Conteudo</a></li>
            
           
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
			
	
	<form action="../controller/incluir_conteudo.php" method="post">
		<fieldset>
			<legend>Conteudo</legend>

		  	<label>Data da aula</label>
		  		<div class="form-group">
		    			<input type="date" class="form-control" id="data" name="data">  
		  		</div>
			<label>Conteudo Abordado</label>
			<div class="form-group">
	    			<input type="text" class="form-control" id="conteudodado" name="conteudodado" placeholder="Conteudo">
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
	  				Inserir
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
    		<h2 class="panel-title">Lista de Conteudos</h2>
 	 	</div><!-- fim .panel-heading -->
		
		<div class="panel-body">  
  			<table class="table table-hover">
  				<tr>
  						<th>Codigo</th>
  						<th>Data da Aula</th>
						<th>Conteudo Abordado</th>
						<th>Aluno</th>
  						<th></th>
  				</tr>
  				<?php
  					while ($objetoConteudo = array_shift($listaConteudos)) {
  				?>	
    				<tr>
    					<td class="col-md-1"><?php echo $objetoConteudo->getCodigo(); ?></td>
    					<td class="col-md-1"><?php echo date('d/m/Y',  strtotime($objetoConteudo->getData())); ?></td>
    					<td class="col-md-1"><?php echo $objetoConteudo->getConteudoDado(); ?></td>
    					<td class="col-md-1"><?php echo $objetoConteudo->getCargo()->getNome();?></td>
    					<td class="col-md-1">
    						<a class="btn btn-danger" href="../controller/excluir_conteudo.php?codigo=<?= $objetoConteudo->getCodigo(); ?>" role="button">Excluir</a>  								
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