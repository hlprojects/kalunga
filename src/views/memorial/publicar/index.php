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

</head>
<body>



	<?php $initPath = '../../../../'; include '../../../../navbar.php'; ?>

	<main>


		

		
	
	    <div class="valign-wrapper row login-box">
	    	<div class="col  s10 pull-s1">
						<h2 class="center"><strong>Publicação</strong></h2>
						<h3 class="title center-align">Informações do malogrado:</h3>
				<form action="../../../../V1/memorial/criar/index.php" method="post" class="form-message bioBlack2" enctype="multipart/form-data">

					<div class="row">



					    <div class="col s12" >

							<label for="nome_k">Nome</label>
							<input class="inputs" required type="text" name="nome_k" id="nome_k" placeholder="Nome do malogrado" />

				            <label for="descricao_k">Descrição</label>
							<textarea class="inputs inputsArea" name="descricao_k" id="descricao_k" class="materialize-textarea" placeholder="Descrição da morte" cols="30" rows="10" maxlength="266"></textarea>

							<label for="data_nascimento_k">Data de nascimento</label>
							<input class=" inputs" required type="date" class="" id="data_nascimento_k" name="data_nascimento_k"  />

							<label for="data_morte_k">Data da morte</label>
							<input class="inputs" required type="date" class="" id="data_morte_k" name="data_morte_k"  />

						    <div class="file-field input-field">
						      <div style="font-weight: bold!important;width: 100%;background-color: #353535 !important;color: white !important" class="btn">
						        <span >Carregar Bilhete de identidade</span>
						        <input required accept="*/" type="file"  name="BI_k" id="BI_k" />
						      </div>
						      <div class="file-path-wrapper">
						        <input required class="file-path validate" type="text">
						      </div>
						    </div>

						    <div class="file-field input-field">
						      <div style="font-weight: bold!important;width: 100%;background-color: #353535 !important;color: white !important" class="btn">
						        <span >Carregar Boletim de óbito</span>
						        <input required accept="*/" type="file"  name="boletim_k" id="boletim_k" />
						      </div>
						      <div class="file-path-wrapper">
						        <input required class="file-path validate" type="text">
						      </div>
						    </div>

						    <button style="border: none!important;box-shadow: none!important;font-weight: bold!important;width: 100%;background-color: #353535 !important;color: white !important;border-radius: 50px!important" class="waves-effect waves-light btn-large" type="submit">Publicar</button>
							
							
						</div>
					</div>
				</form> 
			</div>       
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