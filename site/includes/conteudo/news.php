				<div id="manutencao">
					<h1>PÁGINA EM MANUTENÇÃO</h1>
					<img src="images/loading.png">
					<p>Em breve estará no ar. Aguarde!</p>
				</div>

<!-- 

				<p><a style="color: #3CC3FA;" href="index.php">Início</a> > <a style="color: #3CC3FA; font-weight: bold;" href="news.php">Notícias & Curiosidades</a></p>
				<div id="refs">
					<section id="referencias" class="flex">
						<ul id="lista">
							<li><h3>Referências Design</h3></li>
							<li><a href="http://www.stevecutts.com">Steve Cutts</a></li>
							<li><a href="http://www.tutoriaisphotoshop.net">Tutoriais Photoshop</a></li>
							<li><a href="http://www.indesignupgrade.com/?p=58">Tutoriais InDesign</a></li>
							<li><a href="http://www.tutorialaftereffects.com.br">Tutoriais After Effects</a></li>
							<li><a href="https://oeditor.com/2013/04/25/tutoriais-adobe-premiere">Tutoriais Premiere</a></li>
							<li><a href="http://www.coreldraw.com/br/pages/800382.html">Tutoriais CorelDraw</a></li>
							<li><a href="https://br.pinterest.com/categories/design/">Pinterest</a></li>
							<br>
						<li><h3>Referências Tech</h3></li>
							<li><a href="http://www.guiadohardware.net">Guia do Hardware</a></li>
							<li><a href="https://www.vivaolinux.com.br">Viva o Linux</a></li>
							<li><a href="http://www.techtudo.com.br">Tech Tudo</a></li>
							<li><a href="http://www.olhardigital.uol.com.br">Olhar Digital</a></li>
							<li><a href="https://www.sempreupdate.com.br">Sempre Update</a></li>
							<li><a href="https://www.diolinux.com.br">Diolinux</a></li>
							<li><a href="https://www.youtube.com/user/codigofontetv">Código Fonte TV</a></li>
							<li><a href="https://linuxconfig.org">Linux Config .ORG</a></li>
							<li><a href="https://canaltech.com.br">Canaltech</a></li>
							<li><a href="https://w3schools.com">W3 Schools</a></li>
							<li><a href="https://pt-stackoverflow.com">Stack Overflow</a></li>
						</ul>
					</section>	
				</div>
				<h1 style="margin-top: -50px;">Notícias & Curiosidades</h1>
				

					<br />

					<ul class="botoes">
						<li>
							<a href="https://facebook.com/sharer/sharer.php?u=designtechti.com.br/index.php?p=conteudo&a=news<?php $_GET['titulo']?> "><img src="images/logos-redes-sociais/facebook.png"></a>
						</li>
						<li>
							<a href="https://linkedin.com/sharer/sharer.php?u=designtechti.com.br/index.php?p=conteudo&a=news<?php $_GET['titulo']?> "><img src="images/logos-redes-sociais/linkedin.png"></a>
						</li>
						<li>
							<a href="https://api.whatsapp.com/send?text=designtechti.com.br/index.php?p=conteudo&a=news<?php $_GET['titulo']?> "><img src="images/logos-redes-sociais/whatsapp.png"></a>
						</li>
						<li>
							<a href="https://twitter.com/intent/tweet?url=designtechti.com.br/index.php?p=conteudo&a=news<?php $_GET['titulo']?> "><img src="images/logos-redes-sociais/twitter.png"></a>
						</li>
					</ul>	


					<?php
						$news = new noticias();
						$news -> setConexao($conexao);
						$array = $news -> Listar();
			
						if(count($array) == 0){
					?>
					 <fieldset><h4 style="text-align: center; color: #fff;">Nenhuma notícia cadastrada.</h4></fieldset> 

						<div style="border: 3px solid #06F; border-radius: 5px; padding: 20px;" class="flex">	
									 <a class="feed" href="news/'<?php $_GET['titulo'] ?>'.php">
										<h3><?=$dados['titulo']?>
										<div class="flex new">	
											<p class="flex" style="color: rgba(f,f,f,0.5);"><?=$dados['df']?></p>
											<p class="flex" style="color: rgba(f,f,f,0.5);"><?=$dados['hora']?></p>
										</div>
										</h3>
										<p><?=$dados['descricao']?></p>
										<p><?=$dados['tags']?></p>
									</a> 
									<a href="#">
										<h3>SUBLIME TEXT: O QUERIDINHO DOS PROGRAMADORES</h3>
										<p class="direita">06/03/2020</p>
										<p class="direita">10hs03min</p>
										<img style="width: 400px;" src="https://media-exp1.licdn.com/dms/image/C5612AQEcDD_emn3Png/article-inline_image-shrink_1000_1488/0?e=1590624000&v=beta&t=WNxBkenlpNHZDyCSy08M1_cL8CuzGFNP9kIvDCTE0lY">
										<p><i>"O que faz um profissional importante é seu conhecimento sobre as diversas áreas em que ele atua. Isso serve para qualquer profissional, do lixeiro ao alto executivo. Mas um outro fator importante a ser considerado são as ferramentas que o profissional utiliza. Já imaginou o quanto sofre um borracheiro sem um macaco? Profissional competente com as ferramentas certas é o primeiro passo para qualquer negócio ter sucesso[...]"</i></p>
									</a>
						</div>

						<br><hr><br>
						<div style="border: 3px solid #06F; border-radius: 5px; padding: 20px;" class="flex">	
									 <a class="feed" href="news/'<?php $_GET['titulo'] ?>'.php">
										<h3><?=$dados['titulo']?>
										<div class="flex new">	
											<p class="flex" style="color: rgba(f,f,f,0.5);"><?=$dados['df']?></p>
											<p class="flex" style="color: rgba(f,f,f,0.5);"><?=$dados['hora']?></p>
										</div>
										</h3>
										<p><?=$dados['descricao']?></p>
										<p><?=$dados['tags']?></p>
									</a> 
									<a href="#">
										<h3>SUBLIME TEXT: O QUERIDINHO DOS PROGRAMADORES</h3>
										<p class="direita">06/03/2020</p>
										<p class="direita">10hs03min</p>
										<img style="width: 400px;" src="https://media-exp1.licdn.com/dms/image/C5612AQEcDD_emn3Png/article-inline_image-shrink_1000_1488/0?e=1590624000&v=beta&t=WNxBkenlpNHZDyCSy08M1_cL8CuzGFNP9kIvDCTE0lY">
										<p><i>"O que faz um profissional importante é seu conhecimento sobre as diversas áreas em que ele atua. Isso serve para qualquer profissional, do lixeiro ao alto executivo. Mas um outro fator importante a ser considerado são as ferramentas que o profissional utiliza. Já imaginou o quanto sofre um borracheiro sem um macaco? Profissional competente com as ferramentas certas é o primeiro passo para qualquer negócio ter sucesso[...]"</i></p>
									</a>
						</div>

						<img style="width: 70px; padding: 20px;" src="images/backward.png"><img style="width: 70px; padding: 20px; float: right;" src="images/forward.png">
						
						<?php
							}else {
							//Lista todos os registros do banco na tela
							foreach ($array as $dados){
						?>
								
						<br><hr><br>
							<?php
								}
							}
							?>
				-->						