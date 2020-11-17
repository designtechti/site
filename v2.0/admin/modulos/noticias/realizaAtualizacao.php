<?php
	
	$news = new noticias();
	$news -> setTitulo ($_POST['titulo']);
	$news -> setData ($_POST['data']);
	$news -> setHora ($_POST['hora']);
	$news -> setDescricao ($_POST['descricao']);
	$news -> setTags ($_POST['tags']);
	$news -> setId ($_POST['id']);
	$news -> setConexao ($conexao);

	$sql = "UPDATE news SET
									titulo = '$titulo', 
									data = '$data', 
									hora = '$hora', 
									descricao = '$descricao',
									tags = '$tags' 

									WHERE id = $id								
			";

	if ($news -> Atualizar()) {
		echo 'Atualizado com sucesso';
	}else {
		echo 'Erro ao atualizar';
	}

?>