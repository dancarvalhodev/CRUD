<?php
	include_once("conexao.php");
	
	$emailDigitado = $_POST['email'];
	$senhaDigitado = $_POST['senha'];

	$sql = "SELECT * FROM usuarios WHERE emailUsuario = '" . $emailDigitado . "' AND senhaUsuario = '" . $senhaDigitado. "'";
	$consulta = $con->query($sql);
	$linha = $consulta->fetch_array();

	if(isset($linha)){
		$id = $linha['idUsuario'];
		$nome = $linha['nomeUsuario'];
		$email = $linha['emailUsuario'];
		$rua = $linha['ruaUsuario'];
		$bairro = $linha['bairroUsuario'];
		$cidade = $linha['cidadeUsuario'];
		$complemento = $linha['compUsuario'];
		$telefone = $linha['telUsuario'];
		$senha = $linha['senhaUsuario'];

		session_start();
		
		$_SESSION['id'] = $id;	
		$_SESSION['nome'] = $nome;	
		$_SESSION['email'] = $email;	
		$_SESSION['rua'] = $rua;	
		$_SESSION['bairro'] = $bairro;	
		$_SESSION['cidade'] = $cidade;	
		$_SESSION['complemento'] = $complemento;	
		$_SESSION['telefone'] = $telefone;	
		$_SESSION['senha'] = $senha;

	}
	else{
		header("Location: login.php?idErro=1");
		exit;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Escolha</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<span style="padding: 10px;"></span>
				<div class="text-center"><h1>Botões</h1></div>
				<span style="padding: 10px;"></span>				
				<div class="text-center">
					<button class="btn btn-primary" ><a style="color: white;" href="ficha_usuario.php">Imprimir Ficha Usuário</a></button>
					<button class="btn btn-primary"><a style="color: white;" href="form_update.php">Alterar Dados</a></button>
				</div>	
			</div>	
		</div>	
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>