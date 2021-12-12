<!DOCTYPE HTML>
<html>
	<head>
		<title>Contato</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>

	<body class="is-preload">
		<div id="page-wrapper">

			<?php
				include_once 'include/_dados.php';

				include_once 'include/_menu.php';
				
			?>	

				<section id="main" class="container medium">
					<header>
						<h2>Contato</h2>
						<p>Deixe aqui sua opinião ou dúvida</p>
					</header>
					
            <form action="processacontato.php"  method="post"> 
					<div class="box">
						<form method="post" action="#">
							<div class="row gtr-50 gtr-uniform">
								<div class="col-6 col-12-mobilep">
									<input type="text" name="Nome" id="name" value="" placeholder="Nome" />
								</div>
								<div class="col-6 col-12-mobilep">
									<input type="email" name="Email" id="email" value="" placeholder="E-mail" />
								</div>
								<div class="col-12">
									<input type="text" name="Assunto" id="subject" value="" placeholder="Assunto" />
								</div>
								<div class="col-12">
									<textarea name="Mensagem" id="message" placeholder="Escreva aqui a sua mensagem" rows="6"></textarea>
								</div>
								<div class="col-12">
									<ul class="actions special">
										<li><input type="submit" value="Enviar" /></li>
									</ul>
								</div>
							</div>
						</form>
						</form>
					</div>
				</section>

				
				<?php

				include_once 'include/_dados.php';

				include_once 'include/_footer.php';

				?>
		</div>

	</body>
</html>

