<table width="100%">
	<tr>
		<th>ID</th>
		<th>Título</th>
		<th>Data</th>
		<th>Hora</th>
		<th>Descrição</th>
		<th>Tags</th>
		<th colspan="8">Ação</th>
	</tr>
	<?php
		$news = new noticias();
		$news ->setConexao($conexao);
		$array = $news -> Listar();
		
		if(count($array) == 0){
	?>
		<tr>
			<th colspan="8">Nenhum registro encontrado.</th>
		</tr>
		<?php
		}else {
			//Lista todos os registros do banco na tela
		foreach ($array as $dados){
		?>
			<tr>
				<td><?= $dados['id']?></td>
				<td><?= $dados['titulo']?></td>
				<td><?= $dados['data']?></td>				
				<td><?= $dados['hora']?></td>
				<td><?= $dados['descricao']?></td>
				<td><?= $dados['tags']?></td>
				<td><a href="painel.php?P=noticias&a=editar&id=<?= $dados['id']?>"><img src="img/edit.png" alt="Editar registro" title="Editar registro"></a></td>
				<td><a href="#" onClick="if(confirm('Deseja realmente excluir este registro?')){document.location.replace('painel.php?P=noticias&a=excluir&id=<?= $dados['id']?>')}"><img src="img/delete.png" alt="Apagar registro" title="Apagar registro"></a></td>
			</tr>
		<?php
			};
		}
		?>
		
</table>