<?php 

	include "../../connect.php";
    
    session_start();

    //verificar duplicidade
    $prepa = $conn->prepare("
                SELECT id 
                FROM persona 
                WHERE  email='".$_POST['email']."' OR 
                telefone='".$_POST['email']."' 
                ORDER BY id DESC LIMIT 1
            ");


    if ($prepa->execute()) { 


        while($linha1 = $prepa->fetch(PDO::FETCH_ASSOC)){
                
            header('Location:../../../src/views/conta/signUp.php?error=1');
            exit();
        } 

        //inserir
        $prepa0 = $conn->prepare("
            INSERT INTO 
            `persona`( `nome`,`email`, `senha`)
             VALUES ('".$_POST['nome']."','".$_POST['email']."','".$_POST['password']."')"
         );

        if ($prepa0->execute()) {  

            // buscar id
            $prepa1 = $conn->prepare("
                SELECT id,nome 
                FROM persona 
                WHERE  email='".$_POST['email']."' OR 
                telefone='".$_POST['email']."' 
                ORDER BY id DESC LIMIT 1
            ");

            $prepa1->execute();
               
            while($linha1 = $prepa1->fetch(PDO::FETCH_ASSOC)){
                
                $_SESSION['idUserPersona'] = $linha1['id'];
                $_SESSION['nome'] = $linha1['nome'];
                header('Location:../../../index.php');
            }    	
        }    
    }          
 ?>