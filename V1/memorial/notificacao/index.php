<?php 

	include "../../connect.php";

	$prepa = $conn->prepare("

        INSERT INTO `notificacao`( 
            `idMemorial`,
            `telefone`, 
            `email`)
        VALUES(
            '".$_POST['idMemorial']."',
            '".$_POST['notifi_telefone']."',
            '".$_POST['notifi_email']."')
        ");
    

    if ($prepa->execute()) {  
            header('Location:../../../src/views/memorial/?id='.$_POST['idMemorial'].'&n_done=1');
    }else{
    	echo "404";
    }
                   
 ?>