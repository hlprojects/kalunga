<?php 

    session_start();

	include "../../connect.php";

    $randomName = '';
    $randomName1 = '';
    $randomName2 = '';
    $type = '';
    $type1 = '';
    $type2 = '';

    if (isset($_FILES["file"])) {
        $randomFullName = '';
        $exploder = explode('.', $_FILES["file"]["name"]);
        $type =  strtolower(end($exploder));
        $pathFile = '../../../media/photos/'; 
        do{
            $randomName = (rand() + time());
            $randomFullName =$pathFile . $randomName.'.'.$type;
        }while (file_exists($randomFullName));
        move_uploaded_file($_FILES["file"]["tmp_name"],$randomFullName); 
    }
        
    if (isset($_FILES["capa"])) {
        $randomFullName1 = '';
        $exploder1 = explode('.', $_FILES["capa"]["name"]);
        $type1 =  strtolower(end($exploder1));
        $pathFile1 = '../../../media/photos/'; 
        do{
            $randomName1 = (rand() + time());
            $randomFullName1 =$pathFile1 . $randomName1.'.'.$type1;
        }while (file_exists($randomFullName1));
        move_uploaded_file($_FILES["capa"]["tmp_name"],$randomFullName1);
    }

    if (isset($_FILES["boletim_k"])) {
        $randomFullName2 = '';
        $exploder2 = explode('.', $_FILES["boletim_k"]["name"]);
        $type2 =  strtolower(end($exploder2));
        $pathFile2 = '../../../media/files/'; 
        do{
            $randomName2 = (rand() + time());
            $randomFullName2 =$pathFile2 . $randomName2.'.'.$type2;
        }while (file_exists($randomFullName2));
        move_uploaded_file($_FILES["boletim_k"]["tmp_name"],$randomFullName2);
    }

    $tag = str_replace(' ','', $_POST['nome_k']);

	$prepa = $conn->prepare("
        INSERT INTO `memorial`(
            `nome`,
            `data_die`,
            `data_nascimento`,
            `bibliografia`,
            `foto`,
            `tag`,
            `capa`,
            `data_funeral`,
            `local_funebre`,
            `boletim`,
            `descricao`,
            `idPersonaCad`

        ) VALUES (
            '".$_POST['nome_k']."',
            '".$_POST['data_morte_k']."',
            '".$_POST['data_nascimento_k']."',
            '".$_POST['bibliografia_k']."',
            '".$randomName.".".$type."',
            '".$tag.date('Y')."',
            '".$randomName1.".".$type1."',
            '".$_POST['data_funeral_k']."',
            '".$_POST['local_funeral_k']."',
            '".$randomName2.".".$type2."',
            '".$_POST['descricao_k']."',
            '".$_SESSION['idUserPersona']."'
        )");
    
    if ($prepa->execute()) {  

        $prepa2 = $conn->prepare("
            SELECT id 
            FROM memorial 
            ORDER BY id DESC LIMIT 1");

        $prepa2->execute();

	    while($linha = $prepa2->fetch(PDO::FETCH_ASSOC)){

            header('Location:../../../src/views/memorial.php?id='.$linha['id']);
	    }

    }else{
    	echo "404";
    }
                   
 ?>