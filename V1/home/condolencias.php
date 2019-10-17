<?php 


    include(dirname(__FILE__) . '/../connect.php');


    $prepa = $conn->prepare("select condolencia.texto,condolencia.nome,memorial.nome as nome_kalunga,memorial.tag from condolencia,memorial where condolencia.idMemorial in (select id from memorial where  idPersonaCad=".$_SESSION['idUserPersona'].") and   condolencia.idMemorial=memorial.id");

    if ($prepa->execute()) {
        while($linha = $prepa->fetch(PDO::FETCH_ASSOC)){

            echo '<div class="card z-depth-1 grey lighten-4 swiper-slide">
                    <div class="card-content ">
                      <span class="card-title ">'.$linha['nome'].'</span>
                      <p>'.$linha['texto'].'...<a style="font-weight: bold;">Ler mais</a></p>
                      <br>
                      <p>para <strong>'.$linha['nome_kalunga'].'
                      </strong></p>
                    </div>
                    
                  </div>';


            
                       
        }       
    }
                   
 ?>   
