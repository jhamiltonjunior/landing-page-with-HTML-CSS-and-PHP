<?php
	date_default_timezone_set('America/Sao_Paulo');
	//$pdo = new PDO('mysql:host=localhost;dbname=database','root','');



	if(isset($_POST['acao'])){
		$email = $_POST['email'];
		$momento_registro = date('Y-m-d H:i:s');

		$sql = $pdo->prepare("INSERT INTO `email` VALUES (null,?,?)");

		$sql->execute(array($email,$momento_registro));
	}

	if(isset($_POST['acao-games'])){
		$email_games = $_POST['email-games'];
		$registro_games = date('Y-m-d H:i:s');

		$sql_games = $pdo->prepare("INSERT INTO `email` VALUES (null,?,?)");

		$sql_games->execute(array($email_games,$registro_games));
	}

	if(isset($_POST['acao-fullstack'])){
		$email_fullstack = $_POST['email-full-stack'];
		$registro_fullstack = date('Y-m-d H:i:s');

		$sql_fullstack = $pdo->prepare("INSERT INTO `email` VALUES (null,?,?)");

		$sql_fullstack->execute(array($email_fullstack,$registro_fullstack));
	}


?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mini Curso Front-End</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0" />
		<meta name="description" content="Mini curso de front-end totalmente gratuito que te ensinará o básico de HTML e CSS para futuramente você desenvolver os seus próprios projetos." />
		<meta name="keywords" content="programador full-stack, programador back-end, front-end, programacao back-end,programacao front-end,programador front-end,curso de programador, danki code" />
		<meta name="author" content="José Hamilton Santos Júnior" />
		<link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet" />
		
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/media/media.css" />
		<link rel="stylesheet" type="text/css" href="css/keyframes/keyframes.css" />
	</head>

<body>

<header class="headerdapagina">

	<section class="section-video">

		<div class="primeiro-titulo">
			<h1 id="h1">Aprenda a CODAR DE <span style="color: orange;">GRAÇA</span> SEM <span style="color: orange;">SAIR DE CASA</span>:</h1>
			<h2 id="h2">O Mini Curso Que Vai Mudar a Sua Vida!</h2>
		</div>

		<div class="classepadrao">


			<div class="video-de-venda">

				

				<iframe src="https://www.youtube.com/embed/_OmhoKvjD9U"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


				<?php

					$acao = filter_input(INPUT_POST,"acao");

					if($acao === NULL){

				?>
				<form method="post" class="formulario-do-video">
					<fieldset>
						<h2>Quer Ter a Oportunidade de <span>Aprender a Programar de Graça</span>?</h2>
						<input type="email" required placeholder="Insira o seu melhor Email" name="email" />
						<div class="botaoenviar">
							<input type="submit" value="ENVIAR" name="acao" />
						</div>
						
					</fieldset>
				</form><!--formulario-do-video-->

				<?php } else{ ?>

				<div style="display: inline-block; padding: 20px 40px; background-color: white; margin: 10px 0 30px 0; border-radius:15px;">

					<h2>Em breve você receberá um <span style="background-color: orange;">Email de confirmação!</span> :-D</h2>
				</div>

				<?php } ?>
				
				
			</div><!--video-de-venda-->

		</div><!--classepadrao-->
	</section><!--section-video-->



	

	<section class="section-chamada">
		<div class="classepadrao">
			<h2>Veja Algumas das Linguagens de Programação <span>Mais Usadas do Mundo</span>!</h2>
			<div class="btn-ver-artigo">
				<a href="#" target="_blank">
					<h2>Veja todo o Artigo!</h2>
				</a>
			</div>
		</div><!--classepadrao-->
	</section><!--section-chamada-->

</header>


