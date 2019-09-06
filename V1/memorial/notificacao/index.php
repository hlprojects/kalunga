<?php 

	include "../../connect.php";

    session_start();

	$prepa = $conn->prepare("
        INSERT INTO `notificacao`(
            `idMemorial`,
            `idPersona`
        ) VALUES (
            '".$_POST['id']."',
            '".$_SESSION['idUserPersona']."'
        )");
    

    if ($prepa->execute()) {  
            echo "1";
            
    }else{
    	echo "404";
    }
                   
 ?>