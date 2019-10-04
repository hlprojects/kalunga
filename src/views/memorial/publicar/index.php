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

	<header>

		<?php $initPath = '../../../../'; include '../../../../navbar.php'; ?>

		<div class="quotes center-align">
			<br><br><br>
			<h1 class="white-text"><strong>Publicação</strong></h1>
		</div>

	</header>

	<main>

		<br>
		<h3 class="title center-align">Informações do malogrado</h3>

		<br><br><br>
	
	    <div>

			<form action="../../../../V1/memorial/criar/index.php" method="post" class="form-message" enctype="multipart/form-data">

				<div class="row">

					<div class="col s12">
					    <label> 
					        <img style=" border:none!important; height: 400px;width: 100%;border-style: ridge; background:grey;  border-color: grey" id="fotoCapa">
					        <input required style="display:none" type="file"  onchange="mudarCapa()" accept="image/*" name="capa" id="capafoto" >
					    </label>
					</div>


				    <div class="col s4">
						<p class="center-align">
				            <label> 
				                <img style="border:none!important;height: 200px;width: 200px;border-style: ridge; background:grey;  border-color: grey" id="foto">
				                <input required style="display:none" type="file"  onchange="mudar()" accept="image/*" name="file" id="filefoto">
				            </label>			
						</p>       
				    </div>

				    <div class="col s6">

						<label for="nome_k">Nome</label>
						<input required type="text" name="nome_k" id="nome_k" placeholder="Nome do malogrado" />

			            <label for="descricao_k">Descrição</label>
						<textarea name="descricao_k" id="descricao_k" class="materialize-textarea" placeholder="Descrição" cols="30" rows="10" maxlength="266"></textarea>

						<label for="data_nascimento_k">Data de nascimento</label>
						<input required type="date" class="" id="data_nascimento_k" name="data_nascimento_k"  />

						<label for="data_morte_k">Data da morte</label>
						<input required type="date" class="" id="data_morte_k" name="data_morte_k"  />

						<label for="data_funeral_k">Data do funeral(Opcional)</label>
						<input required type="date" class="" id="data_funeral_k" name="data_funeral_k"  />

						<label for="local_funeral_k">Local do funeral</label>
						<input required type="text"  id="local_funeral_k" name="local_funeral_k"  />

					    <div class="file-field input-field">
					      <div class="btn">
					        <span>Boletim de óbito</span>
					        <input required type="file"  name="boletim_k" id="boletim_k" />
					      </div>
					      <div class="file-path-wrapper">
					        <input required class="file-path validate" type="text">
					      </div>
					    </div>

			            <label for="bibliografia_k">Bibliografia</label>
						<textarea required name="bibliografia_k" id="bibliografia_k" class="materialize-textarea" placeholder="bibliografia" cols="30" rows="10" maxlength="266"></textarea>

						<div class="call-to-action" style="display: flex; justify-content: space-between; align-items: center;">
							<input required type="submit" value="Registar" class="waves-effect waves-light btn-large"> 
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