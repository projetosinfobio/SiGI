<?php
	$servidor = 'localhost';
	$banco = 'sigi';
	$usuario = 'root';
	$senha = '';
	$csvfile = "Dados.csv";
	// Conexão com o banco de dados
	$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
	if(!$conexao)
	{
		echo "Erro ao conectar ao banco de dados!";
		exit();
	}
	else
	{
		echo "Conectou!";
		// verifica se o arquivo existe
		if(!file_exists($csvfile)) {    
			echo "File not found. Make sure you specified the correct path.\n";     
			exit; 
		}

		$row = 1; // variavel para controle de quantos registros tem no csv
        if (($handle = fopen("Dados.csv", "r")) !== FALSE) {
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				$num = count($data);
				echo "<p> $num campos na linha $row: <br /></p>\n";
				$row++;
				$Nro_USP = $data[1];
				$nome_us = $data[2];
				$senha = md5($data[1]);
				$email = $data[3];
				
				$CPF = $data[4];
				$RG = $data[5];
				$dta_nasc = $data[6];
				$rua = $data[7];
				$cidade = $data[8];
				$CEP = $data[9];
				$nro_resid = $data[10];
				$complemento = $data[11];
				$estado = $data[12];
				$celular = $data[13];
				
				$github = $data[14];
				$linkedin = $data[15];
				$facebook = $data[16];
				
				/*for ($c=1; $c < $num; $c++) {
					echo $data[$c] . "<br />\n";
				}*/
				$comandoSQLUsuario = "INSERT INTO Usuario VALUES (".$Nro_USP.", '".$nome_us."', '".$senha."', '".$email."', null, null);";
				$comandoSQLUser_dados = "INSERT INTO User_dados VALUES (".$CPF.", ".$Nro_USP.", '".$RG."', '".$dta_nasc."', null, '".$rua."', '".$cidade."', ".$CEP.", ".$nro_resid.", '".$complemento."', '".$estado."', ".$celular.", null);";
				$comandoSQLUser_redes_sociais = "INSERT INTO User_redes_sociais VALUES (".$Nro_USP.", '".$github."', '".$linkedin."', '".$facebook."');";
				
				echo $comandoSQLUsuario."\n";
				echo $comandoSQLUser_dados."\n";
				echo $comandoSQLUser_redes_sociais."\n";
				
				if (mysqli_query($conexao, $comandoSQLUsuario)) {
					if (mysqli_query($conexao, $comandoSQLUser_dados)) {
						if (mysqli_query($conexao, $comandoSQLUser_redes_sociais)) {
							echo "deu certo para ".$nome_us;
						}
					}
				}
			}
			mysqli_close($conexao);
			fclose($handle);
		}
	}
?>