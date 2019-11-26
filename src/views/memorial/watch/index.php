<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  	<meta name="theme-color" content="black" />
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  	<link rel="manifest" href="../../../../manifest.json">

	<title>Bioagrafia</title>
	
	<link rel="stylesheet" href="../../../../build/css/swiper.css" />
<style type="text/css">
  #folha{
    min-height: 1000px;
    padding: 20px;
    margin: 10px;
    margin-top: 30px;
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);
  }
</style>

</head>
<body>

  <?php 
    include('../../../../V1/memorial/index.php');
  ?>
<div id="folha">
  <h1><?php echo $nome;?></h1>
  <p style="text-align: justify;">
    <?php echo $bibliografia; ?>
  </p>
</div>


	<script src="../../../../build/swiper.min.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
	  
		});


	</script>
</body>
</html>