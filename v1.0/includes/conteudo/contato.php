
				<p><a style="color: #3CC3FA;" href="index.php">Início</a> > <a style="color: #3CC3FA; font-weight: bold;" href="contato.php">Contato</a></p>
				<h1 class="titulo">Faça um orçamento!</h1>
				<section id="form" class="flex" style="padding: 25px;">
					<div id="esquerda">
						<form class="contato" action="sucesso.php" method="POST">
							<label for="Nome">Nome: </label> 
							<input type="text" id="Nome" placeholder="Seu nome completo" size="20" maxlength="20" required="required" autofocus="autofocus" />

							<label for="E-mail">E-mail: </label>
							<input type="email" id="E-mail"	placeholder="usuario@site.com.br" size="20" maxlength="20" required="required" />

							<label for="Telefone">Telefone: </label>
							<input type="text" id="Telefone" min="0" max="99999999999" placeholder="(51) 99999-9999" />
						</form>  
					</div>

					<div id="direita">
						<form class="contato" action="sucesso.html" method="POST">
							<label for="Nome">Assunto: </label> 
							<input type="text" id="Assunto" placeholder="Suporte TI, Web Design, Edição Audio Visual, etc..." size="20" maxlength="20" required="required" autofocus="autofocus" />
							
							<label for="mensagem">Mensagem:</label>
							<textarea id="mensagem" rows="8" placeholder="Digite a sua mensagem aqui" required="required"></textarea>    
							<div>	
								<input type="submit" id="enviar" value="ENVIAR" name="BTEnvia" />
								<input type="reset" id="reset" value="LIMPAR" />
							</div>	
						</form>
					</div>
				</section>