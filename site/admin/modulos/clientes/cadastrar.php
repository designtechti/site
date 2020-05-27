<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" href="/css/padrao.css">
		</head>
		<body>
			<div>
				<form action="painel.php?P=clientes&a=realizaCadastro" method="POST" id="formulario">
					<strong style="color: black;">Novo Cliente</strong>	
					<input type="text" name="nome" placeholder="Nome"> <br><br>
 					<input type="text" name="tel" class="telefone" placeholder="Telefone"> <br><br>
 					<input type="email" name="email" placeholder="E-mail"> <br><br>
 					<input type="password" name="senha"> <br><br>
 					<input type="text" name="endereco" placeholder="Endereço"> <br><br>
 					<input type="text" name="cep" class="cep" placeholder="CEP"> <br><br>
 					<input type="text" name="cpf" class="cpf" placeholder="CPF"> <br><br>
 					<input type="text" name="dataNascimento" class="data" placeholder="Data de Nascimento"> <br><br>
					<input type="submit" value="Cadastrar">
				</form>
			</div>
		</body>
	</html>
