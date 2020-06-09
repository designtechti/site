<?php

	$news = new noticias();
	$news -> setId($_GET['id']);
	$news -> setConexao($conexao);
	$dados = $news -> Listar();
?>

<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" href="/css/padrao.css">
		</head>
		<body>
			<div>
				<form action="painel.php?P=noticias&a=realizaAtualizacao" method="POST" enctype="multipart/form-data" id="formulario" style="width: 100%;padding: 10px 150px 10px 10px">
					<strong style="color: #FFF;">Editar notícia</strong> <br><br> 	
					<input type="text" name="titulo" value="<?= $dados[0]['titulo'] ?>" placeholder="Título"> <br><br>
 					<input type="text" name="tags" value="<?= $dados[0]['tags'] ?>" placeholder="Tags"> <br><br>
 					<textarea name="descricao" class="ckeditor" placeholder="descricao"><?= $dados[0]['descricao'] ?></textarea> <br><br>
 					<input type="hidden" name="id" value="<?= $dados[0]['id'] ?>">
					<input type="submit" value="Atualizar">
				</form>
			</div>
		</body>
	</html>
