<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" href="/css/padrao.css">
		</head>
		<body>
			<div>
				<form action="painel.php?P=fornecedores&a=realizaCadastro" method="POST" id="formulario">
					<strong style="color: black;">Novo Fornecedor</strong>	
					<input type="text" name="nome" placeholder="Nome"> <br><br>
 					<input type="text" name="endereco" placeholder="Endereço"> <br><br>
 					<input type="text" name="cep" class="cep" placeholder="CEP"> <br><br>
 					<input type="text" name="cnpj" class="cnpj" placeholder="CNPJ"> <br><br>
					<input type="text" name="tel" class="telefone" placeholder="Telefone"> <br><br>
 					<input type="submit" value="Cadastrar">
				</form>
			</div>
		</body>
	</html>
