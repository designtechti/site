<?php 
	//mostra os erros na tela
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Design Tech | Painel Administrativo</title>
	<link href="css/padrao.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon.png" />
</head>

<body>
	<header class="headerLogin">
		&nbsp;
	</header>
	<div id="topo">
		Ambiente Administrativo
	</div>
	<div id="login">
		<form action="valida.php" method="post">
			<ul>
				<li>
					<input type="text" placeholder="Usuário" name="usuario">
				</li>
				<li>
					<input type="password" placeholder="Senha" name="senha">    
				</li>
				<li>
					<input type="submit" value="Entrar">                
				</li>
				<li style="color: red; font-weight: bold;">
					<?php
						//mostra a mensagem de erro caso o usuário e/ou a senha estejam incorretos
						if (isset($_GET['msg']))
						echo $_GET['msg']; 
					?>
				</li>
			</ul>
		</form>	
	</div>	
</body>
</html>


