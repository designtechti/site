<?php
	
	session_name('login');
	session_start();

	if ($_SESSION['logado'] != true) {
		replace('index.php');
		die();	
	}
		include ('includes/functions.php');
		include('includes/conexao.php');

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Painel</title>
	<link href="css/padrao.css" rel="stylesheet">
	<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.mask.js"></script>    
    <script src="js/functions.js"></script>  
    <script src="js/ckeditor/ckeditor.js"></script>
</head>

<body>
<div id="topo">
	Ambiente Administrativo
</div>
<div id="menu">
		<?php 
			include ('includes/menu.php');
		?>
	</div>
	<div id="conteudo">
		<?php
			if (!empty($_GET['P']) && !empty($_GET['a'])) {
				include('modulos/'.$_GET['P'].'/'.$_GET['a'].'.php');
			}
				
		?>
	</div>
</body>
</html>
