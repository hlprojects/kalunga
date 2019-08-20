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

<div style="position: absolute;width: 1000%;height: 100%;background: black;opacity: 0.8;">
	
</div>
<div style="position: fixed;width: 1000%;height: 100%;">



 
  
    <form style="width:50%;">

		<h1 style="color: white~;text-align: center;"><strong>Kalunga</strong></h1>

        <div  class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div style="width:50%;" class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
    </form>

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