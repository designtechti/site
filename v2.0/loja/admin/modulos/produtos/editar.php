<?php

	$id = $_GET['id'];
	$query = "SELECT * FROM produtos WHERE id=$id";
	$result = mysqli_query($conexao, $query);
	$dados = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" href="/css/padrao.css">
		</head>
		<body>
			<div>
				<form action="painel.php?P=produtos&a=realizaAtualizacao" method="POST" enctype="multipart/form-data" id="formulario">
					<strong style="color: black;">Editar produto</strong>	
					<input type="text" name="titulo" value="<?= $dados['titulo'] ?>" placeholder="Título"> <br><br>
 					<input type="file" name="foto" value="<?= $dados['foto'] ?>" placeholder="Foto">
	 					<? if (!empty($dados['foto'])) {
	 						?> <img width="100px" src="img/produtos/<?= $dados['foto']?>"> <img src="img/delete.png" alt="Apagar registro" title="Apagar registro" onClick="if(confirm('Deseja realmente excluir esta imagem?')){document.location.replace('painel.php?P=produtos&a=excluir&id=<?= $dados['id']?>&fotoAtual=<?= $dados['foto']?>')}"> <br><br> <?
	 					}else {
	 						?>
	 						<img width="100px" src="img/noImage.png">
	 						<?
	 						} ?> 
 					<input type="text" name="valor" value="<?= $dados['valor'] ?>" placeholder="Valor"> <br><br>
 					<input type="text" name="estoque" value="<?= $dados['estoque'] ?>" placeholder="estoque"> <br><br>
 					<textarea name="descricao" class="ckeditor" placeholder="descricao"><?= $dados['descricao'] ?></textarea> <br><br>
 					<select name="ativo">
 						<option value="S" <?= $dados['ativo'] == 'S' ? 'selected' : NULL ?>>Sim</option>
 						<option value="N" <?= $dados['ativo'] == 'N' ? 'selected' : NULL ?>>Não</option>
 					</select>
 					<input type="hidden" name="fotoAtual" value="<?= $dados['foto']?>">
 					<input type="hidden" name="id" value="<?= $dados['id'] ?>">
					<input type="submit" value="Atualizar">
				</form>
			</div>
		</body>
	</html>
