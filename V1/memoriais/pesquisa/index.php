<?php 


    include "connect.php";

    $nome = '';
    $foto = '';

    $prepa = $conn->prepare("select nome,foto,id from memorial where nome like  '%".$_GET['query']."%' limit 16");

    if ($prepa->execute()) {
        while($linha = $prepa->fetch(PDO::FETCH_ASSOC)){

            echo '<div class="col s6 m3">
                    <a  href="memorial.php?id='.$linha['id'].'" >
                      <div class="card">
                        <div style="filter: grayscale(100%);" class="card-image">
                          <img src="../../media/photos/'.$linha['foto'].'">
                          <spana style="text-shadow: 2px 2px black;" class="card-title">'.$linha['nome'].'</span>
                        </div>
                      </div>
                    </a>
                  </div>';
            
                       
        }       
    }
                   
 ?> 