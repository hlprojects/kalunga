<?php 


    include(dirname(__FILE__) . '/../connect.php');


    $prepa = $conn->prepare("select memorial.id,condolencia.texto,condolencia.nome,memorial.nome as nome_kalunga,memorial.tag from condolencia,memorial where condolencia.idMemorial in (select id from memorial where  idPersonaCad=".$_SESSION['idUserPersona'].") and   condolencia.idMemorial=memorial.id");

    if ($prepa->execute()) {
        while($linha = $prepa->fetch(PDO::FETCH_ASSOC)){

            $more = '';
            if (strlen($linha['texto'])>90) {
                  $more = '...<a style="font-weight: bold;" href="src/views/memorial/?id='.$linha['id'].'" >Ler mais</a>';
            }

            echo '<div style="border-radius: 10px;" class="card z-depth-1 grey lighten-4 swiper-slide">
                    <div class="card-content ">
                      <span class="card-title ">'.  ($linha['nome']).'</span>
                      <p>'.substr($linha['texto'],0,90).$more.'</p>
                      <br>
                      <p>para <strong>'.strtoupper($linha['nome_kalunga']).'
                      </strong></p>
                    </div>
                    
                  </div>';


            
                       
        }       
    }
                   
 ?>   
