<?php 

    include(dirname(__FILE__) . '/../../connect.php');

    $nome = '';
    $foto = '';

    $prepa = $conn->prepare("select nome,foto,id from memorial where nome like  '%".$_GET['query']."%' limit 16");

    if ($prepa->execute()) {
        while($linha = $prepa->fetch(PDO::FETCH_ASSOC)){

            echo '<div class="col s6 m4 l3">
                   <a  href="../memorial/?id='.$linha['id'].'" >
                      <div class="card" style="border-radius: 10px;filter: grayscale(100%);background:url(../../../media/photos/'.$linha['foto'].');background-size: cover!important;height: 200px;background-position: center!important;">
                        
                          <p style="border-radius: 10px;color:white;padding: 20px;width: 100%;height: 100%;background-color: #00000091;font-size: 20px;" class="card-title">'.$linha['nome'].'</p>
                       
                      </div>
                   </a>
                  </div>';
            
                       
        }       
    }
                   
 ?> 