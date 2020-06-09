<?php
	session_name('login');
	session_start();
	include ('includes/functions.php');

	if ($_SESSION['logado'] != true) {
		replace('index.php');
		die();	
	}
		include('includes/conexao.php');

		////////////////////////////////
		//          Classes           //
		////////////////////////////////

		include('class/clientes.class.php');
		include('class/noticias.class.php');
		include('class/administradores.class.php');

?>

<!doctype html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Design Tech | Painel Administrativo</title>
			<link href="css/padrao.css" rel="stylesheet">
			<link rel="shortcut icon" href="../images/favicon.png" />
			<script src="js/jquery-3.2.1.min.js"></script>
			<script src="js/jquery.mask.js"></script>    
			<script src="js/functions.js"></script>  
			<script src="js/ckeditor/ckeditor.js"></script>
		</head>

		<body style="background: url('img/fundo.jpg')">
			<div id="topo">
				Ambiente Administrativo
			</div>
			<div id="menu">
				<?php 
					include ('includes/menu.php');
				?>
			</div>
			
			<?php
				include ('modulos/home/home.php');
				
				if (!empty($_GET['P']) && !empty($_GET['a'])) {
					?>	
						<div class="conteudo">
							<?php
								if (!empty($_GET['P']) && !empty($_GET['a'])) {
									include('modulos/'.$_GET['P'].'/'.$_GET['a'].'.php');
								}
							?>
						</div>
					<?php	
				}
			?>
				
		</body>
	</html>