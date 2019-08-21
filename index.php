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



		<?php 

			

			include 'navBar.php';
		 ?>
 
			<header>
				<nav class="navbar transparent z-depth-0">

					<button href="#!" data-target="slide-out" style="background-color: transparent !important; box-shadow: none!important;border:none !important" class="sidenav-trigger waves-effect btn-menu show-on-large">
						<i style="color: #e2e2e2!important" class="material-icons black-text">menu</i>
					</button>

					<form method="get" class="form-search">
						<i style="color: #3e3e3e;margin-left: 5px;" class="material-icons">search</i>
						<input style="border-radius: 20px!important;box-shadow: none!important;"  type="search"  list="datalist-name" id="search" class="kalunga input-search" name="query" placeholder="Pesquisar..." />
						<datalist onclick="alert('')" id="datalist-name">
						
						</datalist>
					</form>

					<button type="button" style="border-radius: 20px!important;" class="btn-publish waves-effect"><a href="src/views/post.html" style="color:#424242!important"> <strong>Publicar</strong></a></button>
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

			<main style="background-color: #e7e7e773;">

				<br>

			    <div  class="swiper-container slide swiper1">
			       
					<div class="covers swiper-wrapper swiper-slide">
						<div class="cover swiper-slide">
							<p class="center-align "><img src="media/photos/1.png"></p>
							<p class="topN center-align"><strong>edvanio</strong></p>
						</div>
						<div class="cover swiper-slide">
							<p class="center-align"><img src="media/photos/2.png"></p>
							<p class="topN center-align"><strong>edvanio</strong></p>
						</div>
						<div class="cover swiper-slide">
							<p class="center-align"><img src="media/photos/3.png"></p>
							<p class="topN center-align"><strong>edvanio</strong></p>
						</div>			
						<div class="cover swiper-slide">
							<p class="center-align"><img src="media/photos/4.png"></p>
							<p class="topN center-align"><strong>edvanio</strong></p>
						</div>
						<div class="cover swiper-slide">
							<p class="center-align"><img src="media/photos/5.png"></p>
							<p class="topN center-align"><strong>edvanio</strong></p>
						</div>
						<div class="cover swiper-slide">
							<p class="center-align"><img src="media/photos/3.png"></p>
							<p class="topN center-align"><strong>edvanio</strong></p>
						</div>
						<div class="cover swiper-slide">
							<p class="center-align"><img src="media/photos/1.png"></p>
							<p class="topN center-align"><strong>edvanio</strong></p>
						</div>
						<div class="cover swiper-slide">
							<p class="center-align"><img src="media/photos/2.png"></p>
							<p class="topN center-align"><strong>edvanio</strong></p>
						</div>
					</div>
				</div>

			    <div  class="swiper-container slide swiper3">
			       
					<div class="covers swiper-wrapper swiper-slide">

				      <div class="card grey darken-4 swiper-slide">
				        <div class="card-content white-text">
				          <span class="card-title">Edvânio januario</span>
				          <p>I am a very simple card. I am good at containing small bits of information.
				          I am convenient because I require little markup to use effectively.</p>
				        </div>
				        <div class="card-action">
				          <img height="30" width="30" style="border-radius:100px;border-style: solid; border-color: grey;padding: 1px;" src="media/photos/5.png">
				          <a style="position: absolute;bottom:30px;left: 70px" href="">@EdvanioJanuario2013</a>
				        </div>
				      </div>

				      <div class="card grey darken-4 swiper-slide">
				        <div class="card-content white-text">
				          <span class="card-title">José Carlos</span>
				          <p>I am a very simple card. I am good at containing small bits of information.
				          I am convenient because I require little markup to use effectively.</p>
				        </div>
				        <div class="card-action">
				          <img height="30" width="30" style="border-radius:100px;border-style: solid; border-color: grey;padding: 1px;" src="media/photos/5.png">
				          <a style="position: absolute;bottom:30px;left: 70px" href="">@EdvanioJanuario2013</a>
				        </div>
				      </div>

				      <div class="card grey darken-4 swiper-slide">
				        <div class="card-content white-text">
				          <span class="card-title">Adriano luposa</span>
				          <p>I am a very simple card. I am good at containing small bits of information.
				          I am convenient because I require little markup to use effectively.</p>
				        </div>
				        <div class="card-action">
				          <img height="30" width="30" style="border-radius:100px;border-style: solid; border-color: grey;padding: 1px;" src="media/photos/5.png">
				          <a style="position: absolute;bottom:30px;left: 70px" href="">@EdvanioJanuario2013</a>
				        </div>
				      </div>

				      <div class="card grey darken-4 swiper-slide">
				        <div class="card-content white-text">
				          <span class="card-title">Valdemar hoque</span>
				          <p>I am a very simple card. I am good at containing small bits of information.
				          I am convenient because I require little markup to use effectively.</p>
				        </div>
				        <div class="card-action">
				          <img height="30" width="30" style="border-radius:100px;border-style: solid; border-color: grey;padding: 1px;" src="media/photos/5.png">
				          <a style="position: absolute;bottom:30px;left: 70px" href="">@EdvanioJanuario2013</a>
				        </div>
				      </div>

				      <div class="card grey darken-4 swiper-slide">
				        <div class="card-content white-text">
				          <span class="card-title">Rivaldo Roque</span>
				          <p>I am a very simple card. I am good at containing small bits of information.
				          I am convenient because I require little markup to use effectively.</p>
				        </div>
				        <div class="card-action">
				          <img height="30" width="30" style="border-radius:100px;border-style: solid; border-color: grey;padding: 1px;" src="media/photos/5.png">
				          <a style="position: absolute;bottom:30px;left: 70px" href="">@EdvanioJanuario2013</a>
				          
				        </div>
				      </div>


				     </div>
				   	</div>

				<section id="initSection">
					<h1 class="center-align nota-falecimento-titulo">Notas de falecimento</h1>
					<div class="campas">
						<figure>
							<!-- <img src="./src/img/campa 400x300.png" alt="Imagem de uma campa"> -->
							<a href="./src/views/memorial.php?id=8">
								<div class="campa">
									<img src="media/photos/1.png" style="position: absolute; left: 90px; top: 52px; -webkit-filter: grayscale(100%); filter: grayscale(100%); border-radius: 100%;" width="120" alt="Some" />
									<div class="name-container">
										<span class="name">Paul Allen (56 anos)</span>
									</div>
								</div>
							</a>
							<figcaption class="nota-falecimento">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
							</figcaption>
						</figure>
						<figure>
							<!-- <img src="./src/img/campa 400x300.png" alt="Imagem de uma campa 2"> -->
							<div class="campa">
								<img src="media/photos/8.png" style="position: absolute; left: 90px; top: 52px; -webkit-filter: grayscale(100%); filter: grayscale(100%); border-radius: 100%;" width="120" height="120" alt="Some" />
								<div class="name-container">
									<span class="name">Edvânio januário</span>
								</div>
							</div>
							<figcaption class="nota-falecimento">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
							</figcaption>
						</figure>
						<figure>
							<!-- <img src="./src/img/campa 400x300.png" alt="Imagem de uma campa 2"> -->
							<div class="campa">
								<img src="media/photos/5.png" style="position: absolute; left: 90px; top: 52px; -webkit-filter: grayscale(100%); filter: grayscale(100%); border-radius: 100%;" height="120" width="120" alt="Some" />
								<div class="name-container">
									<span class="name">Chris Brown</span>
								</div>
							</div>
							<figcaption class="nota-falecimento">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
							</figcaption>
						</figure>
					</div>

					<div class="campas">
						<figure>
							<!-- <img src="./src/img/campa 400x300.png" alt="Imagem de uma campa"> -->
							<div class="campa">
								<img src="media/photos/2.png" style="position: absolute; left: 90px; top: 52px; -webkit-filter: grayscale(100%); filter: grayscale(100%); border-radius: 100%;" height="120" width="120" alt="Some" />
								<div class="name-container">
									<span class="name">Valdemar Hoque</span>
								</div>
							</div>
							<figcaption class="nota-falecimento">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
							</figcaption>
						</figure>
						<figure>
							<!-- <img src="./src/img/campa 400x300.png" alt="Imagem de uma campa 2"> -->
							<div class="campa">
								<img src="media/photos/3.png" style="position: absolute; left: 90px; top: 52px; -webkit-filter: grayscale(100%); filter: grayscale(100%); border-radius: 100%;" width="120" height="120" alt="Some" />
								<div class="name-container">
									<span class="name">José Carlos</span>
								</div>
							</div>
							<figcaption class="nota-falecimento">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
							</figcaption>
						</figure>
						<figure>
							<!-- <img src="./src/img/campa 400x300.png" alt="Imagem de uma campa 2"> -->
							<div class="campa">
								<img src="media/photos/4.png" style="position: absolute; left: 90px; top: 52px; -webkit-filter: grayscale(100%); filter: grayscale(100%); border-radius: 100%;" width="120" alt="Some" />
								<div class="name-container">
									<span class="name">ADRIANO LUPOSSA</span>
								</div>
							</div>
							<figcaption class="nota-falecimento">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
							</figcaption>
						</figure>
					</div>

				  






				</section>
			</main>        
 

	<div class="fixed-action-btn">
	  <a class="btn-floating btn-large black">
	    <i class="large material-icons">add</i>
	  </a>
	  <ul>
	    <li><a class="btn-floating red"><i class="material-icons">card_giftcard</i></a></li>
	    <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
	    <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
	    <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
	  </ul>
	</div>

        <footer class="page-footer" style="background-color: #0e0e0e !important">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Kalunga</h5>
                <p class="grey-text text-lighten-4">Obituário Online</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Páginas</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2019 HL inc Kalunga
            <a class="grey-text text-lighten-4 right" href="#!">Sobre</a>
            </div>
          </div>
        </footer>

	<script src="build/jquery.min.js"></script>
	<script src="build/materialize.min.js"></script>
	<script src="build/swiper.min.js"></script>
	
	<script>
		document.addEventListener('DOMContentLoaded', function() {
	    var elems = document.querySelectorAll('#slide-out');
	    var instances = M.Sidenav.init(elems, function() {});

	    var elemsC = document.querySelectorAll('.collapsible');
    	var instancesC = M.Collapsible.init(elemsC, {});

    	$(".dropdown-trigger").dropdown();

    	  $('.fixed-action-btn').floatingActionButton({
		    direction: 'left'
		  });
	  });

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
        spaceBetween: 1,
        loop: true
    });


    $('#search').on('keyup',function () {
    	
      $.ajax({
        url : "V1/memorial/dataList/index.php",
        method : "post",
        data :{
          texto: $('#search').val()
        },
        success:function(res){
          $('#datalist-name').html(res);
        }
      }); 

      $.ajax({
        url : "V1/memorial/search/index.php",
        method : "post",
        data :{
          texto: $('#search').val()
        },
        success:function(res){
          $('#initSection').html(res);
        }
      }); 


    });

	</script>
</body>
</html>