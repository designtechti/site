<?php
	
	$nome = $_POST['nome'];
	$telefone = $_POST['tel'];
	$endereco = $_POST['endereco'];
	$cep = $_POST['cep'];
	$cnpj = $_POST['cnpj'];
	$dataNascimento = $_POST['dataNascimento'];
	$dataNascimento = explode ('/', $dataNascimento);
	$dataNascimento = implode ('-', array_reverse($dataNascimento));
	$sql = "INSERT INTO fornecedores (
									nome, 
									endereco, 
									cep, 
									cnpj, 
									telefone) 

									VALUES (
										'$nome', 
										'$endereco', 
										'$cep', 
										'$cnpj', 
										'$telefone'
									)
			";
			
	$result = mysqli_query($conexao, $sql);						

	if ($result == true) {
		echo 'Cadastrado com sucesso';
	}else {
		echo 'Erro ao cadastrar';
	}

?>