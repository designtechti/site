<table width="100%" border="1">
	<tr>
		<th>ID</th>
		<th>Nome</th>
		<th>Telefone</th>
		<th>Data de Nascimento</th>
		<th colspan="5">Ação</th>
	</tr>
	<?php
		$sql = "SELECT *, DATE_FORMAT(dataNascimento, '%d/%m/%Y') AS DataFormatada FROM clientes ORDER BY nome";
		$result = mysqli_query($conexao, $sql);
		
		if(mysqli_num_rows($result) == 0){
	?>
		<tr>
			<th colspan="5">Nenhum registro encontrado.</th>
		</tr>
		<?php
		}else {
			//Lista todos os registros do banco na tela
		while ($dados = mysqli_fetch_assoc($result)){
		?>
			<tr>
				<td><?= $dados['id']?></td>
				<td><?= $dados['nome']?></td>
				<td><?= $dados['telefone']?></td>
				<td><?= $dados['DataFormatada']?></td>
				<td><a href="painel.php?P=clientes&a=editar&id=<?= $dados['id']?>"><img src="img/edit.png" alt="Editar registro" title="Editar registro"></a></td>
				<td><a href="#" onClick="if(confirm('Deseja realmente excluir este registro?')){document.location.replace('painel.php?P=clientes&a=excluir&id=<?= $dados['id']?>')}"><img src="img/delete.png" alt="Apagar registro" title="Apagar registro"></a></td>
			</tr>
		<?php
			};
		}
		?>
		
</table>