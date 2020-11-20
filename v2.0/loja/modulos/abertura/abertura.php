<?php 

		//require ('../../admin/includes/conexao.php');
		//var_dump($conexão);

		//mostra os erros
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);

?>

<ul class="listaProdutos">

	<div class="direita" style="margin: 30px 10px 0 0; float: right;">
		<form action="#" method="POST">	
			<input type="submit" name="buscar" value="Buscar" class="botao">
			<input type="text" name="pesquisa" placeholder="Digite a sua Pesquisa" class="pesquisa">
		</form>
		<br><br>
	</div>	

	<?php 

		// Faz uma busca dos produtos disponíveis na loja

		if (!empty($_POST['pesquisa'])) {
			$pesquisa = $_POST['pesquisa'];
			$sql = "SELECT * FROM loja WHERE nome_produto LIKE '%$pesquisa%' ORDER BY nome_produto";
			$result = mysqli_query($conexao, $sql);
			?>
			<li><h3 class="resultado_busca"><?php echo "Resultados da busca"?></h3></li>
		<?php

		}else if ($_POST['pesquisa'] != $result){
			?>
			<div class="erro_pesquisa">
				<li><p><?php echo "Sua pesquisa".$_POST['pesquisa']. " não encontrou nenhum produto correspondente."; ?></p></li>
				<li><p>Sugestões:</p></li>
				<li><p>Certifique que todas as palavras estão escritas corretamente;</p></li>
				<li><p>Tente palavras-chave diferentes;</p></li>
				<li>Tente palavras-chave mais genéricas.</li>
			</div>	
			<?php
		}else {
			$sql = "SELECT * FROM loja ORDER BY nome_produto";
			$result = mysqli_query($conexao, $sql);
		}

		// Exibe os produtos da loja, caso disponível.

		if (mysqli_num_rows($result) == 0) {
			?>
			<li><h3 class="resultado_busca2"><?php echo "Nenhum produto encontrado!"?></h3></li>

		<?php
		}else {
			while ($dados = mysqli_fetch_assoc($result)) {
				?>

				<li>
					<ul>
						<li><?= utf8_decode($dados['nome_produto'])?></li>
						<li>
							<?php 
								if (empty($dados['imagem'])) {
									?>
									<img src="admin/img/no-image.png" width="100px">
									<?php
								}else {
									?>
									<img src="admin/produtos/<?=$dados['imagem']?>" width="100px">
									<?php
								}	
							?>
						</li>
						<li>R$: <?= number_format($dados['valor'],2,',','.')?></li>
						<li><input type="button" value="Detalhes" onclick="document.location.href='index.php?p=produtos&a=detalhes&id=<?= $dados['id']?>'"></li>
					</ul>
				</li>

				<?php
			}
		}

	?>

</ul>