<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#999" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="manifest" href="../../manifest.json">
	<link rel="shortcut icon" href="../../favicon.ico" />
	<title>Memorial Paul Allen | Kalunga</title>
	<!-- <link rel="stylesheet" href="../../node_modules/materialize-css/dist/css/materialize.min.css" /> -->
	<link rel="stylesheet" href="../../build/css/materialize.min.css" />
	<link rel="stylesheet" href="../../build/css/app.min.css" />
	<link rel="prefetch" href="../../src/img/bg-flowers.jpg" />
	<link href="../../build/material/material-icons.css" rel="stylesheet">
<?php 
	include '../../V1/memorial/get/index.php';
 ?>
	<script type="text/javascript">

		function post_condolencia() {

	      $.ajax({
	        url : "../../V1/memorial/condolencia/post/index.php",
	        method : "post",
	        data :{
	          id:<?php echo $id; ?>,
	          parentesco: $('#parentesco').val(),
	          username: $('#username').val(),
	          contact: $('#contact').val(),
	          user_message: $('#user_message').val(),
	          notify: $('#notify').val(),
	        },
	        success:function(res){
	          alert('seucess');
	        }
	      }); 

		}	

		function UploadFoto() {

			var fileInput = document.getElementById('fileFoto');
		    var fileBinary = fileInput.files[0];
		 
		    var data = new FormData();

		    data.append('file',fileBinary);

		    data.append('id',<?php echo $id; ?> );


		    var config = {
		      onUploadProgress: function(progressEvent) {
		        var percentCompleted = Math.round( (progressEvent.loaded * 100) / progressEvent.total );    
		      }
		    };

		    axios.post('../../V1/memorial/foto/index.php',data,config)
		      .then(function (res) {

		        if (res.data == "1") {
		        	location.reload();
		        }

		      })
		      .catch(function (err) {
		        console.log(res.data);
		      });					
		}	

	</script>
</head>
<body>

<div class="navbar-fixed">
	<ul id="dropdown1" class="dropdown-content">
		<li><a href="#!">Alterar</a></li>
		<li><a href="src/views/signOut.php">Terminar</a></li>
	</ul>
	<nav class="z-depth-3 " style="background-color: #191919  !important">
		<div class="nav-wrapper">
			<a href="#" class="brand-logo center"><img style="margin-top: 10px" height="40" src="..//img/logo.png"> </a>

			<ul id="nav-mobile" class="right hide-on-med-and-down">

				<?php 
					
					session_start();
					if (isset($_SESSION['idUserPersona'])) {
						echo '<li><a class="dropdown-trigger" href="#!" data-target="dropdown1">'.$_SESSION['nome'].'<i class="material-icons left">person</i></a></li>
							<li><a  href="src/views/memoriais.php" ><i class="material-icons left">fingerprint</i>Memoriais </a></li>';
					}else{
						echo '<li><a href="src/views/signIn.php"><i class="material-icons left">person</i>Entrar</a></li>
								<li><a href="src/views/signUp.php"><i class="material-icons left">cloud</i>Criar conta</a></li>
								
							';
					}
							
				?>  

			</ul>

		</div>
	</nav>		
