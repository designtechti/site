<?php

	//mostra os erros na tela
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	//Comando que conecta no banco de dados do site designtechti.com.br
	$conexao = mysqli_connect('localhost','root','455301789Bst_490','site');
?>