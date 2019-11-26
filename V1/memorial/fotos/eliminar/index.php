<?php 

	include "../../../connect.php";

    try {
       unlink('../../../../media/photos/'.$_POST['nome']); 
    } catch (Exception $e) {
        
    }
    

	$prepa = $conn->prepare("
        DELETE FROM `foto`
        WHERE 
        id ='".$_POST['id']."'
        ");
    
    if ($prepa->execute()) {  
            echo "1";
    }else{
    	echo "404";
    }
                   
 ?>