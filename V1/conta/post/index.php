<?php 

	include "../../connect.php";
    
    session_start();

    $prepa = $conn->prepare("INSERT INTO `persona`( `nome`,`email`, `senha`) VALUES ('".$_POST['nome']."','".$_POST['email']."','".$_POST['password']."')");

    if ($prepa->execute()) {  

        $prepa1=$conn->prepare("select id,nome from persona where  email='".$_POST['email']."' or telefone='".$_POST['email']."' order by id desc limit 1");
        $prepa1->execute();
           
        while($linha1 = $prepa1->fetch(PDO::FETCH_ASSOC)){
            echo "sucess 2";
            $_SESSION['idUserPersona'] = $linha1['id'];

            $_SESSION['nome'] = $linha1['nome'];
    
            //var_dump($_SESSION);
            header('Location:../../../index.php');
        }
	      	
    }else{
    	echo "404";
    }
                   
 ?>