<?php
	include('includes/conexao.php');
	include ('admin/class/noticias.class.php');
?>

<!DOCTYPE html>
	<html lang="PT-br">
		<head>
			<meta charset="utf-8">
			<meta name="author" content="Marcelo Goulart Rodrigues Junior">
			<title>Design Tech TI | Desenvolvimento Web</title>
			<link rel="shortcut icon" href="images/favicon.png" />
			<link rel="stylesheet" href="css/estilos.css" />
			<link rel="stylesheet" type="text/css" href="engine1/style.css" />
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
			<script type="text/javascript" src="engine1/jquery.js"></script>
			<script type="text/javascript" src="js/gallery.js"></script>
			<!-- jQuery library -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
			<!-- Latest compiled JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		</head>
		
		<body>
			
			<?php
				include('includes/nav.php');
			?>

			<header style="border-bottom: 5px solid #00BFFF;">
				<?php
					include('includes/header.php');
				?>
			</header>
			<div class="direita">
				<?php
					include('includes/pesquisar.php');
				?>
				<br><br>
			</div>
			
			<div class="transparente">
				<?php

					if (!empty($_GET['p']) && !empty($_GET['a'])) {
						
						include ('includes/'.$_GET['p'].'/'.$_GET['a'].'.php');
					}else {
						include('includes/conteudo/inicio.php');
					}
				?>
			</div>

			<?php
				include('includes/footer.php');
			?>

		</body>
	</html>