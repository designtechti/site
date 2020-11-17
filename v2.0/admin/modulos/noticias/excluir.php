<?php
 	
 	$news = new noticias();
 	$news -> setId ($_GET['id']);
 	$news -> setConexao ($conexao);
		
	if($news -> Excluir()){
		//replace('painel.php?P=noticias&a=listar');	
	}else{
		echo 'Tente novamente, não foi possivel excluir.';
	}
?>