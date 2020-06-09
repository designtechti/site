<?php
	
	$nome = $_POST['nome'];
	$telefone = $_POST['tel'];
	$endereco = $_POST['endereco'];
	$cep = $_POST['cep'];
	$cpf = $_POST['cpf'];
	$dataNascimento = $_POST['dataNascimento'];
	$dataNascimento = explode ('/', $dataNascimento);
	$dataNascimento = implode ('-', array_reverse($dataNascimento));
	$sql = "INSERT INTO clientes (
									nome, 
									telefone, 
									endereco, 
									cep, 
									cpf, 
									dataNascimento) 

									VALUES (
										'$nome', 
										'$telefone', 
										'$endereco', 
										'$cep', 
										'$cpf', 
										'$dataNascimento'
									)
			";
			
	$result = mysqli_query($conexao, $sql);						

	if ($result == true) {
		echo 'Cadastrado com sucesso';
	}else {
		echo 'Erro ao cadastrar';
	}

?>