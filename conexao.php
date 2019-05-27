<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "aulacrud";
	
	$con = new mysqli($servidor, $usuario, $senha, $banco);
	if($con->connect_errno){
		echo "<script>alert('Conexão com o banco de dados não foi realizada com sucesso');</script>";
	}
?>