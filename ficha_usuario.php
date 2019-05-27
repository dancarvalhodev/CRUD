<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Validação</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-light">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
                <div class="text-center"><h1>Dados do Usuário</h1></div>
                <div class="text-center text-muted"><h6>ID e Senha foram omitidos por segurança</h6></div>
                <ul>
                    <li><?php echo "o nome é: ".$_SESSION['nome']; ?></li>
                    <li><?php echo "o email é: ".$_SESSION['email']; ?></li>
                    <li><?php echo "A rua é: ".$_SESSION['rua']; ?></li>
                    <li><?php echo "o bairro é: ".$_SESSION['bairro']; ?></li>
                    <li><?php echo "A cidade é: ".$_SESSION['cidade']; ?></li>
                    <li><?php echo "o complemento é: ".$_SESSION['complemento']; ?></li>
                    <li><?php echo "o telefone é: ".$_SESSION['telefone']; ?></li>
                </ul>

				<div class="text-center">
					<button class="btn btn-primary" ><a style="color: white;" href="login.php">Voltar</a></button>
				</div>	

			</div>			
		</div>
	</div>		

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>