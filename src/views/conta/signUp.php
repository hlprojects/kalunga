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
	<title></title>
	
	<link rel="stylesheet" href="../../../build/css/materialize.min.css" />
	<link rel="stylesheet" href="../../../build/css/app.min.css" />
	<link rel="prefetch" href="../../src/img/bg-flowers.jpg" />


</head>

<body style="background: url(../../../src/img/bg-flowers2.jpg);background-size:cover; background-repeat: no-repeat; height: 100%;width: 100%;background-attachment:fixed;background-position: bottom;">


	<div style="position: fixed;width: 1000%;height: 100%;background: black;opacity: 0.9;"></div>

	<br><br><br>

	<div  class="valign-wrapper row login-box">
	
	  <div class="col  s10 pull-s1 m6 pull-m3 l4 pull-l4">
		<img src="../../../src/img/logo.png" width="250">
	    <form action="../../../V1/conta/criar/index.php" method="post">
	      <div class="card-content">

	        <?php 

	          	if (isset($_GET["p"])) {
	          	 	echo '<span class="card-title" style="color: white">Crie uma conta para continuar sua publicação</span>';
	          	}else{
	          	 	echo '<span class="card-title" style="color: white">Registo, introduza seus dados:</span>';
	          	}

	        ?>	      
	        
	        <div class="row">
	          <div class=" col s12">
	          	<br>
	            <label for="nome">Nome</label>
	            <input type="text" placeholder="Seu nome" class="validate textWhite" name="nome" id="nome" required />
	          </div>
	          <div class=" col s12">
	            <label for="email">Email ou telefone</label>
	            <input type="email" placeholder="Seu contacto" class="validate textWhite" name="email" id="email" required />
	          </div>
	          <div class=" col s12">
	            <label for="password">Senha </label>
	            <input placeholder="Sua senha" type="password" class="validate textWhite" name="password" id="password" required />
	          </div>

	              
	          <div class="col s12">

		        <br> 
		        <input style="font-weight: bold!important; width: 100%;background-color: #353535 !important;" type="submit" class="btn green waves-effect waves-light" value="Registar">

	     	 </div>

	          <div class="col s12 center">
	          	<br> <br>
	          	<?php 

	          		if (isset($_GET["error"])) {
	          			if ($_GET["error"]=="1") {
	          				echo "<p style='color:red'>Email ou telefona já usado</p>";
	          			}
	          		}

	          	 	if (isset($_GET["p"])) {
	          	 		echo '<a style="font-weight: bold!important;" href="signIn.php?p='.$_GET["p"].'">Já tenho uma conta!</a>';
	          	 		echo '<input type="text" value="'.$_GET["p"].'" class="noDisplay" name="memorialCadProgressId" />';	          	 		
	          	 	}else{
	          	 		echo '<a style="font-weight: bold!important;" href="signIn.php?">Já tenho uma conta!</a>';
	          	 	}

	          	  ?>

	          </div> 	     	 
	        </div>
	      </div>

	    </form>
	  </div>
	</div>

</body>
</html>