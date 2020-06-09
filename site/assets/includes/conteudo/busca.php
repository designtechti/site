<?php 
	include 'buscar.class.php';
?>
				<p><a style="color: #3CC3FA;" href="index.html">Início</a> > <a style="color: #3CC3FA;" href="news.html">Busca</a></p>
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
						</ul>
					</section>	
				</div>
				<h1 style="margin-top: -50px;">Resultados da pesquisa</h1>
				<br />

				<?php
					$pesquisa = new busca();
					$pesquisa -> setConexao($conexao);
					$array = $pesquisa -> Buscar();
		
					if(count($array) == 0){
				?>
					<h4 style="text-align: center; color: #fff;">Nenhuma resultado encontrado.</h4>
					<?php
						}else {
						//Lista todos os registros do banco na tela
						foreach ($array as $dados){
					?>
							<fieldset>	
								<a class="feed" href="news/sublime-text.php">
									<h3><?=$dados['titulo']?>
									<div class="flex new">	
										<p class="flex" style="color: rgba(f,f,f,0.5);"><?=$dados['df']?></p>
										<p class="flex" style="color: rgba(f,f,f,0.5);"><?=$dados['hora']?></p>
									</div>
									</h3>
									<p><?=$dados['descricao']?></p>
									<p><?=$dados['tags']?></p>
								</a>
							</fieldset>
						<?php
							}
						}
						?>