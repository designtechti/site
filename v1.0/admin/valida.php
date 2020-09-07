<?php
	//mostra os erros na tela 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL); 

	//cria sessoes no php
	session_name('login');
	session_start();
	include('includes/functions.php'); 
	include('includes/conexao.php'); 
	include('class/administradores.class.php'); 
	
	$validar = new administrador();
	echo $validar->setusuario($_POST['usuario']);
	echo $validar->setsenha(md5($_POST['senha']));
	$validar->setConexao($conexao);
	
	if(!$validar->Validar()){
		StringReplace('index.php?msg='.urlencode("Usuário ou senha inválidos"));
	}else{

		//Lista os usuários que estam conectados no painel administrativo
		$dados = $validar->Listar();
		
		$_SESSION['logado'] = true;
		$_SESSION['nome'] = $dados[0]['nome'];
		Header('Location:painel.php');//redirecionamento   
		if (isset($_SESSION['nome']))     
		echo 'Bem-Vindo, '. $_SESSION['nome'] .'.Você esta logado!';

	}
?>