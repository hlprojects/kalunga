<?php 

	include "../../connect.php";

    session_start();
    
    $prepa = $conn->prepare("select * from persona where `email` = '".$_POST['email']."' and  `senha`='".$_POST['password']."' order by id desc limit 1");

    if ($prepa->execute()) {  
           
        while($linha= $prepa->fetch(PDO::FETCH_ASSOC)){
            
            $_SESSION['idUserPersona'] = $linha['id'];

            $_SESSION['nome'] = $linha['nome'];

            $expire = 6*30*24*3600;

            setcookie('UID',$linha['id'],$expire);
    
            header('Location:../../../index.php');
        }
      	
    }else{
    	echo "404";
    }
                   
 ?>