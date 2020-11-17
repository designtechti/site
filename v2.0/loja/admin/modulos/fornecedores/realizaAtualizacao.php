<?php
	
	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];
	$cep = $_POST['cep'];
	$cnpj = $_POST['cnpj'];
	$telefone = $_POST['tel'];
	$id = $_POST['id'];
	$sql = "UPDATE fornecedores SET
									nome = '$nome', 
									endereco = '$endereco', 
									cep = '$cep', 
									cnpj = '$cnpj', 
									telefone = '$telefone' 

									WHERE id = $id								
			";
			
	$result = mysqli_query($conexao, $sql);						

	if ($result == true) {
		echo 'Atualizado com sucesso';
	}else {
		echo 'Erro ao atualizar';
	}

?>