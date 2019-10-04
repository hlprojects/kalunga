<?php 

	$prepa = $conn->prepare("
        UPDATE `memorial` SET
            `idPersonaCad` = ".$idUser."
        WHERE 
            id = '".$_POST['memorialCadProgressId']."'
        ");
    
    if ($prepa->execute()) {  

        header('Location:../../../src/views/memorial/?id='.$_POST['memorialCadProgressId']);
	    
    }else{
    	echo "404";
    }
                   
 ?>