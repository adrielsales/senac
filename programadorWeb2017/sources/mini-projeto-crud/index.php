<?php 
require_once("banco/imagens-banco.php");
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mini Projeto FotoSports</title>
	<link rel="stylesheet" type="text/css" href="publico/css/reset.css">
	<link rel="stylesheet" type="text/css" href="publico/css/fotosports.css">

	<!-- glyphicons -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- carrega a fonte Crimson Text nas versões normal, itálico e negrito -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600">

	<!-- carrega a fonte Open Sans Condensed na versão negrito, -->
	<!-- que é a única necessária para os cabeçalhos            -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700">

</head>
<body>
	<div id="geral">
		<header id="topo">
			<div id="logo"><img src="publico/img/logo-mini-projeto-200.png"></div>
			<div id="banner-animacao"><img src="publico/img/banner-top-730px.jpg"></div>
		</header>

		<!-- limpar a formatação por conta do float. -->
		<div class="clear"></div>

		<div id="menu_conteudo">
			<nav id="menu">
				<h3>Categorias</h3>
				<hr />
				<ul>
					<li><a href="#"> <i class="fa fa-google-wallet" aria-hidden="true"></i> Natação</a></li>
					<li><a href="#"> <i class="fa fa-futbol-o" aria-hidden="true"></i> Futebol</a></li>
					<li><a href="#"> <i class="fa fa-hand-rock-o" aria-hidden="true"></i> Vôlei</a></li>
				</ul>
			</nav>
			<div id="conteudo">
				<h1>Bem vindo a FotoSports</h1>

				<?php 
					//Pegando as imagens no banco de dados e salvando no array $imagens:
					$imagens = listaImagens($conexao); 
				?>

				<!-- Natação -->
				<section class="categorias">
					<h2><i class="fa fa-google-wallet" aria-hidden="true"></i> Natação</h2>

					<?php 
						foreach ($imagens as $img) : 
							if ($img->categoria == 'NAT') { 
					?>
								<figure>
									<img class="img-categorias" alt="<?= $img->nome ?>" src="uploads/<?= $img->url_imagem ?>" />
									<figcaption><?= $img->nome ?>
										<span class="detalhes-da-imagem">
											<a target="_blank" href="paginas/imagens-detalhes.php?id=<?=$img->id?>"> + Detalhes</a>
										</span>
									</figcaption>

								</figure>
					<?php 	
							}
						endforeach 
					?>
				</section>


				<!-- Futebol -->
				<section class="categorias">
					<h2><i class="fa fa-futbol-o" aria-hidden="true"></i> Futebol</h2>
					<?php 
						foreach ($imagens as $img) : 
							if ($img->categoria == 'FUT') { 
					?>
								<figure>
									<img class="img-categorias" alt="<?= $img->nome ?>" src="uploads/<?= $img->url_imagem ?>" />
									<figcaption><?= $img->nome ?>
										<span class="detalhes-da-imagem">
											<a  target="_blank" href="paginas/imagens-detalhes.php?id=<?=$img->id?>"> + Detalhes</a>
										</span>
									</figcaption>

								</figure>
					<?php 	
							}
						endforeach 
					?>
				</section>

				<!-- Vôlei -->
				<section class="categorias">
					<h2><i class="fa fa-hand-rock-o" aria-hidden="true"></i> Vôlei</h2>
					<?php 
						foreach ($imagens as $img) : 
							if ($img->categoria == 'VOL') { 
					?>
								<figure>
									<img class="img-categorias" alt="<?= $img->nome ?>" src="uploads/<?= $img->url_imagem ?>" />
									<figcaption><?= $img->nome ?>
										<span class="detalhes-da-imagem">
											<a target="_blank" href="paginas/imagens-detalhes.php?id=<?=$img->id?>"> + Detalhes</a>
										</span>
									</figcaption>

								</figure>
					<?php 	
							}
						endforeach 
					?>
				</section>

			</div>
		</div>
	</div>

	<div class="clear"></div>

<footer id="footer">
	<nav id="contatos">Natação | Futebol | Vôlei </nav>

	<address id="creditos">Créditos | Av. D. Pedro I, 389 - Centro - CEP: 58.013-020 - João Pessoa - PB  </address>
	<address>Fones: (83) 3214-2330 (83) 3214-2330/3214-2331/3214-2332 - Fax: (83) 3214-2354</address>
</footer>

</body>
</html>