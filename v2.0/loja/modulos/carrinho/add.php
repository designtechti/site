<?php
	
	$id = $_GET['id'];
	$sql = "SELECT * FROM produtos WHERE id = $id";
	$result = mysqli_query($conexao, $sql);
	$dados = mysqli_fetch_assoc($result);

	$_SESSION['aux'] = (empty($_SESSION['aux']) ? 0 : $_SESSION['aux']);

	$_SESSION['carrinho'][$_SESSION['aux']]['id'] = $dados['id'];
	$_SESSION['carrinho'][$_SESSION['aux']]['valor'] = $dados['valor'];
	$_SESSION['carrinho'][$_SESSION['aux']]['descricao'] = $dados['descricao'];
	$_SESSION['carrinho'][$_SESSION['aux']]['total'] = $_GET['qtd'] * $dados['valor'];
	$_SESSION['carrinho'][$_SESSION['aux']]['qtd'] = $_GET['qtd'];
	
	$_SESSION['aux'] += 1;

?>

<pre><?php var_dump($_SESSION['carrinho']);?></pre>