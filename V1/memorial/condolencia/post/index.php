<?php 


	 include "../../../connect.php";

	 session_start();

	$prepa = $conn->prepare("INSERT INTO `condolencia`(`idMemorial`, `idPersona`, `texto`, `parentesco`) VALUES ('".$_POST['id']."','".$_SESSION['idUserPersona']."','".$_POST['message']."','".$_POST['parentesco']."')");


    if ($prepa->execute()) {
		 echo 1;    	
    }else{
    	echo "404";
    }
                   
 ?>