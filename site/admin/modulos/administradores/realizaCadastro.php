<?php
	
	$admin = new administrador();
	$admin -> setId($_POST['id']);
	$admin -> setNome($_POST['nome']);
	$admin -> setUsuario($_POST['usuario']);
	$admin -> setSenha(md5($_POST['senha']));
	$admin -> setconexao($conexao);						

	if ($admin -> Cadastrar()) {
		echo 'Cadastrado com sucesso';
	}else {
		echo 'Erro ao cadastrar';
	}

?>