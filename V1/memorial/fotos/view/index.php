<?php 

	include (dirname(__FILE__)."../../../../connect.php");

	$prepa = $conn->prepare("select foto from foto where idMemorial=".$_GET["idm"]." and id>".$_GET["id"]);

    if ($prepa->execute()) {
        while($linha = $prepa->fetch(PDO::FETCH_ASSOC)){

            echo '

            <div class="swiper-slide">
                <!-- Required swiper-lazy class and image source specified in data-src attribute -->
                <img data-src="../../../../media/photos/'.$linha["foto"].'" class="swiper-lazy">
                
                <!-- Preloader image -->
                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
            </div>

            ';               
        }       
    }


    $prepa = $conn->prepare("select foto from foto where idMemorial=".$_GET["idm"]." and id<".$_GET["id"]);

    if ($prepa->execute()) {
        while($linha = $prepa->fetch(PDO::FETCH_ASSOC)){

            echo '

            <div class="swiper-slide">
                <!-- Required swiper-lazy class and image source specified in data-src attribute -->
                <img data-src="../../../../media/photos/'.$linha["foto"].'" class="swiper-lazy">
                
                <!-- Preloader image -->
                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
            </div>

            ';               
        }       
    }
                   
 ?>