<?php 
	include ('assets/includes/conexao.php');
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
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" href="images/favicon.png" />
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo">
					<a href="index.php">
						<img src="images/logo.png">
						<span>DESIGN TECH TI</span>
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

			<div class="transparente">
				<?php

					if (!empty($_GET['p']) && !empty($_GET['a'])) {
						
						include ('assets/includes/'.$_GET['p'].'/'.$_GET['a'].'.php');
					}else {
						include('assets/includes/conteudo/inicio.php');
					}
				?>
			</div>
		-->

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="https://twitter.com/designtechti" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://facebook.com/designtechti" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://instagram.com/designtechti" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="mailto:mrc_490@hotmail.com" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; <a href="index.php" style="text-decoration: none;">Design Tech TI | Web Development</a> 2016 - <?= date("Y"); ?>. All rights reserved.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			
	</body>
</html>