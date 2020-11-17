<?php
	
	if (!empty($_FILES['foto']['name'])) {
		
		//Pega a extensão do arquivo
		$ext = strrchr($_FILES['foto']['name'], '.');
		//Mover arquivo do temporário para o public_html
		$foto = time().$ext;
		if(!move_uploaded_file($_FILES['foto']['tmp_name'], "img/produtos/$foto")) {
			echo "Impossível mover a imagem ao servidor";
		}else {
			unlink('img/produtos/'.$_POST['fotoAtual']);
	}

	}
	
	$titulo = $_POST['titulo'];
	$valor = $_POST['valor'];
	$estoque = $_POST['estoque'];
	$descricao = $_POST['descricao'];
	$ativo = $_POST['ativo'];
	$id = $_POST['id'];

	if (!empty($_FILES['foto']['name'])) {
		$sql = "UPDATE produtos SET
									titulo = '$titulo', 
									foto = '$foto', 
									valor = '$valor', 
									estoque = '$estoque', 
									descricao = '$descricao',
									ativo = '$ativo' 

									WHERE id = $id								
			";
			
	}else {
		$sql = "UPDATE produtos SET
									titulo = '$titulo', 
									valor = '$valor', 
									estoque = '$estoque', 
									descricao = '$descricao',
									ativo = '$ativo' 
							
									WHERE id = $id								
			";
	}	
			
	$result = mysqli_query($conexao, $sql);						

	if ($result == true) {
		echo 'Atualizado com sucesso';
	}else {
		echo 'Erro ao atualizar';
	}

?>