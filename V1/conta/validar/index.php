<?php 

	include "../../connect.php";

    session_start();
    
    $prepa = $conn->prepare("
        SELECT * 
        FROM persona
        WHERE 
            `email` = '".$_POST['email']."' AND  
            `senha` = '".$_POST['password']."'
         ORDER BY id DESC LIMIT 1");

    if ($prepa->execute()) {  
           
        while($linha= $prepa->fetch(PDO::FETCH_ASSOC)){
            
            $_SESSION['idUserPersona'] = $linha['id'];

            $_SESSION['nome'] = $linha['nome'];

            $expire = 6*30*24*3600;

            setcookie('UID',$linha['id'],$expire);
    
            header('Location:../../../index.php');

            exit();
        }

        header('Location:../../../src/views/conta/signIn.php?error=1');
      	
    }else{
    	echo "404";
    }
                   
 ?>