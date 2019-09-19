<?php 

    include(dirname(__FILE__) . '/../connect.php');

    $nome = '';
    $tag = '';
    $foto = '';
    $data_die = ''; 
    $data_nascimento = ''; 
    $data_funeral = ''; 
    $bibliografia = ''; 
    $capa = ''; 
    $id = '';
    $local_funebre = ''; 
    $descricao = ''; 

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
                $local_funebre = $linha['local_funebre'];
                $descricao = $linha['descricao'];           
            }else{
                echo "";
                //saida para o ajax
            }           
        }       
    }
                   
 ?> 