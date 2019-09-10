<?php 


    include(dirname(__FILE__) . '/../connect.php');


    $prepa = $conn->prepare("select condolencia.*,memorial.nome from condolencia,memorial where condolencia.idMemorial in (select id from memorial where  idPersona=".$_SESSION['idUserPersona'].") and   condolencia.idMemorial=memorial.id");

    if ($prepa->execute()) {
        while($linha = $prepa->fetch(PDO::FETCH_ASSOC)){

            echo '<div class="card z-depth-1 grey lighten-4 swiper-slide">
                    <div class="card-content ">
                      <span class="card-title ">'.$linha['nome'].'</span>
                      <p>'.$linha['texto'].'</p>
                    </div>
                    
                  </div>';


            
                       
        }       
    }
                   
 ?>   