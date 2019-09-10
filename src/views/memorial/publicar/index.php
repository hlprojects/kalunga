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

		<?php 	
			if (isset($_SESSION['idUserPersona'])) {
				include 'formulario_postar.php';		
			}else{
				include '../../formulario_redirecionar_login.php';	
			}	
		?>

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