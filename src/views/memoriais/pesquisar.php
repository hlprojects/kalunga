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
	<link rel="stylesheet" href="../../../build/css/materialize.min.css" />
	<link rel="stylesheet" href="../../../build/css/app.min.css" />
	<link rel="prefetch" href="../../../src/img/bg-flowers.jpg" />
	<link href="../../../build/material/material-icons.css" rel="stylesheet">

</head>
<body>

	<?php $initPath = '../../../'; include '../../../navBar.php'; ?>

	<main>
		<br>
		<h3 style="margin-left: 10px">Pesquisa: <span style="font-weight: lighter;">"<?php  echo $_GET['query']; ?>"</span></h3>
		
		<section class="funeral-content">
			<br>

			<div class="row">
				<?php  include '../../../V1/memoriais/pesquisa/index.php';?>
			</div>

		</section>
	</main>

	<?php include '../../../footer.php'; ?>

	<!-- <script src="../../../node_modules/materialize-css/dist/js/materialize.min.js"></script> -->
	<script src="../../../build/jquery.min.js"></script>
	<script src="../../../build/materialize.min.js"></script>
	<script src="../../../build/swiper.min.js"></script>

	<script>
		$(".dropdown-trigger").dropdown();
	</script>



</body>
</html>