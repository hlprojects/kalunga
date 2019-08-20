<?php 


    include "connect.php";

    $nome = '';
    $tag = '';
    $foto = '';
    $data_die = ''; 
    $data_nascimento = ''; 
    $data_funeral = ''; 
    $bibliografia = ''; 
    $capa = ''; 
    $condolencia = ''; 
    $id = '';
    $data_funeral_2 = ''; 
    $data_funeral_3 = ''; 
    $local_funebre = ''; 
    $video_url = ''; 

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }else{
        $id =  $_POST['id'];
    }

    $prepa = $conn->prepare("select * from memorial where id =".$id);

    if ($prepa->execute()) {
        while($linha = $prepa->fetch(PDO::FETCH_ASSOC)){

            if (isset($_GET['id'])) {
                $nome = $linha['nome'];
                $tag = $linha['tag'];
                $foto = $linha['foto'];
                $data_die = $linha['data_die']; 
                $data_nascimento = $linha['data_nascimento']; 
                $data_funeral = $linha['data_funeral']; 
                $bibliografia = $linha['bibliografia']; 
                $capa = $linha['capa']; 
                $condolencia = $linha['condolencia'];  
                $data_funeral_2 = $linha['data_funeral_2'];
                $data_funeral_3 = $linha['data_funeral_3']; 
                $local_funebre = $linha['local_funebre'];
                $video_url = $linha['video_url'];              
            }else{
                echo "";
                //saida para o ajax
            }           
        }       
    }
                   
 ?> 