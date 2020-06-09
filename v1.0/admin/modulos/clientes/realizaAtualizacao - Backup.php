<?php
	
	$nome = $_POST['nome'];
	$telefone = $_POST['tel'];
	$endereco = $_POST['endereco'];
	$cep = $_POST['cep'];
	$cpf = $_POST['cpf'];
	$id = $_POST['id'];
	$dataNascimento = $_POST['dataNascimento'];
	$dataNascimento = explode ('/', $dataNascimento);
	$dataNascimento = implode ('-', array_reverse($dataNascimento));
	$sql = "UPDATE clientes SET
									nome = '$nome', 
									telefone = '$telefone', 
									endereco = '$endereco', 
									cep = '$cep', 
									cpf = '$cpf', 
									dataNascimento = '$dataNascimento'

									WHERE id = $id								
			";
			
	$result = mysqli_query($conexao, $sql);						

	if ($result == true) {
		echo 'Atualizado com sucesso';
	}else {
		echo 'Erro ao atualizar';
	}

?>