<?php 

	include "../../connect.php";

    $randomName = $_POST["foto_antiga"];
    $randomName1 = $_POST["capa_antiga"];
    $type = '';
    $type1 = '';
 
    echo $_FILES["foto"]["name"];

    if (($_FILES["foto"]["name"])!='') {
        $randomFullName = '';
        $exploder = explode('.', $_FILES["foto"]["name"]);
        $type =  strtolower(end($exploder));
        $pathFile = '../../../media/photos/'; 
        do{
            $randomName = (rand() + time());
            $randomFullName =$pathFile . $randomName.'.'.$type;
        }while (file_exists($randomFullName));

        if (move_uploaded_file($_FILES["foto"]["tmp_name"],$randomFullName)) {
            if ($_POST['foto_antiga']!='blank.png') {
                unlink('../../../media/photos/'.$_POST['foto_antiga']);
            }
        }
    }
       
    if (($_FILES["capa"]["name"])!='') {
        $randomFullName1 = '';
        $exploder1 = explode('.', $_FILES["capa"]["name"]);
        $type1 =  strtolower(end($exploder1));
        $pathFile1 = '../../../media/photos/'; 
        do{
            $randomName1 = (rand() + time());
            $randomFullName1 = $pathFile1 . $randomName1.'.'.$type1;
        }while (file_exists($randomFullName1));

        if (move_uploaded_file($_FILES["capa"]["tmp_name"],$randomFullName1)) {
            if ($_POST['capa_antiga']!='blank.png') {
                unlink('../../../media/photos/'.$_POST['capa_antiga']);
            }
        }
    }

	$prepa = $conn->prepare("
        UPDATE `memorial` SET
            `nome` = '".$_POST['nome_k']."',
            `data_die`= '".$_POST['data_morte_k']."',
            `data_nascimento`= '".$_POST['data_nascimento_k']."',
            `bibliografia`= '".$_POST['bibliografia_k']."',
            `foto`= '".$randomName.".".$type."',
            `capa`= '".$randomName1.".".$type1."',
            `data_funeral`= '".$_POST['data_funeral_k']."',
            `local_funebre`= '".$_POST['local_funeral_k']."',
            `descricao`= '".$_POST['descricao_k']."'
        WHERE 
            id = '".$_POST['id']."'
        ");
    
    if ($prepa->execute()) {  

        header('Location:../../../src/views/memorial/?id='.$_POST['id']);
	    
    }else{
    	echo "404";
    }                   
 ?>