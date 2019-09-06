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
	<link rel="stylesheet" href="../../build/css/materialize.min.css" />
	<link rel="stylesheet" href="../../build/css/app.min.css" />
	<link rel="prefetch" href="../../src/img/bg-flowers.jpg" />
	<link href="../../build/material/material-icons.css" rel="stylesheet">
	<script type="text/javascript">
	

	</script>
</head>
<body style="background: url(../../src/img/bg-flowers2.jpg);background-size:cover; background-repeat: no-repeat; height: 100%;width: 100%;background-attachment:fixed;">


<div style="position: fixed;width: 1000%;height: 100%;background: black;opacity: 0.9;">

    
	
</div>

<br><br><br>
<div  class="valign-wrapper row login-box">
	
	  <div class="col  s10 pull-s1 m6 pull-m3 l4 pull-l4">
		<h1 style="color: white"><strong>Kalunga</strong></h1><br>
	    <form action="../../V1/conta/validacao/index.php" method="post">
	      <div class="card-content">
	        <span class="card-title" style="color: white">Login, introduza seus credencias:</span>
	        <div class="row">
	          <div class="col s12">
	            <label for="email">Email ou telefone</label>
	            <input type="email" placeholder="Seu contacto" class="validate textWhite" name="email" id="email" />
	          </div>
	          <div class="col s12">
	            <label for="password">Senha </label>
	            <input placeholder="Sua senha" type="password" class="validate textWhite" name="password" id="password" />
	          </div>
	        </div>
	      </div>
	      <div class="card-action right-align">

	        <input style="color: white" type="reset" id="reset" class="btn-flat grey-text waves-effect">

	        <input style="font-weight: bold!!important;"  type="submit" class="btn green waves-effect waves-light" value="Entrar">
	      </div>
	    </form>
	  </div>
	</div>


	<!-- <script src="../../node_modules/materialize-css/dist/js/materialize.min.js"></script> -->
	<script src="../../build/materialize.min.js"></script>
	<script src="../../build/jquery.min.js"></script>
	<script src="../../build/swiper.min.js"></script>
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