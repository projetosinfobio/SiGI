<?php
	$servidor = '127.0.0.1';
	$banco = 'sigi';
	$usuario = 'root';
	$senha = '';
	// Conexão com o banco de dados
	$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
	if($conexao)
	{
		
		//exit();
	}
	if (mysqli_connect_errno() ) {
        die("Conexão falhou: " . mysqli_connect_errno());
    }
	mysqli_set_charset($conexao,"utf8");
?>