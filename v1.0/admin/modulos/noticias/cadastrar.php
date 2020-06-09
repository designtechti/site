<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" href="/css/padrao.css">
		</head>
		<body>
			<div>
				<form action="painel.php?P=noticias&a=realizaCadastro" method="POST" enctype="multipart/form-data" id="formulario" style="width: 100%;padding: 10px" >
					<strong style="color: #FFF;">Nova Notícia</strong> <br><br>	
					<input type="text" name="titulo" placeholder="Título"> <br><br>
					<input type="hidden" name="data" value="<?= date('Y-m-d')?>">
					<input type="hidden" name="hora" value="<?= date('H:i')?>">
					<input type="text" name="tags" placeholder="Tags"> <br><br>
					<div class="ckeditor" >	
		 				<textarea name="descricao" class="ckeditor" placeholder="Descrição"></textarea>
		 			</div>

 					<input type="submit" value="Cadastrar">
				</form>			
 			</div>
		</body>
	</html>
