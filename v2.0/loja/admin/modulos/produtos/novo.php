<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" href="/css/padrao.css">
		</head>
		<body>
			<div>
				<form action="painel.php?P=produtos&a=realizaCadastro" method="POST" enctype="multipart/form-data" id="formulario">
					<strong style="color: black;">Novo produto</strong>	
					<input type="text" name="titulo" placeholder="Título"> <br><br>
 					Envie uma imagem:
 					<input type="file" name="foto">
 					<input type="text" name="valor" placeholder="Valor"> <br><br>
 					<input type="text" name="estoque" class="" placeholder="Qtd. em estoque"> <br><br>
 					<textarea name="descricao" class="ckeditor" placeholder="Descrição"></textarea>
 					<select name="ativo">
 						<option value="S">Sim</option>
 						<option value="N">Não</option>
 					</select>
					<input type="submit" value="Cadastrar">
				</form>
			</div>
		</body>
	</html>
