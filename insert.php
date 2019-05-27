<?php
	include_once("conexao.php");

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$rua = $_POST['rua'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$complemento = $_POST['complemento'];
	$telefone = $_POST['telefone'];
	$senha = $_POST['senha'];

	$sql = "INSERT INTO usuarios(nomeUsuario, emailUsuario, ruaUsuario, bairroUsuario, cidadeUsuario, compUsuario, telUsuario, senhaUsuario) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

	$consulta = $con->prepare($sql);
	$consulta->bind_param("ssssssss", $nome, $email, $rua, $bairro, $cidade, $complemento, $telefone, $senha);
	$consulta->execute();
	$resultado = $consulta->affected_rows;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<span style="padding: 10px;"></span>
				<div class="text-center"><h1>Resultado</h1></div>
				<div class="text-center text-danger">O sistema retornou <?php echo $resultado;?>.</div>	
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

