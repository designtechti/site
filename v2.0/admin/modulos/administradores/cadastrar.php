<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" href="/css/padrao.css">
		</head>
		<body>
			<div>
				<form action="painel.php?P=administradores&a=realizaCadastro" method="POST" id="formulario">
					<strong style="color: #FFF;">Novo administrador</strong><br><br>	
					<input type="text" name="nome" placeholder="Nome" required="required"> <br><br>
 					<input type="text" name="usuario" class="usuario" placeholder="Usuário" required="required"> <br><br>
 					<input type="password" name="senha" placeholder="Senha" required="required"><br><br>
					<input type="submit" value="Cadastrar">
				</form>
			</div>
		</body>
	</html>
