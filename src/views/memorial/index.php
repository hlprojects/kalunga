<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  	<meta name="theme-color" content="black" />
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	
  	<link rel="manifest" href="../../manifest.json">
	<link rel="shortcut icon" href="../../favicon.ico" />
	

	<!-- <link rel="stylesheet" href="../../node_modules/materialize-css/dist/css/materialize.min.css" /> -->

	<link rel="stylesheet" href="../../../build/css/materialize.min.css" />
	<link rel="stylesheet" href="../../../build/css/animate.css" />
	<link rel="stylesheet" href="../../../build/css/app.min.css" />
	<link rel="prefetch" href="../../../src/img/bg-flowers.jpg" />
	<link href="../../../build/material/material-icons.css" rel="stylesheet">



	<?php 
		include(dirname(__FILE__) . '/../../../V1/memorial/index.php');
 	?>

 	<?php 
 		echo '
 			   <title>'.$nome.' - Kalunga</title>
 			   <meta property="og:url" content="http://hlkalunga.com/src/views/memorial/?id='.$id.'" />
			   <meta property="og:title" content="'.$nome.'" />
			   <meta property="og:description" content="'.substr($bibliografia, 0,100).'" />
			   <meta property="og:image" content="http://hlkalunga.com/media/photos/'.$foto.'" />
 		';
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

		function imagemEliminar(id,nome) {

			var fileInput = document.getElementById('imagem'+id);

		    var data = new FormData();

		    data.append('nome',nome);
		    data.append('id',id);

	
		    axios.post('../../../V1/memorial/fotos/eliminar/index.php',data)
		      .then(function (res) {
		        if (res.data == "1") {

		        	location.reload();
		        }
		      })
		      .catch(function (err) {
		        console.log(res.data);
		        location.reload();
		      });					
		}

		function notifi_cancel(argument) {
			var form = document.getElementById('notifi_form');
			form.style.display = 'none';

			var form = document.getElementById('notifi_button');
			form.style.display = 'table';
		}

		function notifi_show_form(argument) {
			var form = document.getElementById('notifi_form');
			form.style.display = 'table';

			var form = document.getElementById('notifi_button');
			form.style.display = 'none';
		}		

		function moreBio() {
			var biomore = document.getElementById('biomore');
			biomore.style.display = 'table';

			var biomenus = document.getElementById('biomenus');
			biomenus.style.display = 'none';
		}

		function menusBio() {
			var biomore = document.getElementById('biomore');
			biomore.style.display = 'none';

			var biomenus = document.getElementById('biomenus');
			biomenus.style.display = 'table';
		}



		function condoMore(id) {
			var condoMore = document.getElementById('condoMore'+id);
			condoMore.style.display = 'table';

			var condoMenus = document.getElementById('condoMenus'+id);
			condoMenus.style.display = 'none';
		}

		function condoMenus(id) {
			var condoMenus = document.getElementById('condoMenus'+id);
			condoMenus.style.display = 'table';

			var condoMore = document.getElementById('condoMore'+id);
			condoMore.style.display = 'none';
		}
	
	</script>
</head>

