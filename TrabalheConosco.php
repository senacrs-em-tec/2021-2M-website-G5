<!DOCTYPE HTML>
<html>
	<head>
		<title>Trabalhe conosco</title>
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

				<section id="main" class="container">
					<header>
						<h2>Trabalhe conosco!</h2>
						<p>Deixe aqui o seu currículo</p>
					</header>
					<div class="row">
						<div class="col-12">


						</div>
					</div>
					<div class="row">
						<div class="col-12">

							


								<section class="box">
									
									<form method="post" action="#">
										<div class="row gtr-uniform gtr-50">
											<div class="col-6 col-12-mobilep">
												<input type="text" name="Nome" id="name" value="" placeholder="Nome" />
											</div>
											<div class="col-6 col-12-mobilep">
												<input type="text" name="Sobrenome" id="name" value="" placeholder="Sobrenome" />
											</div>
											<div class="col-6 col-12-mobilep">
												<input type="text" name="Telefone" id="text" value="" placeholder="Telefone" />
											</div>
											<div class="col-6 col-12-mobilep">
												<input type="email" name="Email" id="email" value="" placeholder="E-mail" />
											</div>
											<div class="col-12">
												<select name="category" id="category">
													<option value="">- Vagas disponíveis -</option>
													<option value="1">Vendedor</option>
													<option value="1">Caixa</option>
													<option value="1">Estoquista</option>
													<option value="1">Repositor</option>
												</select>
											</div>

									
									
											
											<div class="col-12">
												<textarea name="message" id="message" placeholder="Nós conte um pouco sobre você" rows="6"></textarea>
											</div>

									
											<div class="col-6 col-12-narrower"> 
												<input type="checkbox" id="human" name="human" checked>
												<label for="human">Eu sou um humano, não um E.T</label> 
											</div>	

											
											<input type="file" name="file" id="file" value="Anexe o seu currículo" /> 


										</div>
                                      <br>
										<input type="submit"/>	
										</div>
									</form>
								</section>

						</div>
					</div>

					<?php
			include_once 'include/_footer.php';
		?>

		</div>

	</body>
</html>