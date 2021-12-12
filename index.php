<?php
   include_once 'include/_dados.php';

   include_once 'include/_header.php';

   include_once 'include/_menu.php';
   
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>


  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images\1.png" alt="First slide">
    </div>


	<div class="carousel-item">
      <img class="d-block w-100" src="images\LMVinicio.png" alt="Second slide">
    </div>


  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<br>

<section id="main" class="container">

<section class="box special">
	<header class="major">
		<h2>LMV é o som do futuro
		<br />
		 </h2>
		<p>Alguns artistas e bandas</p>
	</header>
	<span class="image featured"><img src="images/acc.png" alt="" /></span>
</section>

<section class="box special features">
	<div class="features-row">
		<section>
			<span class="icon solid major fa-bolt accent2"></span>
			<h3>AC⚡DC</h3>
			<p>É uma banda australiana de rock formada em Sydney, Austrália em 1973, pelos irmãos escoceses Malcolm e Angus Young. O estilo musical da banda é normalmente classificado como hard rock e até mesmo blues rock. Mas seus membros sempre classificaram a sua música simplesmente como "rock and roll".</p>
		</section>
		<section>
			<span class="icon solid major fa-chart-area accent3"></span>
			<h3>NCT</h3>
			<p>É um grupo masculino sul-coreano formado pela SM Entertainment em 2016. Seu nome é uma abreviação do projeto de localização Hallyu Neo Culture Technology, um termo dado pelo fundador da SM Lee Soo-man para descrever o conceito do grupo de ter um número ilimitado de membros divididos em várias subunidades baseadas em várias cidades do mundo.</p>
		</section>
	</div>
	<div class="features-row">
		<section>
			<span class="icon solid major fa-cloud accent4"></span>
			<h3>Billie Elish</h3>
			<p>É uma cantora e compositora estadunidense. Eilish é mais conhecida por seu single "Bad Guy", de 2019, que atingiu o topo da Billboard Hot 100. Ela foi indicada para seis Grammy Awards, incluindo Gravação do Ano, Álbum do Ano, Canção do Ano e Melhor Revelação. Ela é a artista mais jovem a ter sido indicada nas principais categorias do Grammy Awards.</p>
		</section>
		<section>
			<span class="icon solid major fa-lock accent5"></span>
			<h3>Halsey</h3>
			<p>É uma cantora e compositora norte-americana. No início de 2014, assinou seu primeiro contrato, com a gravadora Astralwerks, e no final do mesmo ano Halsey lançou seu EP de estreia, intitulado Room 93.</p>
		</section>
	</div>
</section>

<div class="row">

	<div class="col-6 col-12-narrower">

<section class="box special">
	<span class="image featured"><img src="images\2.png" alt="" /></span>
	<h3>Combo The Neighbourhood</h3>
	<p>R$145,00</p>
	<ul class="actions special">
		<li><a href="#" class="button alt">Comprar</a></li>
	</ul>
</section>

</div>

<div class="col-6 col-12-narrower">

<section class="box special">
	<span class="image featured"><img src="images\3.png" alt="" /></span>
	<h3>Combo The Neighbourhood</h3>
	<p>R$145,00</p>
	<ul class="actions special">
		<li><a href="#" class="button alt">Comprar</a></li>
	</ul>
</section>

</div>

<div class="col-6 col-12-narrower">

<section class="box special">
	<span class="image featured"><img src="images\6.png" alt="" /></span>
	<h3>Combo NCT</h3>
	<p>R$150,00</p>
	<ul class="actions special">
		<li><a href="#" class="button alt">Comprar</a></li>
	</ul>
</section>

</div>


<div class="col-6 col-12-narrower">

<section class="box special">
	<span class="image featured"><img src="images\5.png" alt="" /></span>
	<h3>Combo Halsey</h3>
	<p>R$165,00</p>
	<ul class="actions special">
		<li><a href="#" class="button alt">Comprar</a></li>
	</ul>
</section>

<div class="col-6 col-12-narrower">


</div>
</div>
</section>

<section id="cta">



<form>
	<div class="row gtr-50 gtr-uniform">
		<div class="col-8 col-12-mobilep">
			<input type="email" name="email" id="email" placeholder="Endereço de email"/> <br>
			<input type="email" name="satisfacao" id="satisfacao" placeholder="O que achou da loja?"/>
		</div>
		<div class="col-4 col-12-mobilep">
			<input type="submit" value="Entrar" class="fit" />
		</div>
	</div>
</form>

</section>

<?php
   include_once 'include/_footer.php';
?>