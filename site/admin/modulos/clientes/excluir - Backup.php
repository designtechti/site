<?php
 	$id = $_GET['id'];
	$query = " DELETE  FROM clientes WHERE id='$id'";
	
	$resultado = mysqli_query($conexao,$query);
	if($resultado){
		replace('painel.php?p=clientes&a=listar');	
	}else{
		echo 'Tente novamente, não foi possivel excluir.';
	}
?>