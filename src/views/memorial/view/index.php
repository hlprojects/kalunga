<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  	<meta name="theme-color" content="black" />
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  	<link rel="manifest" href="../../../../manifest.json">

	<title>Visualizador</title>
	
	<link rel="stylesheet" href="../../../../build/css/swiper.css" />

    <style>
    html, body {
        position: relative;
        height: 100%;
    }
    body {
        background: #000;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color:#000;
        margin: 0;
        padding: 0;
    }
    .swiper-container {
        width: 100%;
        height: 100%;
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #000;
        
    }
    .swiper-slide img {
      width: auto;
      height: auto;
      max-width: 100%;
      max-height: 100%;
      -ms-transform: translate(-50%, -50%);
      -webkit-transform: translate(-50%, -50%);
      -moz-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      position: absolute;
      left: 50%;
      top: 50%;
    }
    </style>

</head>
<body>

    <div class="swiper-container">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <!-- Required swiper-lazy class and image source specified in data-src attribute -->
                <?php echo '<img data-src="../../../../media/photos/'.$_GET["foto"].'" class="swiper-lazy">'; ?>
                
                <!-- Preloader image -->
                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
            </div>

	 	<?php 
			include('../../../../V1/memorial/fotos/view/index.php');
	 	?>           
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Navigation -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>


	<script src="../../../../build/swiper.min.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
		    var swiper = new Swiper('.swiper-container', {
		        nextButton: '.swiper-button-next',
		        prevButton: '.swiper-button-prev',
		        pagination: '.swiper-pagination',
		        paginationClickable: true,
		        // Disable preloading of all images
		        preloadImages: false,
		        // Enable lazy loading
		        lazyLoading: true,
		        zoom: true,
		        effect: 'fade'
		    });		  
		});


	</script>
</body>
</html>