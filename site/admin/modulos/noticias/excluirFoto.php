<?php

	$id = $_GET['id'];
	$query = " UPDATE produtos SET foto='' WHERE id='$id'";
	
	$resultado = mysqli_query($conexao,$query);
	if($resultado){
		@unlink('img/produtos/'.$_GET['fotoAtual']);
		replace("painel.php?p=produtos&a=editar&id=$id");	
	}else {
		echo 'Erro ao excluir foto';
	}

?>