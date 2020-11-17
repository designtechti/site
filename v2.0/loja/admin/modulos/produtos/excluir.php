<?php
 	$id = $_GET['id'];
	$query = " DELETE FROM produtos WHERE id='$id'";
	
	$resultado = mysqli_query($conexao,$query);
	if($resultado){
		unlink('img/produtos/'.$_GET['fotoAtual']);
		replace('painel.php?p=produtos&a=listar');	
	}else{
		echo 'Tente novamente, não foi possivel excluir.';
	}
?>