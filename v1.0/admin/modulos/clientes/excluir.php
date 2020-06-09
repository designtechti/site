<?php
 	
 	$cliente = new cliente();
 	$cliente -> setId($_GET['id']);
 	$cliente -> setConexao($conexao);
		
	if($cliente->Excluir()){
		replace('painel.php?p=clientes&a=listar');	
		}else{
			echo 'Tente novamente, não foi possivel excluir.';
	}

?>