<body>


	<?php $initPath = '../../../'; include '../../../navBar.php'; ?>

	<header class='memorial'   <?php echo "style='filter: grayscale(100%);height: 60vh; background: url(../../../media/photos/".$capa.");background-repeat: no-repeat;background-size: cover'"; ?>>

	


		<div class="center-align valign-wrapper" style="height: 60vh;width: 100%;background: #000000c7;top: 0px; position: relative;">

		

				<div style="width: 100%">
					<h3 class="white-text wow fadeIn" style="margin: 0px"  data-wow-duration="500ms" data-wow-delay="300ms"   ><?php echo $nome; ?></h3>
					<div class="death-date white-text wow fadeIn"  data-wow-duration="500ms" data-wow-delay="300ms" ><?php echo $ano_nasce.' - '.$ano_morte ; ?></div>
				

					<?php 
						if (isset($_SESSION['idUserPersona']) && $_SESSION['idUserPersona']==$idPersonaCad ) {
							echo '<a style="font-weight: bold;color: white;text-decoration: underline;" href="./editar/?id='.$id.'"">Editar perfíl</a>';
						}
					 ?>


				</div>
			<i class="material-icons" style="display: none;position: absolute;top: 30px;right: 30px; font-size: 30px;color: white;">favorite</i>	

		</div>

	
	

	</header>

	<p style="text-align: center; width: 100%;margin-top: -100px">
		<img class="wow bounceIn"  data-wow-duration="500ms" data-wow-delay="300ms"  id="fotoProfile" src=<?php  echo "../../../media/photos/".$foto; ?>>		
	</p>	

	<div class="center-align" style="display: none;">
		  		<ul class="produto-tab">
		  			<li>
		  				<h5>8</h5>
		  				<p>Fotos</p>
		  			</li>
		  			<li>
		  				<h5>54</h5>
		  				<p>Condolêcnias</p>
		  			</li>
		  			<li>
		  				<h5>8</h5>
		  				<p>Ligações</p>
		  			</li>
		  		</ul>		
	</div>
				
			<br>
		<main id="memorial-content">
			<section class="funeral-content">


			<div class="row">
				<div class="col s12 m12 l6">
					<div class="bio card wow fadeIn"  data-wow-duration="500ms" data-wow-delay="300ms">
						<h2 style="margin: 0px!important" class="title">Biografia
						</h2>
						<a href= <?php echo "bio/?id=".$id; ?>>
							<i class="material-icons" style="position: absolute;top: 20px;right: 20px; font-size: 25px;color: grey">open_in_new</i>
						</a>
						<p id="biomenus" onclick="moreBio()">
						<?php 
							if (empty($bibliografia) && $_SESSION['idUserPersona']==$idPersonaCad ) {
								echo '<a style="font-weight: bold;" href="./editar/?id='.$id.'"">Actualizar biografia</a>';
							}else{

								echo substr($bibliografia, 0,300);

								if (strlen($bibliografia)>300) {
									echo '...<a style="font-weight: bold;" >Ler mais</a>';
								}
							}
							
						 ?>
							
						</p>

						<p id="biomore" style="display: none;" onclick="menusBio()">
							<?php 
								echo $bibliografia;
							 ?>
							
							<a style="font-weight: bold;"  >Ler menos</a>
						</p>	
						
					</div>

					<br>

					<div style="padding-left: 10px;">
						<strong>Partilhar:</strong>
						<br><br>

						

						


						

 						  

							  
 						  <?php 


 						  	echo  '


							<button style="font-weight: bold!important;background-color: #094c9e    !important;color: white!important;box-shadow: none!important;width: 100px; border-radius: 50px!important;    border: none!important;" type="submit" id="fb-share-button" class="btn-publish kalunga waves-effect wow bounceIn"  data-wow-duration="500ms" data-wow-delay="300ms">

							<img height="15" src="../../img/facebook.png">

							</button>


 							 <a class="twitter-share-button"
							  href="https://twitter.com/intent/tweet?text= '.$nome.' - Kalunga,'.substr($bibliografia, 0,500).'...http://hlkalunga.com/src/views/memorial/?id='.$id.'&url=http://hlkalunga.com/src/views/memorial/?id='.$id.'&hashtags=Kalunga,'. str_replace(' ','', $nome).'"
							  data-size="large">
							  <button style=" margin-left: 10px; margin-right: 10px;font-weight: bold!important;background-color: #03A9F4    !important;color: white!important;box-shadow: none!important;width: 100px; border-radius: 50px!important;    border: none!important;" type="submit"  class="btn-publish kalunga waves-effect wow bounceIn"  data-wow-duration="500ms" data-wow-delay="300ms"><img height="15" src="../../img/twiter.png"></button>
							</a>

							<button style="font-weight: bold!important;background-color: white    !important;color: white!important;box-shadow: none!important;width: 50px; border-radius: 100px!important;    border: 1px solid #e8e8e8  !important;" type="submit"  class="btn-publish kalunga waves-effect wow bounceIn"  data-wow-duration="500ms" data-wow-delay="300ms">

								<i class="material-icons" style="color: grey;margin-top:3px">more_horiz</i>
							
							</button>



 						 ';

 						   ?>



												
					</div>					

					<br><br>
									
				</div>

				<div class="col s12 m12 l6">
					<div class="bio card  wow fadeIn"  data-wow-duration="500ms" data-wow-delay="300ms" >
						<h2 style="margin: 0px!important" class="title">Funeral</h2>
						<i class="material-icons" style="position: absolute;top: 20px;right: 20px; font-size: 30px;color: grey">notifications_none</i>
						<ul class="funeral-date">
						<br>
							<li><strong>Local Funebre:</strong>  <?php  echo $local_funebre; ?> </li>
				
							<li><strong>Dia do funeral:</strong> <?php  echo $data_funeral; ?> </li>
					
							<li>
							<br>

							<form method="post" id="notifi_form" style="display: none;" action="../../../V1/memorial/notificacao/index.php">


							<div  >
								<h3 class="title">Notificar-me</h3>
								<input  type="text" style="display: none;" name="idMemorial" value = <?php echo $id ?> >
								<input type="text" required placeholder="Telefone" class="inputs" name="notifi_telefone" >

								<input type="email" placeholder="Email (Opcinal)"  class="inputs" name="notifi_email" >	

								<button type="submit" style="font-weight: bold!important;background-color: #191919  !important;color: white!important;box-shadow: none!important;width: 130px; border-radius: 50px!important;    border: none!important;" type="submit"  class="btn-publish kalunga waves-effect">Comfirmar</button>

								<a onclick="notifi_cancel()" style="margin-left: 30px; color: red;font-weight: bold;" >Cancelar</a>							
							</div>

						</form>
								

						<a href="#bioBlack">
							<button style=" font-weight: bold!important;background-color: #191919  !important;color: white!important;box-shadow: none!important;width: 250px; border-radius: 50px!important;    border: none!important; padding-left: 0px!important" type="submit"  class="btn-publish kalunga waves-effect">Publicar condolência
						<i class="material-icons" style="position: absolute;margin-top: 0px;margin-left: 10px; font-size: 20px">arrow_forward</i>
						</button>
						</a>

						<?php 

							if (isset($_GET['n_done'] )) {
								echo '<i class="material-icons" style="color: #26a69a!important; font-size: 30px">check</i><span style="margin-top: 5px;position: absolute;"> Em breve será notificado</span>';
							}else{
								echo '<button onclick="notifi_show_form()" style="display: none;" id="notifi_button" style="font-weight: bold!important;background-color: #191919  !important;color: white!important;box-shadow: none!important;width: 200px; border-radius: 50px!important;    border: none!important; padding-left: 0px!important"   class="btn-publish kalunga waves-effect">Notificar-me 

								<i class="material-icons" style="position: absolute;margin-top: 0px;margin-left: 10px; font-size: 20px">notifications</i>
								</button>';
							}

						 ?>
								

								
							
								
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
					<h2 class="title "  >Fotos</h2>
					<div class="fotos row ">

					<?php 
						
						if (isset($_SESSION['idUserPersona']) && $_SESSION['idUserPersona']==$idPersonaCad ) {
							
							echo '
							<div class=" col s6 m4 l3 center-align " style="height: 150px;margin-top: 20px;">
								<label class="valign-wrapper" for="fileFoto" style="background: white;height: 150px;width: 100%;border-radius: 10px;">
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

						    $prepa = $conn->prepare("select * from foto where idMemorial =".$id." limit 8");
						    $prepa->execute();

						    
						    while($linha = $prepa->fetch(PDO::FETCH_ASSOC)){
						    	$link = ''; 
						    	if (isset($_SESSION['idUserPersona']) && $_SESSION['idUserPersona']==$idPersonaCad ) {
						    		$idFoto = $linha['id'];
						    		$nomeFoto = $linha['foto'];
									$link = "<i class='material-icons' onclick=imagemEliminar($idFoto,'$nomeFoto') >close</i>";
								}
						
				    			echo '
									<div class="imagem imagem'.$linha['id'].' col s6 m4 l3  wow fadeIn"  data-wow-duration="500ms" data-wow-delay="300ms" style="position:relative">

										'.$link.'

										<i class="material-icons" style="position: absolute;bottom: 20px;right: 20px; font-size: 25px;color: #ffffff59;    background: transparent">hd</i>

										<a href="view/?id='.$linha['id'].'&foto='.$linha['foto'].'&idm='.$id.'">
											<img  style="height:150px; filter: grayscale(100%);" src="../../../media/photos/'.$linha['foto'].'">
										</a>
										
									</div>';			
						    }        
						 ?>



				  </div>

				</article>

		
		</section>


			<br id="bioBlack"><br>
			<div   style="margin-left: 15%;margin-right: 15%;" class="divider"></div>
			<br>

			

		<section class="row">
				
				
				<article class="col s12 m12">
					<h2 class="title" >Publicar condolência</h2>
					<h3 class="title">Deixe o seu apoio</h3>
					<br>
					<div >
						
					<?php 
						include 'condolencias/index.php';
					 ?>					
				</article>
		</section>

				
		<br>
		<div style="margin-left: 15%;margin-right: 15%;" class="divider"></div>
		<br>

		
		<section class="row">
			
				
				<article class="col s12 m12">
				
				<div style="display: flex;">


					<?php 

						$condolencias = "";
						$count = 0;

						$prepa = $conn->prepare("select id,condolencia.texto,condolencia.data,nome from condolencia where  idMemorial =".$id);

						$prepa->execute();
						while($linha = $prepa->fetch(PDO::FETCH_ASSOC)){ 

							$count = $count + 1;
							$more = '';
							if (strlen($linha['texto'])>100) {
									$more = '...<a style="font-weight: bold;"  >Ler mais</a>';
							}

							$eliminar = '';

							if ( isset($_SESSION['idUserPersona']) && $_SESSION['idUserPersona']==$idPersonaCad ) {
								$eliminar = '<i class="material-icons" style="position: absolute;top: 20px;right: 20px; font-size: 25px;color: grey">close</i>';
							}
							

				    		$condolencias = $condolencias.'<div class="condolencia card wow fadeIn"  data-wow-duration="500ms" data-wow-delay="300ms">

				    				
				    				'.$eliminar.'

				    				<div style="display:flex">
					    				<i class="material-icons" style="font-size:40px;color:grey">account_circle</i>
					    					<h6 style="margin-left:10px"><b>'.$linha['nome'].'</b></h6>
				    				</div>
				    					


										<p id="condoMenus'.$linha['id'].'" onclick="condoMore('.$linha['id'].')">
											'.substr($linha['texto'], 0,100).$more.'
										</p>


										<p id="condoMore'.$linha['id'].'" style="display: none;" onclick="condoMenus('.$linha['id'].')">
							
											'.$linha['texto'].'
											<a style="font-weight: bold;"  >Ler menos</a>
										</p>


										<span>
											<strong>Data: </strong>
												
												'.$linha['data'].'

										</span>
									</div>';
						    } 
						?>


					<h2 class="title" >Condolências</h2>


						<?php 

							if ($count==0) {
								echo "
									</div>
									<div class='center-align'>
										<p>sem publicações, seja o primeiro a deixar apoio</p>


								<a href='#bioBlack'>
									<button style=' font-weight: bold!important;background-color: #191919  !important;color: white!important;box-shadow: none!important;width: 250px; border-radius: 50px!important;    border: none!important; padding-left: 0px!important' type='submit'  class='btn-publish kalunga waves-effect'>Publicar condolência
								<i class='material-icons' style='position: absolute;margin-top: 0px;margin-left: 10px; font-size: 20px'>arrow_forward</i>
								</button>
								</a>									
									</div>
									";
							}else{
								echo '
								<a href="#bioBlack">
										<button style="display:none;margin-top: 30px;margin-left: 10px; font-weight: bold!important;background-color: #191919  !important;color: white!important;box-shadow: none!important;width: 120px; border-radius: 50px!important;    border: none!important; padding-left: 0px!important" type="submit"  class="btn-publish kalunga waves-effect">Assistir 
									<i class="material-icons" style="position: absolute;margin-top: -1px;margin-left: 3px; font-size: 20px">slow_motion_video</i>
									</button>
								</a>
								</div>
								<h5 class="title">'.$count.' publicações</h5>';
								echo $condolencias;
							}
						 ?>

				</article>

		
		</section>


		<section class="row">
				
				
				<article class="col s12 m12">
					<h2 class="title" >Veja também</h2>	
					<div class="row">
						

			<?php 


	

			    $prepa = $conn->prepare("select nome,foto,id from memorial where accept=1 and id<>".$id."  order by rand() limit 4");
			  
			    if ($prepa->execute()) {
			        while($linha = $prepa->fetch(PDO::FETCH_ASSOC)){

			            echo '<div class="col s6 m3 l3">
			                   <a  href="../memorial/?id='.$linha['id'].'" >
			                      <div class="card" style="border-radius: 10px;filter: grayscale(100%);background:url(../../../media/photos/'.$linha['foto'].');background-size: cover!important;height: 200px;background-position: center!important;">
			                        
			                          <p style="border-radius: 10px;color:white;padding: 20px;width: 100%;height: 100%;background-color: #00000091;font-size: 20px;" class="card-title">'.$linha['nome'].



			                          '</p>

			                          
			                       
			                      </div>
			                   </a>
			                  </div>';               
			        }       
			    }
			                   
			 ?> 

					</div>
				
				</article>
		</section>

				
	</main>


		<?php include '../../../footer.php'; ?>

		<!-- <script src="../../node_modules/materialize-css/dist/js/materialize.min.js"></script> -->
		<script src="../../../build/materialize.min.js"></script>
		<script src="../../../build/axios.min.js"></script>
		<script src="../../../build/swiper.min.js"></script>
		<script src="../../../build/wow.min.js"></script>

		<script>
			document.addEventListener('DOMContentLoaded', function() {
		    M.AutoInit();
		    new WOW().init();

			var fbButton = document.getElementById('fb-share-button');
			var url = window.location.href;

			fbButton.addEventListener('click', function() {
			    window.open('https://www.facebook.com/sharer/sharer.php?u=' + url,
			        'facebook-share-dialog',
			        'width=800,height=600'
			    );
			    return false;
			});	

		  });


	    
		</script>


<style type="text/css">
	
	.produto-tab{
		margin: 0px;
		padding: 0px;
		
	}

	.produto-tab>li{
			
		display: inline-block;
		margin-right: 10px;
		margin-left: 10px;
		text-align: center;
	}

	.produto-tab>li>p{
    	color: #888888;
	}
	.produto-tab>li>*{	
		margin: 0px;
		font-weight: bold;
	}
		
</style>

</body>
</html>