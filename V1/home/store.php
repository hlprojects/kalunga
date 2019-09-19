<?php 

    include(dirname(__FILE__) . '/../connect.php');
    include(dirname(__FILE__) . '/../../serverName.php');

    
    $IdUser = 0 ;

    if (isset($_SESSION['idUserPersona'])) {
      $IdUser = $_SESSION['idUserPersona'];
    }

    $prepa = $conn->prepare("

      SELECT id,nome,foto FROM `memorial` WHERE id in (select idMemorial from condolencia WHERE idPersona=".$IdUser.")  
      UNION DISTINCT
      SELECT id,nome,foto FROM `memorial` WHERE idPersonaCad =".$IdUser." 
      UNION DISTINCT
      SELECT id,nome,foto from memorial order by id desc limit 10" );

    if ($prepa->execute()) {
        while($linha = $prepa->fetch(PDO::FETCH_ASSOC)){

            echo '<div class="cover swiper-slide">
                    <a href="http://'.$UrlSite.'/src/views/memorial/?id='.$linha['id'].'">
                      <p class="center-align"><img style="-webkit-filter: grayscale(100%); filter: grayscale(50%);" src="media/photos/'.$linha['foto'].'"></p>
                      <p class="topN center-align"><strong>'.$linha['nome'].'</strong></p>
                    </a>
                  </div>';                        
        }       
    }
                   
 ?> 