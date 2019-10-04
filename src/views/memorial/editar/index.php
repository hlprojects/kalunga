<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  	<meta name="theme-color" content="#999" />
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  	<link rel="manifest" href="../../../../manifest.json">
  	<link href="../../../../build/material/material-icons.css" rel="stylesheet">
	<link rel="shortcut icon" href="../../../../favicon.ico" />
	<title></title>
	
	<link rel="stylesheet" href="../../../../build/css/materialize.min.css" />
	<link rel="stylesheet" href="../../../../build/css/app.min.css" />
	<link rel="prefetch" href="../../../../src/img/bg-flowers.jpg" />

</head>
<body>

	<?php 
		include(dirname(__FILE__) . '/../../../../V1/memorial/index.php');
 	?>

	<header>

		<?php $initPath = '../../../../'; include '../../../../navbar.php'; ?>

		<div class="quotes center-align">
			<br><br><br>
			<h1 class="white-text"><strong>Editar</strong></h1>
		</div>

	</header>

	<main>

		<br>

	    <div>

			<form action="../../../../V1/memorial/editar/index.php" method="post" class="form-message" enctype="multipart/form-data">

				<div class="row">

					<div class="col s12">
					    <label for="capafoto"> 
					        <div style="overflow: hidden;border:none!important; height: 400px;width: 100%;border-style: ridge; background:grey;  " id="fotoCapa">

			
					        	<p style="text-align: center; position: absolute;width: 100%;font-size: 20px;margin-top: 15%"><span style="background: black;color: white;padding: 20px;font-weight: bold;">Clique para alterar</span></p>

					        	<img style="width: 100%" <?php echo "src='../../../../media/photos/".$capa."'"; ?>>

					        </div>
					        <input  style="display:none" type="file"  onchange="mudarCapa()" accept="image/*" name="capa" id="capafoto" >
					    </label>
					</div>

					<br><br><br>

				    <div class="col s4">
						<p class="center-align">
				            <label for="filefoto"> 
				                <img <?php echo "src='../../../../media/photos/".$foto."'"; ?> style="border-radius:100px;height: 200px;width: 200px;border-style: none; background:grey;  " id="foto">
				                <div style=""></div>
				                <input  style="display:none" type="file"  onchange="mudar()" accept="image/*" name="foto" id="filefoto">
				            </label>			
						</p>       
				    </div>

				    <div class="col s6">

				    	<input  type="text" style="display: none;" name="capa_antiga" value = <?php echo $capa ?> >
				    	<input  type="text" style="display: none;" name="foto_antiga" value = <?php echo $foto ?> >
				    	<input  type="text" style="display: none;" name="id" value = <?php echo $id ?> >

						<label for="nome_k">Nome</label>
						<input required type="text" name="nome_k" id="nome_k" placeholder="Nome do malogrado" value = <?php echo $nome ?> />

			            <label for="descricao_k">Descrição</label>
						<textarea name="descricao_k" id="descricao_k" class="materialize-textarea" placeholder="Descrição" cols="30" rows="10" maxlength="266" ><?php echo $descricao ?></textarea>

						<label for="data_nascimento_k">Data de nascimento</label>
						<input required type="date" class="" id="data_nascimento_k" name="data_nascimento_k" value = <?php echo $data_nascimento ?> />

						<label for="data_morte_k">Data da morte</label>
						<input required type="date" class="" id="data_morte_k" name="data_morte_k"  value = <?php echo $data_die ?>/>

						<label for="data_funeral_k">Data do funeral(Opcional)</label>
						<input required type="date" class="" id="data_funeral_k" name="data_funeral_k"  value = <?php echo $data_funeral ?>/>

						<label for="local_funeral_k">Local do funeral</label>
						<input required type="text"  id="local_funeral_k" name="local_funeral_k" value = <?php echo $local_funebre ?> />

			            <label for="bibliografia_k">Bibliografia</label>
						<textarea required name="bibliografia_k" id="bibliografia_k" class="materialize-textarea" placeholder="bibliografia" cols="30" rows="10" maxlength="266"><?php echo $bibliografia ?></textarea>

						<div class="call-to-action" style="display: flex; justify-content: space-between; align-items: center;">
							<input required type="submit" value="Salvar" class="waves-effect waves-light btn-large"> 
						</div>
					</div>
				</div>
			</form>        
	    </div>

     </div>

	</main>

	<?php include '../../../../footer.php'; ?>

	<!-- <script src="../../node_modules/materialize-css/dist/js/materialize.min.js"></script> -->
	<script src="../../../../build/materialize.min.js"></script>
	<script src="../../../../build/axios.min.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
		
	    	M.AutoInit();
	    });
	</script>
</body>
</html>