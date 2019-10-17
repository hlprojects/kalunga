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
 
	<header class="valign-wrapper">

		<div class=" center-align  swiper-container swiperInit">
	
			<div class="covers swiper-wrapper valign-wrapper" style="margin: 0px!important">
				

				<div class=" swiper-slide ">

					<img width="200" src="src/img/logo.png">
					<br>
					<h5 class="white-text" style="padding-left: 20px;padding-right: 20px">
						"A morte é o destino que todos nós compartilhamos"
					</h5>

					<div class="quote-author white-text">Steve Jobs</div>
					
					<br>
					<a href="src/views/memorial/publicar" style=""><button style="border-radius: 50px!important;font-weight: bold;color: #808080;border: none!important;" type="button"  class="btn-publish waves-effect"> <strong>Publicar</strong></button></a>				
				</div>

				<div class=" swiper-slide">
					
				</div>
			</div>
			<br><br>
			<div class="swiper-pagination"></div>
		</div>

	</header>

	<main>
		

		<br>
		<div  class="swiper-container slide swiper1">
			<div class="covers swiper-wrapper ">
				<?php include 'V1/home/store.php';?>
			</div>
		</div>
		<br><br> 
		<div style="margin-left: 15%;margin-right: 15%;" class="divider"></div>
		<br><br>

		<?php 		
			if (isset($_SESSION['idUserPersona'])) {
				echo '<h1 class="center-align nota-falecimento-titulo">Condolências</h1>';

				echo '<div  class="swiper-container slide swiper3">
						<div class="swiper-wrapper ">';

					include 'V1/home/condolencias.php';

				echo '	</div>
					  </div>';
			}
		?>		

		<section id="initSection">

			<h1 class="center-align nota-falecimento-titulo">Notas de falecimento</h1>

			<div class="campas">
				<?php include 'V1/home/notas.php';?>


				<div class="center-align">
					<button style="height: 50px;width: 120px;border-radius: 50px!important;color: grey;font-weight: bold;background-color: #ffffff47 !important;">Mais notas</button>
				</div>

				
			</div>


			<br><br>

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

			var swiper = new Swiper('.swiperInit', {
				slidesPerView: 'auto',
				paginationClickable: true,
				spaceBetween: 0,
				pagination: '.swiper-pagination'
				
			});
			var swiper = new Swiper('.swiper1', {
				slidesPerView: 'auto',
				paginationClickable: true,
				spaceBetween: 30,
				loop: true,
				autoplay: 2000,
				//autoplayDisableOnInteraction: false 
				//freeMode: true,
				center:true       
			});

			var swiper = new Swiper('.swiper3', {
				slidesPerView: 'auto',
				paginationClickable: true,
				spaceBetween: 10,      
        		
        		loop: true,
        
				
			});
		});

	</script>
</body>
</html>