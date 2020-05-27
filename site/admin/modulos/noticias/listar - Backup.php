<table width="100%" border="1">
	<tr>
		<th>ID</th>
		<th>Título</th>
		<th>Foto</th>
		<th>Valor</th>
		<th>Qtd. em Estoque</th>
		<th>Descrição</th>
		<th>Status</th>
		<th colspan="8">Ação</th>
	</tr>
	<?php
		$sql = "SELECT * FROM produtos ORDER BY titulo";
		$result = mysqli_query($conexao, $sql);
		
		if(mysqli_num_rows($result) == 0){
	?>
		<tr>
			<th colspan="8">Nenhum registro encontrado.</th>
		</tr>
		<?php
		}else {
			//Lista todos os registros do banco na tela
		while ($dados = mysqli_fetch_assoc($result)){
		?>
			<tr>
				<td><?= $dados['id']?></td>
				<td><?= $dados['titulo']?></td>
				<td>
					<?
						if (!empty($dados['foto'])) {
							?>
								<img width="100px" src="img/produtos/<?= $dados['foto']?>">
							<?
						}else {
							?>

								<img width="100px" src="img/noImage.png">
							<?	
						}
					 ?>
					
				</td>
				<td><?= $dados['valor']?></td>
				<td><?= $dados['estoque']?></td>
				<td><?= $dados['descricao']?></td>
				<td><?= $dados['ativo']?></td>
				<td><a href="painel.php?P=produtos&a=editar&id=<?= $dados['id']?>"><img src="img/edit.png" alt="Editar registro" title="Editar registro"></a></td>
				<td><a href="#" onClick="if(confirm('Deseja realmente excluir este registro?')){document.location.replace('painel.php?P=produtos&a=excluir&id=<?= $dados['id']?>&fotoAtual=<?= $dados['foto']?>')}"><img src="img/delete.png" alt="Apagar registro" title="Apagar registro"></a></td>
			</tr>
		<?php
			};
		}
		?>
		
</table>