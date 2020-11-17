<ul class="menuPrincipal">
	<li><a href="modulos/abertura/abertura.php">Produtos</a></li>
	<li>
    	Informações
        <ul>
        	<?php
            	$sql = "SELECT * FROM informacoes ORDER BY titulo";
				$result = mysqli_query($conexao,$sql);
				
				while($dados = mysqli_fetch_assoc($result)){
					?>
                    	<li><a href="index.php?p=informacoes&a=informacoes&id=<?=$dados['id']?>"><?=utf8_encode($dados['titulo'])?></a></li>
                    <?php
				}
			?>        	
        </ul>
    </li>
	<li><a href="index.php?p=contato&a=contato">Contato</a></li> 
	<li><a href="index.php?p=carrinho&a=carrinho">Meu Carrinho</a></li>          
</ul>