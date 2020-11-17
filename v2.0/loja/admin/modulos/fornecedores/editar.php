<?php

	$id = $_GET['id'];
	$query = "SELECT * FROM fornecedores WHERE id=$id";
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
				<form action="painel.php?P=fornecedores&a=realizaAtualizacao" method="POST" id="formulario">
					<strong style="color: black;">Editar Fornecedores</strong>	
					<input type="text" name="nome" value="<?= $dados['nome'] ?>" placeholder="Nome"> <br><br>
 					<input type="text" name="endereco" value="<?= $dados['endereco'] ?>" placeholder="Endereço"> <br><br>
 					<input type="text" name="cep" value="<?= $dados['cep'] ?>" class="cep" placeholder="CEP"> <br><br>
 					<input type="text" name="cnpj" class="cnpj" value="<?= $dados['cnpj'] ?>" placeholder="CNPJ"> <br><br>
 					<input type="text" name="tel" value="<?= $dados['telefone'] ?>" class="telefone" placeholder="Telefone"> <br><br>
					<input type="hidden" name="id" value="<?= $dados['id'] ?>">
					<input type="submit" value="Atualizar">
				</form>
			</div>
		</body>
	</html>
