<?php 

    ob_start();
    session_start();
  
    include 'V1/connect.php';

    $idUser = 0;
    
    if (isset($_SESSION['idUser'])) {
         $idUser =  $_SESSION['idUser'];          
    }else{


        $UID =  bin2hex(random_bytes(10));

        $prepa=$conn->prepare("INSERT INTO `prospect`(`contacto`) VALUES ('$UID')");
        $prepa->execute(); 

        $prepa=$conn->prepare("select id from prospect where  contacto ='$UID' order by id desc limit 1 ");

        $prepa->execute(); 

        while($linha = $prepa->fetch(PDO::FETCH_ASSOC)){

            $_SESSION['idUser'] = $linha['id'];
            $idUser = $linha['id'];
            setcookie('idUser',$linha['id']);
                                      
        }                
    }
  
?>

                                    
