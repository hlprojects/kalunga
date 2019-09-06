<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  	<meta name="theme-color" content="black" />

  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<link href="build/material/material-icons.css" rel="stylesheet">
  	<link rel="manifest" href="./manifest.json">
	<link rel="shortcut icon" href="./favicon.ico" />

	<title>Kalunga - Obituário Online</title>

	<link rel="stylesheet" href="build/css/materialize.min.css" />
	<link rel="stylesheet" href="build/css/swiper.css" />
	<link rel="stylesheet" href="build/css/app.min.css" />
	<link rel="prefetch" href="./src/img/bg-flowers.jpg" />
</head>

<body>

	<?php $initPath = './'; include 'navBar.php'; ?>
 
	<header>
	<br>
		<nav class="navbar transparent z-depth-0">

			<button href="#!" data-target="slide-out"  class="sidenav-trigger waves-effect btn-menu show-on-large"><i  class="material-icons black-text">menu</i></button>

			<form method="get" action="src/views/pesquisa.php" class="form-search">
				<i  class="material-icons">search</i>
				<input   type="search"  list="datalist-name" id="search" class="kalunga input-search" name="query" placeholder="Pesquisar..." />
				
				<datalist onclick="" id="datalist-name">
				</datalist>
			</form>

			<a href="src/views/publicar.php" style=""><button type="button"  class="btn-publish waves-effect"> <strong>Publicar</strong></button></a>
		</nav>

		<ul id="slide-out" class="sidenav">
	
			<li>
				<div class="user-view">
					<div class="background">
						<img src="src/img/plan-a-funeral-800x533.jpeg">
					</div>
					
					<a href="#user"><img class="circle" src="src/img/tod-freizeitpark.jpg"></a>
					  <a href="#name"><span class="white-text name">HL inc</span></a>
					  <a href="#email"><span class="white-text email">Kalunga</span></a>
				</div>
			</li>

			<li><a href="#!" class="waves-effect"><i class="material-icons">folder_open</i>Memoriais</a></li>

			<li><a href="#!" class="waves-effect"><i class="material-icons">public</i>Serviços funerários</a></li>

			<li><a href="#!" class="waves-effect"><i class="material-icons">card_giftcard</i>Ofertas e doações</a></li>

			<li><a href="#!" class="waves-effect"><i class="material-icons">book</i>Livro de condolências</a></li>

			<li><div class="divider"></div></li>

			<li><a href="#!"><i class="material-icons">info</i>Informações funebres</a></li>
				  
			<li><a href="#!"><i class="material-icons">settings</i>Definições</a></li>
				  
			<li><a href="#!" class="sidenav-close">Fechar o menu</a></li>
				
		</ul>

		<div class="quotes center-align">
						
			<blockquote class="white-text">
				"A morte é o destino que todos nós compartilhamos"
			</blockquote>

			<div class="quote-author white-text">Steve Jobs</div>
			<div class="death-date white-text">1955 - 2011</div>

		</div>
	</header>

	<main>

		<br>
		<div  class="swiper-container slide swiper1">
			<div class="covers swiper-wrapper ">
				<?php include 'V1/home/store.php';?>
			</div>
		</div>


		<?php 		
			if (isset($_SESSION['idUserPersona'])) {
				echo '<h1 class="center-align nota-falecimento-titulo">Condolências</h1>';

				echo '<div  class="swiper-container slide swiper3">
						<div class="covers swiper-wrapper ">';

					include 'V1/home/condolencias.php';

				echo '	</div>
					  </div>';
			}
		?>		

		<section id="initSection">

			<h1 class="center-align nota-falecimento-titulo">Notas de falecimento</h1>

			<div class="campas">
				<?php include 'V1/home/notas.php';?>
			</div>

		</section>

	</main>  

	<?php include 'footer.php'; ?>

	<script src="build/materialize.min.js"></script>
	<script src="build/swiper.min.js"></script>
	
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			var elems = document.querySelectorAll('#slide-out');
			var instances = M.Sidenav.init(elems, function() {});

			var elemsC = document.querySelectorAll('.collapsible');
			var instancesC = M.Collapsible.init(elemsC, {});

			M.AutoInit();

			var swiper = new Swiper('.swiper1', {
				slidesPerView: 'auto',
				paginationClickable: true,
				spaceBetween: 30,
				loop: true,
				autoplay: 2000,
				//autoplayDisableOnInteraction: false 
				freeMode: true       
			});

			var swiper = new Swiper('.swiper3', {
				slidesPerView: 'auto',
				paginationClickable: true,
				spaceBetween: 10,
				
			});
		});

	</script>
</body>
</html>