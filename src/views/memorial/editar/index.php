<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  	<meta name="theme-color" content="black" />
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  	<link rel="manifest" href="../../../../manifest.json">
  	<link href="../../../../build/material/material-icons.css" rel="stylesheet">
	<link rel="shortcut icon" href="../../../../favicon.ico" />
	<title></title>
	
	<link rel="stylesheet" href="../../../../build/css/materialize.min.css" />
	<link rel="stylesheet" href="../../../../build/css/app.min.css" />
	<link rel="prefetch" href="../../../../src/img/bg-flowers.jpg" />

	<script type="text/javascript">
		function mudarCapa(){
			var input = document.getElementById('capafoto');
		    var reader = new FileReader();

		    reader.onload = function (e) {
		      var tagImage = document.getElementById('fotoCapa');
		      
		      tagImage.style.background = 'url(' + e.target.result + ')';
		    };

		    reader.readAsDataURL(input.files[0]);
		  
		}	

		function mudarFoto(){
			var input = document.getElementById('filefoto');
		    var reader = new FileReader();

		    reader.onload = function (e) {
		      var tagImage = document.getElementById('fotoProfile');
		      tagImage.src = e.target.result;
		    };

		    reader.readAsDataURL(input.files[0]);
		  
		}

		function eliminar_cancel(argument) {
			var form = document.getElementById('eliminar_form');
			form.style.display = 'none';

			var form = document.getElementById('eliminar_button');
			form.style.display = 'inline';
		}

		function eliminar_show_form(argument) {
			var form = document.getElementById('eliminar_form');
			form.style.display = 'inline';

			var form = document.getElementById('eliminar_button');
			form.style.display = 'none';
		}		  
	</script>
	
</head>
<body>



	<?php 
		include(dirname(__FILE__) . '/../../../../V1/memorial/index.php');

 	?>
		<?php $initPath = '../../../../'; include '../../../../navbar.php'; 

			if (isset($_SESSION['idUserPersona'])) {
				if ($_SESSION['idUserPersona']!=$idPersonaCad) {
					header('Location:../../../../');
				}
			}else{
				header('Location:../../../../'); 
			}

		?>




	<main>

	    <div>
	
					<form action="../../../../V1/memorial/editar/index.php" method="post" class="form-message" enctype="multipart/form-data">

						<header id="fotoCapa" class='memorial'   <?php echo "style='filter: grayscale(100%);height: 60vh; background: url(../../../../media/photos/".$capa.");background-repeat: no-repeat;background-size: cover'"; ?>>

							    <label for="capafoto"> 
									<div class="center-align valign-wrapper" style="height: 60vh;width: 100%;background: #000000c7;top: 0px">
									
										<p style="font-size: 20px;color: white;padding: 20px;width: 100%">Alterar capa</span></p>

										
									</div>	
							        <input  style="display:none" type="file"  onchange="mudarCapa()" accept="image/*" name="capa" id="capafoto" >
							    </label>

						



						</header>

						<p class="center-align" style="width: 100%;margin-top: -100px">
							<label for="filefoto"> 
						        <img id="fotoProfile" src=<?php  echo "../../../../media/photos/".$foto; ?>>

						        <br>
						        	
						       <strong style="font-size: 20px">Alterar</strong>

						        <input  style="display:none" type="file"  onchange="mudarFoto()" accept="image/*" name="foto" id="filefoto">
						     </label>
									
						</p>	


								<div class="valign-wrapper row login-box">
	    						
								    <div class="col  s10 pull-s1   card bioBlack row">
								    <br>
								    	<input  type="text" style="display: none;" name="capa_antiga" value = <?php echo $capa ?> >
								    	<input  type="text" style="display: none;" name="foto_antiga" value = <?php echo $foto ?> >
								    	<input  type="text" style="display: none;" name="id" value = <?php echo $id ?> >

								    	<div style="padding-right: 40px">

									    	<div class="col  s12">
												<label for="nome_k">Nome</label>

												<?php 
													echo '<input required type="text" name="nome_k" id="nome_k" placeholder="Nome do malogrado" value="'.$nome.'">';
												 ?>
												
											</div>

									    	<div class="col  s12">
												<label for="data_nascimento_k">Data de nascimento</label>
												<input required type="date" class="" id="data_nascimento_k" name="data_nascimento_k" value = <?php echo $data_nascimento ?> >
											</div>

									    	<div class="col  s12">
												<label for="data_morte_k">Data da morte</label>
												<input required type="date" class="" id="data_morte_k" name="data_morte_k"  value = <?php echo $data_die ?>>
											</div>

									    	<div class="col  s12">
												<label for="data_funeral_k">Data do funeral(Opcional)</label>
												<input  type="date" class="" id="data_funeral_k" name="data_funeral_k"  value = <?php echo $data_funeral ?>>
											</div>

									    	<div class="col  s12">
												<label for="local_funeral_k">Local do funeral</label>
												<input  type="text"  id="local_funeral_k" name="local_funeral_k" value = <?php echo $local_funebre ?> >

									    	</div>
									    </div>

								    	<div class="col  s12">
								            <label for="descricao_k">Descrição</label>
											<textarea name="descricao_k" id="descricao_k" class="materialize-textarea" placeholder="Descrição" cols="30" rows="10" maxlength="266" ><?php echo $descricao ?></textarea>				
										</div>

								    	<div class="col  s12">
											<label for="bibliografia_k">Bibliografia</label>
											<textarea  name="bibliografia_k" id="bibliografia_k" class="materialize-textarea" placeholder="bibliografia" cols="30" rows="10" ><?php echo $bibliografia ?></textarea>
										</div>

										<button type="submit"  style="border: none!important; margin-left: 10px;width: 200px;color: black!important" class="btn-publish kalunga waves-effect">Salvar</button>
										<br>
										<br>
									</div>
								</div>

					</form>

					

					<div class="valign-wrapper row login-box">
	    						
						<div class="col  s10 pull-s1 center-align ">

							<form action="../../../../V1/memorial/eliminar/index.php" method="post" class="form-message" enctype="multipart/form-data">

								<input  type="text" style="display: none;" name="capa_antiga" value = <?php echo $capa ?> >
								<input  type="text" style="display: none;" name="foto_antiga" value = <?php echo $foto ?> >
								<input  type="text" style="display: none;" name="id" value = <?php echo $id ?> >
								<input  type="text" style="display: none;" name="boletim" value = <?php echo $boletim ?> >
								<input  type="text" style="display: none;" name="BI" value = <?php echo $BI ?> >


								<div id="eliminar_form" class="center-align" style="display: none;">
									

									<button type="submit" style="font-weight: bold!important;background-color: #191919  !important;color: white!important;box-shadow: none!important;width: 300px; border-radius: 50px!important;background: #F44336!important;border: none!important;" type="submit"  class="btn-publish kalunga waves-effect">Eliminar agora</button>

									<a onclick="eliminar_cancel()" style="margin-left: 30px; color: red;font-weight: bold;" >Cancelar</a>							
								</div>

								
						
							</form>
							<button id="eliminar_button" onclick="eliminar_show_form()"  style="border: none!important; margin-left: 10px;width: 300px;background: #F44336!important;    border-radius: 30px !important;color: white" class="btn-publish kalunga waves-effect">Eliminar</button>
						</div>
					</div>

					
      
	    </div>

     </div>

	</main>

	<?php include '../../../../footer.php'; ?>


	<script src="../../../../build/materialize.min.js"></script>
	<script src="../../../../build/axios.min.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
	    	M.AutoInit();
	    });
	</script>
</body>
</html>