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
	$cliente -> setSenha(md5($_POST['senha']));
	$cliente -> setEndereco($_POST['endereco']);
	$cliente -> setNome($_POST['nome']);
	$cliente -> setConexao($conexao);

	if ($cliente->Cadastrar()) {
		echo 'Cadastro realizado com sucesso!';
	}else {
		echo 'Erro ao cadastrar! Tente novamente.';
	}
?>