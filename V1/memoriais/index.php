<?php 


    include(dirname(__FILE__) . '/../connect.php');

    $nome = '';
    $foto = '';

    $prepa = $conn->prepare("select nome,foto,id from memorial where idPersonaCad =".$_SESSION['idUserPersona']);
  
    if ($prepa->execute()) {
        while($linha = $prepa->fetch(PDO::FETCH_ASSOC)){

            echo '<div class="col s2 m3">
                    <a  href="../memorial/?id='.$linha['id'].'" >
                      <div class="card">
                        <div style="filter: grayscale(100%);" class="card-image">
                          <img class="memorialImage" src="../../../media/photos/'.$linha['foto'].'">
                          <spana style="text-shadow: 2px 2px black;" class="card-title">'.$linha['nome'].'</span>
                        </div>
                      </div>
                    </a>
                  </div>';               
        }       
    }
                   
 ?> 