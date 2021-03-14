<?php 
	include ('assets/includes/conexao.php');
	include ('assets/includes/class/noticias.class.php');
?>
<!DOCTYPE HTML>
<!--
	Design Tech TI by DESIGN TECH TI | Web Development
	designtechti.com.br @designtechti
	Design & Tecnologia em Um só Lugar!
-->
<html lang="pt-br">
	<head>
		<title>Design Tech TI | Desenvolvimento Web</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" media="all" />
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="assets/css/lightbox.min.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo">
					<a href="index.php">
						<img src="images/logo.png" width="30%" style="float: left;">
					</a>
				</div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Início</a></li>
					<li><a href="index.php?p=conteudo&a=sobre">Sobre</a></li>
					<li><a href="index.php?p=conteudo&a=portifolio">Portifólio</a></li>
					<li><a href="index.php?p=conteudo&a=blog">Blog</a></li>
					<li><a href="loja/index.php">Loja Virtual</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section class="banner full">
				<article>
					<img src="images/slide01.jpg" alt="" />
					<div class="inner">
						<header>
							<p>Desenvolvimento de websites responsivos, Programação Front & Back-end.</p>
							<h2>Desenvolvimento Web</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide02.jpg" alt="" />
					<div class="inner">
						<header>
							<p>Interações com a Internet e dispositivos eletrônicos.</p>
							<h2>Internet das Coisas</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide03.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Manutenção & Suporte de TI em SO's Windows e Linux</p>
							<h2>Soluções em TI</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide04.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Notícias & curiosidades sobre tecnologia</p>
							<h2>Blog</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide05.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Edição de Audio e Vídeo</p>
							<h2>Edição Audio-Visual</h2>
						</header>
					</div>
				</article>
			</section>
 
			<div class="direita">
				<form class="pesquisar" action="conteudo/busca.php" method="GET">
					<input type="submit" value="Buscar" class="botao" />
					<input type="search" class="pesquisa" placeholder="Digite sua pesquisa">
				</form>
				<br><br>
			</div>

			<!-- Main -->
			<div class="transparente">
				<?php

					if (!empty($_GET['p']) && !empty($_GET['a'])) {
						
						include ('assets/includes/'.$_GET['p'].'/'.$_GET['a'].'.php');
					}else {
						include('assets/includes/conteudo/inicio.php');
					}
				?>
			</div>

			<br><br>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="https://discord.gg/KWV6RRbeCA"><img src="images/icons/discord.png" style="width: 25px; margin: -2px;"><span class="label" style="display:none;">Discord</span></a></li>
						<li><a href="https://youtube.com/channel/UCUxBoaZG39OSLA3-mexqSkg" class="icon fa-youtube"><span class="label">YouTube</span></a></li>
						<li><a href="mailto:mrc_490@hotmail.com" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						<li><a href="https://linkedin.com/in/designtechti" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
						<li><a href="https://github.com/designtechti" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="https://twitch.tv/designtechti" class="icon fa-twitch"><span class="label">Twitch TV</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; <a href="index.php" style="text-decoration: none;">Design Tech TI | Web Development</a> 2016 - <?= date("Y"); ?>. Todos os direitos reservados.
				</div>
			</footer>

		<!-- Scripts -->
			<script type="text/javascript" src="assets/js/jquery.min.js"></script>
			<script type="text/javascript" src="assets/js/jquery.scrollex.min.js"></script>
			<script type="text/javascript"src="assets/js/skel.min.js"></script>
			<script type="text/javascript" src="assets/js/util.js"></script>
			<script type="text/javascript" src="assets/js/main.js"></script>
			<script type="text/javascript" src="assets/js/lightbox.js"></script>
			<script type="text/javascript" src="assets/js/lightbox-plus-jquery.min.js"></script>
						
	</body>
</html>