</div>

	<header class='memorial'   <?php echo "style='height: 60vh; background: url(../../media/photos/".$capa.");background-repeat: no-repeat;background-size: cover'"; ?>>
		<nav class="navbar transparent z-depth-0">
					<button href="#!" data-target="slide-out" style="background-color: transparent !important; box-shadow: none!important;border:none !important" class="sidenav-trigger waves-effect btn-menu show-on-large">
						<i style="color: #e2e2e2!important" class="material-icons black-text">menu</i>
					</button>

					<form method="get" class="form-search">
						
						<input disabled="disabled" style="color: grey; border-radius: 20px!important;box-shadow: none!important;font-weight: bold; padding-left: 20px!important" value=<?php echo '@'.$tag; ?>  type="search"  id="search" class="kalunga input-search"  />
		
					</form>

					<button type="button" style="border-radius: 20px!important;" class="btn-publish waves-effect"><a href="src/views/post.html" style="color:#424242!important"> <strong>Editar</strong></a></button>
		</nav>
		<ul id="slide-out" class="sidenav">
		  <li><div class="user-view" style="background-color: #333; height: 200px;">
		   	<div style="position: absolute; top: 10px; margin: auto; margin-left: 10px;">
	   			<a href="index.html" style="position: relative;">
			   		<img src="./src/img/campa 220x165.png" />
			   		<img style="position: absolute; top: -50px; left: 4.7rem;" src="./src/img/pale-rose 50x20.png" alt="A single pale rose" />
			   		<span style="position: absolute; top: -90px; font-size: 2.5em; left: 6.1rem; color: #eee;" class="material-icons">home</span>
			   	</a>
		   	</div>
		  </div></li>
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
			<br><br><br>
			<h3 class="white-text"><strong><?php echo $nome; ?></strong></h3>
			<div class="death-date white-text">1955 - 2011</div>
		</div>
	</header>


	<img id="fotoProfile" src=<?php  echo "../../media/photos/".$foto; ?>>

	<br>
	<br>
	<br>
	<br>



	<br><br><br>
	<main>
		<section class="funeral-content">



			<div class="bio">
				<h3 class="title">Biografia</h3>
				<p>
					<?php  echo $bibliografia; ?>
				</p>
				<a href="#" class="expand-bio" >Ler mais</a>
			</div>



			<div class="events">
				<h3 class="title">Funeral</h3>
				<ul class="funeral-date">
					<li><a href="#">Local Funebre: <?php  echo $local_funebre; ?> </a></li>
					<li><a href="#">1º Dia do funeral: <span> <?php  echo $data_funeral; ?> </span></a></li>
			
					<li>
					<form method="post" action="../../V1/memorial/notificacao/index.php">
						<input type="text" style="display: none;" name="id" value = <?php echo $id ?> >
						<input type="submit" class="btn-funeral-action waves-effect" title="Notificar-me para o funeral" value="Notificar-me">

						
					</form>
						
					</li>
				</ul>
			</div>
		</section>
		
		<section class="memorial-content">
			
			<article class="multimedia">
				<h2 class="title">Fotos</h2>
				<div class="fotos">

				<?php 

					if (isset($_SESSION['idUserPersona'])) {
						
						echo '<label for="fileFoto">
			                      <div class="card">
			                        <div style="filter: grayscale(100%);" class="card-image">
			                          <img src="../../media/photos/blank.png">
			                          <spana style="font-weight: bold;" class="card-title">Carregar<i class="material-icons right" style="margin-top: 10px;margin-left: 0px;">add</i></span>
			                        </div>
			                      </div>
			                  </label>';

 					}
				 ?>	                	
				 <input type="file" style="display: none;" onchange="UploadFoto()" id="fileFoto">

					<?php 

					    $prepa = $conn->prepare("select * from foto where idMemorial =".$id);
					    $prepa->execute();
					    while($linha = $prepa->fetch(PDO::FETCH_ASSOC)){ 
			    			echo '<img src="../../media/photos/'.$linha['foto'].'" class="materialboxed" width="140" height="140" />';
		
	         
					    }       
					    

					 ?>

			  </div>

				<div class="video">
					<video src=<?php echo $video_url; ?> class="video-memorial" controls="controls"></video>
				</div>
			</article>

			<article class="condolences">
				<h2 class="title center-align">Condolências</h2>
				<div class="card">
					
				<?php 

					if (isset($_SESSION['idUserPersona'])) {
						include 'condolencia/postar.php';
					}else{
						include 'condolencia/logar.php';
					}

				 ?>			

					<?php 

					    $prepa = $conn->prepare("select condolencia.texto,condolencia.data , persona.nome from condolencia,persona where persona.id = condolencia.idPersona  and idMemorial =".$id);
					    $prepa->execute();
					    while($linha = $prepa->fetch(PDO::FETCH_ASSOC)){ 
			    			echo '<div class="message-container">
									<p>'.$linha['texto'].'</p>
									<span>
										<b>'.$linha['nome'].'</b>
										'.$linha['data'].'
									</span>
								</div>';
		
	         
					    }       
					    

					 ?>

				
				<a href="#" class="view-more-messages">Ver mais</a>
	
			</article>

		</section>

			    <div  class="swiper-container slide swiper1">
			       
					<div class="covers swiper-wrapper swiper-slide">
						<div class="cover swiper-slide">
							<p class="center-align "><img src="../../media/photos/1.png"></p>
							<p class="topN center-align"><strong>edvanio</strong></p>
						</div>
						<div class="cover swiper-slide">
							<p class="center-align"><img src="../../media/photos/2.png"></p>
							<p class="topN center-align"><strong>edvanio</strong></p>
						</div>
						<div class="cover swiper-slide">
							<p class="center-align"><img src="../../media/photos/3.png"></p>
							<p class="topN center-align"><strong>edvanio</strong></p>
						</div>			
						<div class="cover swiper-slide">
							<p class="center-align"><img src="../../media/photos/4.png"></p>
							<p class="topN center-align"><strong>edvanio</strong></p>
						</div>
						<div class="cover swiper-slide">
							<p class="center-align"><img src="../../media/photos/5.png"></p>
							<p class="topN center-align"><strong>edvanio</strong></p>
						</div>
						<div class="cover swiper-slide">
							<p class="center-align"><img src="../../media/photos/3.png"></p>
							<p class="topN center-align"><strong>edvanio</strong></p>
						</div>
						<div class="cover swiper-slide">
							<p class="center-align"><img src="../../media/photos/1.png"></p>
							<p class="topN center-align"><strong>edvanio</strong></p>
						</div>
						<div class="cover swiper-slide">
							<p class="center-align"><img src="../../media/photos/2.png"></p>
							<p class="topN center-align"><strong>edvanio</strong></p>
						</div>
					</div>
				</div>

	</main>
	<footer id="rodape" style="margin-top: 5rem;">
		
	</footer>

	<!-- <script src="../../node_modules/materialize-css/dist/js/materialize.min.js"></script> -->
	<script src="../../build/materialize.min.js"></script>
	<script src="../../build/axios.min.js"></script>
	<script src="../../build/swiper.min.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
	    M.AutoInit();

	    var elems = document.querySelectorAll('#tabs-swipe-demo');
	    var instance = M.Tabs.getInstance(elem);
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
	</script>
</body>
</html>