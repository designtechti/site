<?
	if (!empty($_REQUEST['id'])) {
		$sql = "SELECT * FROM loja WHERE id = '{$_REQUEST['id']}'";
		$result = mysqli_query($conexao, $sql);
		$informacoes = mysqli_fetch_assoc($result);

		?>
		<div class="caixa">	
			<p class="titulo"><?=utf8_encode($informacoes['titulo'])?></p>
			<p><?=$informacoes['texto']?></p>
		</div>
		<?
	}
?>