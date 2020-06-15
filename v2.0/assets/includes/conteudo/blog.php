<!-- 
				<div id="manutencao">
					<h1>PÁGINA EM MANUTENÇÃO</h1>
					<img src="images/loading.gif">
					<p>Em breve estará no ar. Aguarde!</p>
				</div>

-->
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
				<h1 style="text-align: center; margin: 50px;">Notícias & Curiosidades</h1>

					<?php
						$news = new noticias();
						$news -> setConexao($conexao);
						$array = $news -> Listar();
			
						if(count($array) == 0){
					?>
					 <fieldset><h4 style="text-align: center; color: #fff;">Nenhuma notícia cadastrada.</h4></fieldset> 
					 <br><hr><br>

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