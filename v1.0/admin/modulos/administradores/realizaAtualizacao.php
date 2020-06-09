<?php
	
	$admin = new administrador();
	$admin -> setId($_POST['id']);
	$admin -> setNome($_POST['nome']);
	$admin -> setUsuario($_POST['usuario']);
	$admin -> setSenha(md5($_POST['senha']));
	$admin -> setconexao($conexao);	

	if (!empty($_POST['senha'])) {
		$sql = "UPDATE users SET
									nome = '$nome', 
									usuario = '$usuario', 
									senha = '$senha'

									WHERE id = $id								
			";
	}else {
		$sql = "UPDATE users SET
									nome = '$nome', 
									usuario = '$usuario', 
									WHERE id = $id								
			";
	}

	if ($admin-> Atualizar()) {
		echo 'Atualizado com sucesso';
	}else {
		echo 'Erro ao atualizar';
	}

?>