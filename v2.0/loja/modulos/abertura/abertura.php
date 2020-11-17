<ul class="listaProdutos">
	<?php	
	
		//mostra os erros
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);

		if (!empty($_POST['pesquisa'])) {
			$pesquisa = $_POST['pesquisa'];
			$sql = "SELECT * FROM produtos WHERE titulo LIKE '%$pesquisa%' ORDER BY titulo";
			$result = mysqli_query($conexao, $sql);

		}else {
			$sql = "SELECT * FROM produtos ORDER BY titulo";
			$result = mysqli_query($conexao, $sql);
		}

	?>

		<form action="index.php" method="POST">	
			<input type="text" name="pesquisa" placeholder="Digite a sua Pesquisa">
			<input type="submit" name="buscar" value="Buscar">
		</form>


		<?php
			if(mysqli_num_rows($result) == 0){
				echo 'Produto não encontrado';
			}else {

				while ($dados = mysqli_fetch_assoc($result)){			
			?>
				<li>
					<ul>
						<li><?= utf8_encode($dados['titulo']) ?></li>
						<li>
							<?php
								if (empty($dados['foto'])) {
									?>
									<img src="admin/img/no-image.png" width="100px">	
								<?php
								}else {
									?>
									<img src="admin/img/produtos/<?=$dados['foto']?>" width="100px">
								<?php
								}
							?>
						</li>                                    	
						<li>R$: <?= number_format($dados['valor'],2,',','.')?></li>
						<li><input type="button" value="Detalhes" onclick="document.location.href='index.php?p=produtos&a=detalhes&id=<?= $dados['id']?>'"></li>
					</ul>
				</li>
		<?	
			}
			}
		?>
</ul>