<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  	<meta name="theme-color" content="black" />
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link rel="manifest" href="../../manifest.json">
	<link rel="shortcut icon" href="../../favicon.ico" />
	<title>Memorial Paul Allen | Kalunga</title>

	<!-- <link rel="stylesheet" href="../../node_modules/materialize-css/dist/css/materialize.min.css" /> -->

	<link rel="stylesheet" href="../../../build/css/materialize.min.css" />
	<link rel="stylesheet" href="../../../build/css/app.min.css" />
	<link rel="prefetch" href="../../../src/img/bg-flowers.jpg" />
	<link href="../../../build/material/material-icons.css" rel="stylesheet">

	<?php 
		include(dirname(__FILE__) . '/../../../V1/memorial/index.php');
 	?>

	<script type="text/javascript">

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

		    axios.post('../../../V1/memorial/fotos/carregar/index.php',data,config)
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


	<?php $initPath = '../../../'; include '../../../navBar.php'; ?>

	<header class='memorial'   <?php echo "style='filter: grayscale(100%);height: 60vh; background: url(../../../media/photos/".$capa.");background-repeat: no-repeat;background-size: cover'"; ?>>

	
		<div class="center-align valign-wrapper" style="height: 60vh;width: 100%;background: #000000c7;top: 0px">
		
				<div style="width: 100%">
					<h3 class="white-text" style=""><?php echo $nome; ?></h3>
					<div class="death-date white-text"><?php echo $ano_nasce.' - '.$ano_morte ; ?></div>
					<br>
					

					<?php 
						if (isset($_SESSION['idUserPersona']) && $_SESSION['idUserPersona']==$idPersonaCad ) {
							echo '<a style="font-weight: bold;color: white;text-decoration: underline;" href="./editar/?id='.$id.'"">Editar perfíl</a>';
						}
					 ?>


				</div>

	
		</div>


	</header>

	<p style="text-align: center; width: 100%;margin-top: -100px">
		<img id="fotoProfile" src=<?php  echo "../../../media/photos/".$foto; ?>>		
	</p>	



		<main id="memorial-content">
			<section class="funeral-content">


			<div class="row">
				<div class="col s12 m12 l6">
					<div class="bio card">
						<h2 style="margin: 0px!important" class="title">Biografia
						</h2>
						<p data-text= <?php echo $bibliografia ?> id="uni">
						<?php 
							if (empty($bibliografia) && $_SESSION['idUserPersona']==$idPersonaCad ) {
								echo '<a style="font-weight: bold;" href="./editar/?id='.$id.'"">Actualizar biografia</a>';
							}else{

								echo substr($bibliografia, 0,231).'...';
							}
							
						 ?>
							<a style="font-weight: bold;" href="./editar/?id='.$id.'"">Ler mais</a>
						</p>

						
						
					</div>

					<br>

					<div style="padding-left: 10px;">
						<strong>Partilhar:</strong>
						<br><br>

						<button style="font-weight: bold!important;background-color: #094c9e    !important;color: white!important;box-shadow: none!important;width: 130px; border-radius: 50px!important;    border: none!important;" type="submit"  class="btn-publish kalunga waves-effect"><img height="15" src="../../img/facebook.png"></button>

						<button style=" margin-left: 10px;font-weight: bold!important;background-color: #03A9F4    !important;color: white!important;box-shadow: none!important;width: 130px; border-radius: 50px!important;    border: none!important;" type="submit"  class="btn-publish kalunga waves-effect"><img height="15" src="../../img/twiter.png"></button>						
					</div>					

					<br><br>
									
				</div>

				<div class="col s12 m12 l6">
					<div class="bio card">
						<h2 style="margin: 0px!important" class="title">Funeral</h2>
						<ul class="funeral-date">
						<br>
							<li><strong>Local Funebre:</strong>  <?php  echo $local_funebre; ?> </li>
				
							<li><strong>Dia do funeral:</strong> <?php  echo $data_funeral; ?> </li>
					
							<li>
							<br>
							<form method="post" action="../../V1/memorial/notificacao/index.php">

							
								<input type="text" style="display: none;" name="id" value = <?php echo $id ?> >

								

								<button style="font-weight: bold!important;background-color: #191919  !important;color: white!important;box-shadow: none!important;width: 130px; border-radius: 50px!important;    border: none!important;" type="submit"  class="btn-publish kalunga waves-effect">Notificar-me</button>

								
							</form>
								
							</li>
						</ul>
					</div>					
				</div>				
			</div>

			<br>
			<div style="margin-left: 15%;margin-right: 15%;" class="divider"></div>
			<br>


			</section>
			
			<section class="row">
				
				<article class="col s12 m12 ">
					<h2 class="title">Fotos</h2>
					<div class="fotos row ">

					<?php 
						if (isset($_SESSION['idUserPersona']) && $_SESSION['idUserPersona']==$idPersonaCad ) {
							echo 
							'
							<div class=" col s6 m4 l3 center-align " style="height: 200px;">
								<label class="valign-wrapper" for="fileFoto" style="background: white;height: 100%;width: 100%;border-radius: 10px;">
									<p style="width: 100%;">
										<i class="material-icons right" style="margin-top: 10px;margin-left: 0px; font-size: 70px!important;width: 100%;    color: #9e9e9e66;">add</i>
										<br>
										Adicionar
										</p>
								</label>
				            </div>

							';
						}
					 ?>
					 
					 <input type="file" style="display: none;" onchange="UploadFoto()" id="fileFoto">		


						<?php 



						if (isset($_SESSION['idUserPersona']) || 1) {
							
							echo '

								<div class=" col s6 m4 l3">
									<img  style="height:200px; filter: grayscale(100%);" src="../../../media/photos/2213403296.jpg">
								</div>
								<div class=" col s6 m4 l3">
									<img  style="height:200px; filter: grayscale(100%);" src="../../../media/photos/2213403296.jpg">
								</div>				                  	
								<div class=" col s6 m4 l3">
									<img  style="height:200px; filter: grayscale(100%);" src="../../../media/photos/2213403296.jpg">
								</div>

								<div class=" col s6 m4 l3">
									<img  style="height:200px; filter: grayscale(100%);" src="../../../media/photos/2213403296.jpg">
								</div>
								<div class=" col s6 m4 l3">
									<img  style="height:200px; filter: grayscale(100%);" src="../../../media/photos/2213403296.jpg">
								</div>

				                  ';

	 					}
					 ?>	                	


						<?php 

						    $prepa = $conn->prepare("select * from foto where idMemorial =".$id);
						    $prepa->execute();
						    while($linha = $prepa->fetch(PDO::FETCH_ASSOC)){ 
				    			echo '
									<div class=" col s6 m4 l3">
										<img  style="height:200px; filter: grayscale(100%);" src="../../../media/photos/'.$linha['foto'].'">
									</div>';			
						    }        
						 ?>



				  </div>
				  <br><br>
				<div class="center-align">
					<button style="height: 50px;font-weight: bold!important;background-color: #191919  !important;color: white!important;box-shadow: none!important;width: 130px; border-radius: 50px!important;    border: none!important;">Mais fotos</button>
				</div>	

				</article>

		
		</section>


			<br><br>
			<div style="margin-left: 15%;margin-right: 15%;" class="divider"></div>
			<br>

			

		<section class="row">
				
				
				<article class="col s12 m12">
					<h2 class="title">Publicar condolências</h2>
					<h3 class="title">Deixe o seu apoio</h3>
					<br>
					<div >
						
					<?php 
						include 'condolencias/index.php';
					 ?>					
				</article>
		</section>

				
		

		


		<section class="row">
				
				
				<article class="col s12 m12">
					
					

					<?php 

						$prepa = $conn->prepare("select condolencia.texto,condolencia.data,nome from condolencia where  idMemorial =".$id);

						$prepa->execute();
						while($linha = $prepa->fetch(PDO::FETCH_ASSOC)){ 
				    		echo '<div class="bio card">
				    					<h6><b>'.$linha['nome'].'</b></h6>

										<p>'.$linha['texto'].'...<a style="font-weight: bold;" href="./editar/?id='.$id.'"">Ler mais</a></p>
										<span>
												
												'.$linha['data'].'

										</span>
									</div>';
						    } 
						?>

				</article>

		
		</section>

				<br><br>

				<div class="center-align">
					<button style="height: 50px;font-weight: bold!important;background-color: #191919  !important;color: white!important;box-shadow: none!important;width: 160px; border-radius: 50px!important;    border: none!important;">Mais condolências</button>
				</div>	
				<br><br><br>


				<div class="center-align">
					<h2 class="title">Veja também</h2>
					<br>
				</div>	
	</main>



		<?php include '../../../footer.php'; ?>

		<!-- <script src="../../node_modules/materialize-css/dist/js/materialize.min.js"></script> -->
		<script src="../../../build/materialize.min.js"></script>
		<script src="../../../build/axios.min.js"></script>
		<script src="../../../build/swiper.min.js"></script>
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