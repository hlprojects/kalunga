<?php 

	include "../../connect.php";

    session_start();

    $idUser = 0;
    
    $prepa1 = $conn->prepare("
        SELECT * 
        FROM persona
        WHERE 
            `email` = '".$_POST['email']."' AND  
            `senha` = '".$_POST['password']."'
         ORDER BY id DESC LIMIT 1");

    if ($prepa1->execute()) {  
           
        while($linha1= $prepa1->fetch(PDO::FETCH_ASSOC)){
            
            $_SESSION['idUserPersona'] = $linha1['id'];

            $_SESSION['nome'] = $linha1['nome'];

            $expire = 6*30*24*3600;

            setcookie('UID',$linha1['id'],$expire);

            $idUser = $linha1['id'];
            if (isset($_POST['memorialCadProgressId'])) {
                include '../../memorial/criar/publicarMemorialProgress.php';
                exit();
              
            }            
    
            header('Location:../../../index.php');

            exit();
        }

        header('Location:../../../src/views/conta/signIn.php?error=1');
      	
    }else{
    	echo "404";
    }
                   
 ?>