<main>
	<section class="section-explicacao">
		<div class="classepadrao">
			<div>
				<h2><b>Com Este Mini Treinamento Você Vai:</b></h2>
			</div>
			
			<div class="explicacao-left">
				<div>
					<p class="border1">Vai aprender a ter um código organizado, onde você não terá dificuldade se futuramente tiver que retornar a reutilizar o seu código</p>
				</div>

				<div>
					<p class="border2">As melhores ferramentas que iram te auxiliar na sua carreira como Desenvolvedor Web</p>
				</div>
			</div><!--explicaca left-->

			<div class="explicacao-right">
				<div>
					<p class="border3">Vai aprender o <b>BÁSICO</b> sobre programar em HTML e CSS, para futuramente <b>criar os seus proprios projetos</b></p>
				</div>
				<div>
					<p class="border4"> Medite nessa palavra: Disse-lhe Jesus: Eu sou o caminho, e a verdade e a vida; ninguém vem ao Pai senão por mim... João 14:6</p>
				</div>
			</div><!--explicaca right-->
			<div class="clear"></div>

		</div><!--classepadrao-->
	</section><!--section explicacao-->






<!-- DEPOIS CUSTOMIZAR AQUI COM A TAG <B></B> OU COLOCAR UM SPAN E NO CSS COLOCAR TODOS OS SPAN'S COMO NEGRITO -->






	<section class="section-artigo">

		<div class="classepadrao">
			<div class="imagem-principal">
				<div class="imagem-chamada">
				</div><!-- imagem-chamada -->

				<div class="primeiro-anuncio-complementar anuncio-complementar">
					<div class="anuncio primeiro-anuncio">
						<a href="https://go.hotmart.com/S18044671D">
							<img src="imagens/seo.jpg" />
							<p>107 Dicas de Otimização de Sites – SEO do Básico ao MUITO Avançado. Aprenda a otimizar o site dos seus <span style="color:#5e3ea1;">clientes!</span></p>
							<p style="float:left; margin-left:5px;">Saiba mais! &#10137;</p>
						</a>
					</div> <!-- anuncio-->

					<div class="anuncio segundo-anuncio">
						<a target="_blank" href="https://hotm.art/mA0DgLF">
							<img src="imagens/eb.jpg" />
							<p>Aprenda a construir, com menos esforço e tempo, layouts para web através de HTML/CSS.</p>
							<p>Clique aqui e Saiba mais!</p>

						</a>
					</div> <!-- anuncio -->
					
				</div> <!-- anuncio-complementar -->

				<div class="clear"></div>
			</div><!-- imagem-principal -->
			
			<div class="redeSocial redes-sociais">
				<a target="_blank" href="https://www.facebook.com/CodigoExpert-100855051498198/?ref=aymt_homepage_panel&eid=ARBsIrB21PHpfeFQmewqD88Vs4RvZzXl8QDq9b5OKBODt0It-YNrr8nSAH_crsjgQgEMhmAWxLyxbjdI">
					<div class="pagina-do-facebook"></div>
				</a>
					
				<a target="_blank" href="https://www.instagram.com/codigo.expert/">
					<div class="perfil-do-instagram"></div>
				</a>
	
				<a target="_blank" href="https://www.linkedin.com/in/hamilton-c%C3%B3digoexpert-a5ba28196/">
					<div class="redeSocial-Linkedin perfil-do-linkedin"></div>
				</a>
				
			</div><!--redes sociais-->
			<!-- <div class="clear"></div> -->

			
			<article class="classepadrao">
				<h2>Você Sabe o Que Faz um Programador Front-End?</h2>

				<p>Quais linguagens você pode usar no desenvolvimento web na parte do Front-End?</p>

				<p>Mas antes de aprender sobre uma Linguagem de programação.... Você já aprendeu lógica de programação?</p>

				<p>Talvez hoje você escolha uma linguagem de programação, aprenda sobre ela, mas depois tome a decisão de aprender outra e passe dificuldades para aprender esta outra linguagem...</p>

				<p>Bom... com lógica de programação você vai aprender está outra linguagem de uma forma "menos difícil" se é que me entende.</p>

				<h2>Mas o que é Front-End?</h2>

				<p>Front-End é a parte do client-side, está é toda a parte do site onde o usuário vê.</p>

				<p>Mas especificamente, o site é dividido em duas partes, a parte do Back-End ou server-side (essa o usuário não vê), e a parte do Front-End ou client-side a que eu expliquei um pouco acima.</p>

				<h3>Mas enfim, existe várias linguagens, mas entre elas existem:</h3>
				<p>Javascript (está linguagem tem vários frameworks que podem te possibilitar até mesmo a desenvolver no back-end).</p>

				<p>HTML é o princípio para quem quer aprender a desenvolver web <b>(está aqui é recomendável que você aprenda até mesmo se for fazer Back-End)</b>.</p>

				<p>CSS: Para aprender a desenvolver websites, você também precisa aprender a aplicar estilos nele, isso quem faz é o CSS, sem ele você só consegue aplicar o básico de um site, ou seja, texto, imagens... Nada muito bonito!</p>

				<p>Se você quiser, aprender o Front-End, também indico que você aprenda, JQuery e Bootstrap.</p>

				<h2>Mas e um programador Back-End o que ele faz?</h2>
				<h3 style="color:#5e3ea1; text-decoration:underline;">Jesus está voltando! Leia a Bíblia.</h3>

				<p>Bem... talvez você não saiba, mas para um site "rodar" ele precisa de alguns fatores muito importantes.</p>

				<p>Mas os fatores que eu estou dizendo não é uma hospedagem, domínio, nem nada do tipo.</p>

				<p>Os fatores que eu venho falar aqui são apenas dois...</p>
				<p>São eles o Back-End ou server-side, e o Front-End que também pode ser chamado de client-side.</p>

				<p>O Back-End por sua vez, é a parte de "traz" do site, ou o servidor.</p>

				<h3>Essa parte o usuário não pode vê</h3>
				<p>Essa parte o seu cliente/usuário não pode vê quando está acessando o seu site.</p>

				<p><b>Por exemplo</b>, o seu cliente/usuário pode ver o Front-End quando estiver acessando o seu site.</p>

				<h3>Como?!</h3>

				<p>É bem simples, como o <b>Back-End é a parte que o cliente não vê</b>, todavia o Front-End é o oposto disso, ou seja, é tudo o que ele vê, desde imagens, videos, textos, etc.</p>

				<p>Até o código do Front-End do seu site o usuário pode vê.</p>
				<p>Enfim...</p>

				<p>O programador Back-End se <b>preocupa na segurança</b>, <b>banco de dados</b>, na <b>resposta do servidor</b>, e entre outras coisas.</p>
				<h2>Quais linguagens usar no back-end?</h2>
				<p>Linguagens que são usadas na parte do Back-End:</p>

				<p>PHP, SQL, Java, você pode usar também o framework do JavaScript o Node.js, e diversas outras linguagens.</p>
				<h2>Qual a vantagem de virar um Programador Full-Stack?</h2>

				<h4>(Além de ganhar mais dinheiro é claro)?</h4>

				<p>Bom, se você já sabe o que é um programador Back-End e Front-End, você vai <b>entender bem</b> o que faz um programador Full-Stack.</p>

				<p>Mas se você não sabe muito bem sobre programa Back e Front, aqui vai um explicação rapida(se por acaso você pulou as <b>esplicações anteriores</b>).</p>

				<h4>O programador Back-end</h4>
				<p>O programa Back-End cuida da parte de trás de um Website, ou seja, tudo aquilo que o seu usuário não vê enquanto está acessando o seu site (<b>server-side</b>).</p>

				<h4>O programador Front-End</h4>
				<p>Diferente do Back, o Front- End é tudo aquilo que o usuário vê enquanto está acessando o seu website (client-side).</p>
				<p>Por exemplo, imagens, textos, vídeos, e entre outras coisas.</p>

				<h3>Mas o que o programador Full-Stack tem a ver com isso?</h3>

				<p>O programador Full-Stack lida com ambas as partes desde o Front como o Back.</p>
				<p>Por exemplo foi eu que cuidei da <b>parte da frente e da parte de trás do site</b> que você está vendo.</p>

				<p>Ele pode cuidar do servidor, e também da parte visual do site.</p>

				<h3>Mas... qual a vantagem de ser um Full-Stack?</h3>
				<p>Vou citar um exemplo para você e nesse exemplo VOCÊ <b>programa em PHP na parte do Back-End</b>.</p>

				<p>Pense comigo: existe duas vagas de trabalho, uma para quem programa em PHP na parte do Back-End e outra para quem programa em JavaScript na parte do Front-End.</p>

				<p>Na vaga de PHP Back-End o salário é de 4.000.</p>

				<p>Porém na vaga de JavaScript o salário é de 7.000.</p>
				<p>Como você é apenas um programador Back-End você estará "limitado" a escolher a primeira opção.</p>

				<p>Acho que da para você entender um aonde eu quero chegar né?</p>

				<p>Você sendo um programador apenas do Back-end está limitado a vagas apenas do Back-End, mas e se você si torna-se um programador Full-Stack?</p>

				<p>Nesse caso você poderia escolher, <b>"qual vaga é melhor para mim? A Back-End ou a Front-End?"</b> (Por causa da distância, requisitos e etc).</p>

				<h2>Mas qual linguagens aprender para virar um programador Full-Stack?</h2>

				<p>Bem... eu indico para você: HTML (obvio), JavaScript, com o JavaScript você pode desenvolver tanto para o Front, como para o Back.</p>
				<p>Como?</p>

				<p>Através do Node.js.</p>

				<p>Estude também sobre banco de dados SQL, PHP, está linguagem de programação (PHP) é a linguagem que o professor do meu curso recomendou por ser uma linguagem "menos difícil de aprender" e também recomendo o CSS.</p>

				<p><b>Mas obvio que isso é apenas uma pequena vantagem, claro que existe inúmeras outras vantagens por aí.</b></p>

				<p>Agora pense bem, se até o professor de um dos maiores Treinamentos do Brasil recomendou essa linguagem não é atoa não acha?</p>

				<p>Você não sabe qual Treinamento é esse? Bem esse é o <a target="_blank" itle="Pacote Full-Stack" href="https://go.hotmart.com/I13578321Y?ap=7cc1">Treinamento Full-Stack da Danki Code </a>, saiba mais sobre ele clicando <a target="_blank"  title="Registrar Gratuitamente na Danki Code" href="https://go.hotmart.com/I13578321Y?pad=http://cursos.dankicode.com/registrar">aqui</a>, ou na imagem abaixo:</p>

				<div class="imagens-do-artigo">
					<a target="_blank" title="Canal Danki Code" href="https://go.hotmart.com/I13578321Y?pad=http://youtube.com/dankicode">
						<img src="imagens/pacote-full-stack-danki-code-codigoexpert.webp">
					</a>
				</div>

				<h2>Ainda existe mais vantagens no mundo da programação.</h2>
				<p>Mas obvio que isso é apenas uma pequena vantagem, claro que existe inúmeras vantagens por aí.</p>


				<h2>Quanto Você Vai Ganhar Como Um Programador Full-Stack?</h2>
				<div class="imagens-do-artigo">
					<img src="imagens/d.jpg">
				</div>
				<p style="color:#5e3ea1; text-decoration:underline;">Medite nessa palavra:João 8:32 e conhecereis a verdade, e a verdade vos libertará.</p>

				<h3>Veja também nesse artigo: <b>3 Dicas que podem mudar a sua vida</b>.</h3>
				<p>Sem enrolação e sendo direto ao ponto...</p>

				<p>Um desenvolvedor Full-Stack pode ganhar aproximadamente no ano de 2020 de <b>R$5.000 a R$20.000</b>.</p>

				<p>Ou podendo até mesmo passar desses R$20.000.</p>

				<p>Mas é extremamente importante que você saiba, que isso varia de região, para região.</p>


				<h2>É mais de 8 MIIIILLLLLL</h2>
				<div class="imagens-do-artigo">
					<img src="imagens/vegeta.webp">
				</div>
				<p>Então sim, um desenvolvedor Full-Stack pode começar a ganhar 5.000 e chegar a ganhar R$20.000/R$30.000, mas claro que isso é apenas uma base.</p>
				

				
				<h2>3 Dicas Bônus</h2>

				<h3>1. Não seja apenas o "cara" que escreve códigos.</h3>
				<p>Mas seja sim uma pessoa que tem um senso crítico, ou seja, domine mais sobre performance, segurança, infraestrutura, e com isso você vai conseguir se diferenciar dos outro programadores Full-Stack.</p>

				<h3>2. Aprenda inglês.</h3>
				

				<p>(mas claro, hoje para você aprender a programar você não necessariamente precisa aprender inglês).</p>
				

				<p>Se você aprender inglês enquanto aprende a programar, ou até mesmo se você já é programador e começa aprender inglês, você vai ser muito mais produtivo.</p>

				<p>Porque além de você ser mais produtivo, você não se limita apenas no Brasil, você pode achar vagas de emprego no "mundo a fora".</p>

				
				<h3>3. Dono do seu negócio.</h3>
				<p>Você pode abrir a sua própria empresa, ou trabalhar como Freelancer, ou as duas coisas ao mesmo tempo, você não estará limitado a apenas uma dessas duas características, você pode também trabalhar para uma empresa, se tronar um freelancer enquanto abre a sua empresa.</p>
			
				<p>Mas talvez você se pergunte "com qual dinheiro eu vou abrir a minha empresa?" ou "Eu não vou ter tempo para fazer isso?".</p>
		
				<p>A questão do dinheiro não preciso nem dar muitas explicações, porque você já iria está trabalhando como Freelancer e, talvez, para uma empresa.</p>
		
				<h4>Ajeita direitinho que você consegui</h4>
				<p>Pense bem: se um ser humano consegue trabalhar, fazer faculdade, e ainda um ou mais cursos online e você acha que não vai ter tempo para fazer "tudo isso"?</p>	

				<p>Mas se por acaso você acha demais fazer tantas coisas ao mesmo tempo, você poderia apenas trabalhar como freelancer e com esse dinheiro poderia abrir a sua empresa, mas enfim, essas são apenas algumas possibilidades para você faturar nesse mercado.</p>

				<p>Enfim as suas possibilidades trabalhando como um programador Full-Stack são extremamente GRANDES.</p>

				<h2>Uma pequena pergunta...</h2>
				<p>Agora eu vou te fazer uma pergunta, se você quiser pode me responder, ou então responda para si mesmo...</p>

				<p>Se você tem a possibilidade de si tornar um programador Full-Stack, porque se mantem apenas no Front, ou apenas no Back, ou até mesmo nem começou os seus estudos para aprender a programar?</p>

				<p>Faça uma reflexão dessa pequena pergunta e eu vou deixar um Guia para te auxiliar a se tronar um programador Full-Stack: <a target="_blank" title="Pacote Full-Stack" href="https://go.hotmart.com/I13578321Y?ap=0672">Como se tornar um programador Full-Stack.</a></p>


				<h2>Conclusão</h2>
				<p>Mas obvio que isso é apenas uma pequena vantagem, claro que existe inúmeras vantagens por aí.</p>

				<p>Enfim até aqui me concedeu o Senhor sabedoria para escrever! :-D</p>

				<p>E que Deus continue te abençoando e te dando sasbedoria para você aprender mais e mais, e também entregue sua vida a Jesus.</p>
			</article><!--article classepadrao-->

			<div class="section-relacionados ebook-gratis">
				<div class="titulo-do-ebook">
					<h3>Talvez você possa gostar:</h3>
					<h3>Ebooks 100% <span style="background-color:orange;">GRÁTIS</span> para você!</h3>
				</div><!-- titulo-do-ebook -->

	

				<div class="afiliacao-umbler">
					<h2>A Umbler é uma empresa de Cloud Hosting que tem a missão de facilitar a vida para agências e devs.</h2>

					<a target="_blank" title="Hospede os seus sites" href="">
						<img src="imagens/umbler.png" />				
						
						<p>Crie sua conta e ganhe até R$ 20 em créditos para sites e emails. Fácil e sem compromisso :-D</p>
						
						<div class="afiliacao-umbler-teste"><span>Experimente Grátis! &#10137;</span></div>
					</a>
				</div><!--afiliacao-umbler-->

				<div class="curso-gratis-danki">
					<h2>Quer ter acesso a algumas aulas que estão disponíveis Gratuitamente de programação na DankiCode?</h2>

					<a target="_blank" title="Acesso a Aulas Grátis Danki Code" href="https://go.hotmart.com/I13578321Y?pad=http://cursos.dankicode.com/registrar">
						<img src="imagens/dankicode.webp" />
					</a>

					<a target="_blank" title="Acesso a Aulas Grátis Danki Code" href="https://go.hotmart.com/I13578321Y?pad=http://cursos.dankicode.com/registrar">
						
						<p>A DankiCode é uma das plataformas de ensino a distância, com mais de 60 mil alunos e você pode ter acesso a algumas aulas que estão disponíveis gratuitamente na plataforma!</p>
						<p>Saiba mais. &#10137;</p>
					</a>
				</div><!--curso-gratis-danki-->
		
				<div class="ebook-de-games">
					<h2>E-Book Desenvolvimento de Games</h2>

			<?php

				$acao_games = filter_input(INPUT_POST,"acao-games");

				if($acao_games === NULL){

			?>

					<div class="imagem-do-ebook" title="Ebook Desenvolvimento de Games"></div>

					<form method="post" class="form-de-games">
						<fieldset>
							<p>Insira o seu endereço de e-mail abaixo e receba este <span style="background-color:orange;">E-BOOK INCRÍVEL</span> sobre Programação de Jogos!</p>
							
							<input type="email" required placeholder="Insira seu email aqui" name="email-games" />
							<input type="submit" name="acao-games" value="Assine Já">
							
						</fieldset>
					</form>


				<?php }else{ ?>

					<div style="padding:10px;">
						<h2>Seu cadastro foi realizado com <span style="background-color:orange;">sucesso</span>! :-D</h2>
					</div>

				<?php } ?>


				</div><!--ebook-de-games-->

	
				<div class="ebook-de-full-stack">
					<h2>E-Book Como Se Tornar um Desenvolvedor Full-Stack</h2>

					<?php  
						$acao_fullstack = filter_input(INPUT_POST,"acao-fullstack");

						if($acao_fullstack === NULL){

					?>
					<div class="imagem-do-ebook" title="Ebook Pacote Full-Stack"></div>

					<form method="post" class="form-full-stack">
						<fieldset>
							<p>Insira o seu endereço de e-mail abaixo e receba este E-BOOK INCRÍVEL sobre Programação Web com <span style="background-color:orange;">MAIS de 40 Páginas</span>!</p>

							
							<input type="email" required placeholder="Insira seu email aqui" name="email-full-stack" />
							<input type="submit" name="acao-fullstack" value="Assine Já">
						</fieldset>
					</form>

				<?php }else{ ?>

					<div style="padding:10px;">
						<h2>Em breve você reberá o seu <span style="background-color:orange;">ebook</span>! (-:</h2>
					</div>

				<?php } ?>
				</div><!--ebook-de-full-stack-->
			</div><!--section-relacionados ebook-gratis-->
		</div><!--classepadrao-->
	</section><!--section-artigo-->

</main>

<footer>
	<a target="_blank" href="https://codigoexpert.xyz">Codigo Expert</a>
	<span>| &copy; Todos os direitos reservados</span>
</footer>





</body>
</html>