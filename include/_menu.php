<header id="header">
	<h1><a href="index.php">LMV</a>Store</h1>
	<nav id="nav">
		<ul>
			<?php
				foreach ($ConjuntoMenu as $indice=>$valor){
					echo '<li><a href='.$valor["arquivo"].'>'.$valor["titulo"].'</a></li>';
				}
				foreach ($ConjuntosCat as $indice=>$valor){
					echo '<li><a href=produtos.php?cat='.$valor['categoria'].'>'.$valor['nome'].'</a></li>';
				}
			?>

			<!-- <li><a href="#" class="button">Entrar</a></li> -->
		</ul>
	</nav>
</header>			