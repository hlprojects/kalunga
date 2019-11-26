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
    $ano_nasce = '';
    $ano_morte = ''; 
    $idPersonaCad = '';
    $boletim = '';
    $BI = '';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }else{
        $id =  $_POST['id'];
    }

    $prepa = $conn->prepare("select *,year(data_nascimento) as ano_nasce,year(data_die) as ano_morte from memorial where id =".$id);

    if ($prepa->execute()) {
        while($linha = $prepa->fetch(PDO::FETCH_ASSOC)){

            if (isset($_GET['id'])) {
                $nome = $linha['nome'];
                $tag = $linha['tag'];
                $boletim = $linha['boletim'];
                $BI = $linha['BI'];
                $foto = $linha['foto'];
                $data_die = $linha['data_die']; 
                $data_nascimento = $linha['data_nascimento']; 
                $data_funeral = $linha['data_funeral']; 
                $bibliografia = $linha['bibliografia']; 
                $capa = $linha['capa']; 
                $local_funebre = $linha['local_funebre'];
                $descricao = $linha['descricao'];
                $ano_nasce = $linha['ano_nasce'];
                $ano_morte = $linha['ano_morte']; 
                $idPersonaCad = $linha['idPersonaCad'];           
            }else{
                echo "";
                //saida para o ajax
            }           
        }       
    }
                   
 ?> 