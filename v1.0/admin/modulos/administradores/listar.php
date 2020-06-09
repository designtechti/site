<table width="100%">
	<tr>
		<th>ID</th>
		<th>Nome</th>
		<th>Usuário</th>
		<th colspan="5">Ação</th>
	</tr>
	<?php
		
		$admin = new administrador();
		$admin -> setConexao($conexao);
		$array = $admin -> Listar();

		if(count($array) == 0){
	?>
		<tr>
			<th colspan="5">Nenhum registro encontrado.</th>
		</tr>
		<?php
		}else {
			//Lista todos os registros do banco na tela
		foreach ($array as $dados){
		?>
			<tr>
				<td><?= $dados['id']?></td>
				<td><?= $dados['nome']?></td>
				<td><?= $dados['usuario']?></td>
				<td><a href="painel.php?P=administradores&a=editar&id=<?= $dados['id']?>"><img src="img/edit.png" alt="Editar registro" title="Editar registro"></a></td>
				<td><a href="#" onClick="if(confirm('Deseja realmente excluir este registro?')){document.location.replace('painel.php?P=administradores&a=excluir&id=<?= $dados['id']?>')}"><img src="img/delete.png" alt="Apagar registro" title="Apagar registro"></a></td>
			</tr>
		<?php
			};
		}
		?>		
</table>