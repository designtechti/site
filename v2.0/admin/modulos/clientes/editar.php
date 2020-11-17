<?php

	$cliente = new cliente();
	$cliente -> setId($_GET['id']);
	$cliente -> setConexao($conexao); 
	$array = $cliente->Listar();	
?>

<!DOCTYPE html>	
	<html>
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" href="/css/padrao.css">
		</head>
		<body>
			<div>
				<form action="painel.php?P=clientes&a=realizaAtualizacao" method="POST" id="formulario">
					<strong style="color: black;">Editar Cliente</strong>	
					<?php
						//foreach ($cliente->Listar() as $dados) {
							$dados = $cliente->Listar();
					?>
					<input type="text" name="nome" value="<?= $dados[0]['nome'] ?>" placeholder="Nome"> <br><br>
 					<input type="text" name="tel" value="<?= $dados[0]['telefone'] ?>" class="telefone" placeholder="Telefone"> <br><br>
 					<input type="email" name="email" value="<?= $dados[0]['email'] ?>" placeholder="E-mail"> <br><br>
 					<input type="password" name="senha" > <br><br>
 					<input type="text" name="endereco" value="<?= $dados[0]['endereco'] ?>" placeholder="Endereço"> <br><br>
 					<input type="text" name="cep" value="<?= $dados[0]['cep'] ?>" class="cep" placeholder="CEP"> <br><br>
 					<input type="text" name="cpf" class="cpf" value="<?= $dados[0]['cpf'] ?>" placeholder="CPF"> <br><br>
 					<input type="text" name="dataNascimento" value="<?= $dados[0]['df'] ?>" class="data" placeholder="Data de Nascimento"> <br><br>
					<input type="hidden" name="id" value="<?= $dados[0]['id'] ?>">
					<input type="submit" value="Atualizar">
				</form>
			</div>
		</body>
	</html>
