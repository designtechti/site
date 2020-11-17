<?php
	
	//mostra os erros
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	SESSION_NAME('site');
	SESSION_START();
	include('admin/includes/conexao.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Minha loja virtual</title>
	<link href="css/loja.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon.ico" />
</head>

<body>
	<header>
		<a href="index.php"><img src="img/logo.png" class="logo" width="25%"></a>
		<a href="login.php" style="color: #FFF; padding: 50px; float: right; display: inline-block;"><!--<img src="img/icons/user.png">--><img class="direita" src="img/icons/login.png" title="Login" alt="Login"></a>
	</header>
	<nav>
		<?php
			include ('modulos/menu/menu.php')
		?>
	</nav>
	<section>
		<?
			if (!empty($_GET['p']) && !empty($_GET['a'])) {
				include ('modulos/'.$_GET['p'].'/'.$_GET['a'].'.php');
			}else {
				include ('modulos/abertura/abertura.php');
			}
		?>
	</section>
	<footer>
		<div class="copyright">
			&copy; <a href="index.php" style="text-decoration: none;">Design Tech TI | Web Development</a> 2016 - <?= date("Y"); ?>. Todos os direitos reservados.
		</div>
	</footer>

</body>
</html>