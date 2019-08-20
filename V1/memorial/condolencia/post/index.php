<?php 


	 include "../../../connect.php";


echo "INSERT INTO `condolencia`(`idMemorial`, `idPersona`, `texto`, `parentesco`, `nome`, `notificacao`) VALUES ('".$_POST['id']."','".$_POST['contact']."','".$_POST['user_message']."','".$_POST['parentesco']."','".$_POST['username']."','".$_POST['notify']."')";

	$prepa = $conn->prepare("INSERT INTO `condolencia`(`idMemorial`, `idPersona`, `texto`, `parentesco`, `nome`, `notificacao`) VALUES ('".$_POST['id']."','".$_POST['contact']."','".$_POST['user_message']."','".$_POST['parentesco']."','".$_POST['username']."','".$_POST['notify']."')");


    if ($prepa->execute()) {
	    while($linha = $prepa->fetch(PDO::FETCH_ASSOC)){
	       	
	    } echo 1;    	
    }else{
    	echo "404";
    }
                   
 ?>