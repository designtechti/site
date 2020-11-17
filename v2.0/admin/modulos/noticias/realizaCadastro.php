<?php
	
	$news = new noticias();
	$news -> setTitulo($_POST['titulo']);
	$news -> setDescricao($_POST['descricao']);
	$news -> setTags($_POST['tags']);
	$news -> setData($_POST['data']);
	$news -> setHora($_POST['hora']);
	$news -> setConexao($conexao);						

	if ($news->Cadastrar()) {
		echo 'Cadastrado com sucesso';
	}else {
		echo 'Erro ao cadastrar';
	}

?>