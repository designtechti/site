<?php

	//mostra os erros
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	//Comando que conecta no banco de dados do site designtechti.com.br
	$servername = 'localhost';
	$user = 'root';
	$password = '';
	$db = 'site';
	$conexao = mysqli_connect($servername,$user,$password,$db);
?>