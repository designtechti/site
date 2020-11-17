<?php 	
	
	$id = $_GET['id'];
	$sql = "SELECT * FROM produtos WHERE id = $id";
	$result = mysqli_query($conexao, $sql);
	$dados = mysqli_fetch_assoc($result);
?>
<div class="detalhesProduto">
	<ul>
		<li>
			<?php
				if (!empty($dados['foto'])) {
			?>
				<img class="thumb" src="admin/img/produtos/<?=$dados['foto']?>" width="200px">
				<?php
				}
				
				?>				
		</li>
		<li>
			<strong><?= utf8_encode($dados['titulo']) ?></strong>
			 <br>            
			<p><?= $dados['descricao']?></p>			 
		</li>
		<li>
			<strong>R$: <?= number_format($dados['valor'],2,',','.')?></strong>
		</li>
		<li>
			<input type="button" value="Adicionar ao Carrinho" onclick="document.location.href='index.php?p=carrinho&a=add&id=<?=$dados['id']?>&qtd='+document.getElementById('qtd').value">
		</li>
		<li>
			<input type="number" placeholder="Quantidade" name="qtd" id="qtd">
		</li>
	</ul>
</div>