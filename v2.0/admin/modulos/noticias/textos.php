<form action="painel.php?P=textos&a=textos" method="post" enctype="multipart/form-data">
<?php
	
	$sql = "SELECT * FROM textos ORDER BY titulo";
	$result = mysqli_query($conexao, $sql);	
	
		?>
		<table width="100%">
			<tr>
				<td align="center">
					<select name="titulo" onchange="document.location.replace('painel.php?P=textos&a=textos&id='+this.value)">
						<option value="0"></option>
					<?php
						//Associa os títulos registrados do banco
						while ($dados = mysqli_fetch_assoc($result)) {
					?>		
						<option value="<?=$dados['id']?>" <?=$dados['id'] == $_GET['id'] ? 'selected' : NULL?>><?=utf8_encode($dados['titulo'])?></option>
					
					<?php
					}

					?>
					</select>
				</td>
			</tr>
			<?
				if (!empty($_REQUEST['id'])) {
					$sql = "SELECT * FROM textos WHERE id = '{$_REQUEST['id']}'";
					$result = mysqli_query($conexao, $sql);
					$textos = mysqli_fetch_assoc($result);
				}
			?>
				<tr>
					<td>
						<textarea placeholder="Descrição" class="ckeditor" name="texto"><?=$textos['texto']?></textarea> <br> <br>
						<input type="hidden" name="id" value="<?=$_REQUEST['id']?>">
					</td>
				</tr>
				<tr>
					<td align="center">
						<input type="submit" value="Atualizar" class="botao">
					</td>
				</tr>				
		</table>
</form>

<?php

	if ($_POST) {
		$texto = $_POST['texto'];
		$id = $_POST['id'];
		//$sql = "UPDATE textos SET texto='".$_POST['texto']."' WHERE id='".$_POST['id'];
		//$sql = "UPDATE textos SET texto='{$_POST['texto']}' WHERE id=' {$_POST['id']}";
		$sql = "UPDATE textos SET texto='$texto' WHERE id='$id'";
		if (!mysqli_query($conexao, $sql)) {
			alert('Erro ao atualizar');
		}else {
			replace ('painel.php?P=textos&a=textos&id='.$_POST['id']);
		}
	}


?>		