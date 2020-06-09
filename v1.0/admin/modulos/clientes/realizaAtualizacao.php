<?php
	
	$dataNascimento = $_POST['dataNascimento'];
	$dataNascimento = explode ('/', $dataNascimento);
	$dataNascimento = implode ('-', array_reverse($dataNascimento));

	$cliente = new cliente();
	$cliente -> setCep($_POST['cep']);
	$cliente -> setCpf($_POST['cpf']);
	$cliente -> setDataNasc($dataNascimento);
	$cliente -> setTelefone($_POST['tel']);
	$cliente -> setEmail($_POST['email']);

	if(!empty($_POST['senha'])){
		$cliente -> setSenha(md5($_POST['senha']));
	}

	
	$cliente -> setEndereco($_POST['endereco']);
	$cliente -> setId($_POST['id']);
	$cliente -> setNome($_POST['nome']);
	$cliente -> setConexao($conexao);

	if ($cliente-> Atualizar()) {
		echo 'Atualizado com sucesso';
	}else {
		echo 'Erro ao atualizar';
	}

?>