<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Alterar Dados</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<span style="padding: 10px;"></span>
				<div class="text-center"><h1>Alterar Dados</h1></div>
				<form action="update.php" method="post">
					<div class="form-group">
						<input  class="form-control" type="hidden" name="id" placeholder="Nome" value="<?php echo $_SESSION['id'];?>">
					</div>					
					<div class="form-group">
						<input  class="form-control" type="text" name="nome" placeholder="Nome" value="<?php echo $_SESSION['nome'];?>">
					</div>
					<div class="form-group">
						<input  class="form-control" type="email" name="email" placeholder="Email" value="<?php echo $_SESSION['email'];?>">
					</div>
					<div class="form-group">
						<input  class="form-control" type="text" name="rua" placeholder="Rua" value="<?php echo $_SESSION['rua'];?>">
					</div>				
					<div class="form-group">
						<input  class="form-control" type="text" name="bairro" placeholder="Bairro" value="<?php echo $_SESSION['bairro'];?>">
					</div>		
					<div class="form-group"> 
						<input  class="form-control" type="text" name="cidade" placeholder="Cidade" value="<?php echo $_SESSION['cidade'];?>">
					</div>		
					<div class="form-group">
						<input  class="form-control" type="number" name="complemento" placeholder="Complemento" value="<?php echo $_SESSION['complemento'];?>">
					</div>		
					<div class="form-group">
						<input  class="form-control" type="number" name="telefone" placeholder="Telefone" value="<?php echo $_SESSION['telefone'];?>">
					</div>		
					<div class="form-group">
						<input  class="form-control" type="password" name="senha" placeholder="Senha" value="<?php echo $_SESSION['senha'];?>">
					</div>
					<div class="text-center form-group">
						<input type="submit" class="btn btn-primary" name="envia" value="Salvar">
					</div>				
				</form>
			</div>	
		</div>	
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>