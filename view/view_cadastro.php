<?php
	require_once '../persistence//dao_cadastro.php';
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
           
            <li class="active"><a href="view_cadastro.php">Cadastro</a></li>
			<li><a href="view_mensalidade.php">Mensalidade</a></li>
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
	
	<form action="../controller/incluir_cadastro.php" method="post">
		<fieldset>
	  		<legend>Novo Aluno</legend>
	
	  		<div class="form-group">
	    			<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
	  		</div>
			
			<div class="form-group">
	    			<input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço">
	  		</div>
	
	  		<div class="form-group">
	    			<input type="text" class="form-control" id="email" name="email" placeholder="Email">  
	  		</div>
	  		
	  		<div class="form-group">
	    			<input type="number" min="0" step="any" class="form-control" id="telefone" name="telefone" placeholder="Telefone">  
	  		</div>
			
			<div class="form-group">	
	  			<label>Turno</label>
			    <select name="turno">
					  <option value="Manhã">Manhã</option>
					  <option value="Tarde">Tarde</option>  
					  <option value="Noite">Noite</option>
					  </select>
			</div>
			
			<div class="form-group">	
	  			<label>Curso</label>
			    <select name="curso">
					  <option value="Canto">Canto</option>
					  <option value="Baixo">Baixo</option>  
					  <option value="Guitarra">Guitarra</option>
					  <option value="Teoria Musical">Teoria Musical</option>
					  <option value="Violão">Violão</option>
				</select>
			</div>
			
			<div class="form-group">	
	  			<label>Dia</label>
			    <select name="dia">
					  <option value="Domingo">Domingo</option>
					  <option value="Segunda">Segunda</option>  
					  <option value="Terça">Terça</option>
					  <option value="Quarta">Quarta</option>
					  <option value="Quinta">Quinta</option>
					  <option value="Sexta">Sexta</option>
					  <option value="Sábado">Sábado</option>
					 
				</select>
			</div>
			
			
			
	  		<button type="submit" class="btn btn-primary">
	  				<span class="glyphicon glyphicon-thumbs-up"></span>
	  				Cadastrar
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
    		<h2 class="panel-title">Lista de Cadastros</h2>
 	 	</div><!-- fim .panel-heading -->
		
		<div class="panel-body">  
  			<table class="table table-hover">
  				<tr>
  						<th>Codigo</th>
  						<th>Nome</th>
						<th>Endereço</th>
  						<th>Email</th>
  						<th>Telefone</th>
						<th>Turno</th>
						<th>Curso</th>
						<th>Dia</th>
						<th></th>
  				</tr>
  				<?php
  					while ($objetoCargo = array_shift($listaCargos)) {
  				?>	
    				<tr>
    					<td class="col-md-1"><?php echo $objetoCargo->getCodigo(); ?></td>
    					<td class="col-md-3"><?php echo $objetoCargo->getNome(); ?></td>
    					<td class="col-md-1"><?php echo $objetoCargo->getEndereco(); ?></td>
						<td class="col-md-1"><?php echo $objetoCargo->getEmail(); ?></td>
						<td class="col-md-1"><?php echo $objetoCargo->getTelefone(); ?></td>
						<td class="col-md-1"><?php echo $objetoCargo->getTurno(); ?></td>
						<td class="col-md-1"><?php echo $objetoCargo->getCurso(); ?></td>
						<td class="col-md-1"><?php echo $objetoCargo->getDia(); ?></td>
    					<td class="col-md-1">
    						<a class="btn btn-danger" href="../controller/excluir_cadastro.php?codigo=<?= $objetoCargo->getCodigo(); ?>" role="button">Excluir</a>  								
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