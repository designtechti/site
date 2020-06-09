<?php
	
	if (!empty($_FILES['foto']['name'])) {
		//Pega a extensão do arquivo
		$ext = strrchr($_FILES['foto']['name'], '.');
		//Mover arquivo do temporário para o public_html
		$foto = time().$ext;
		if(!move_uploaded_file($_FILES['foto']['tmp_name'], "img/produtos/$foto")) {
			echo "Impossível mover a imagem ao servidor";
		}

	}else {
		$foto = NULL;
	}
	


	$titulo = $_POST['titulo'];
	$valor = $_POST['valor'];
	$descricao = $_POST['descricao'];
	$ativo = $_POST['ativo'];
	$estoque = $_POST['estoque'];
	$sql = "INSERT INTO produtos (
									titulo, 
									foto, 
									valor, 
									descricao, 
									ativo, 
									estoque) 

									VALUES (
										'$titulo', 
										'$foto', 
										'$valor', 
										'$descricao', 
										'$ativo', 
										'$estoque'
									)
			";
			
	$result = mysqli_query($conexao, $sql);						

	if ($result == true) {
		echo 'Cadastrado com sucesso';
	}else {
		echo 'Erro ao cadastrar';
	}

?>