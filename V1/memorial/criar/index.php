<?php 

    session_start();

	include "../../connect.php";

    $randomName2 = '';
    $type2 = '';

    $randomName1 = '';
    $type1 = '';

    $UserCad = 0;

    if (isset($_SESSION['idUserPersona'])) {
        $UserCad = $_SESSION['idUserPersona'];
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

    if (isset($_FILES["BI_k"])) {
        $randomFullName1 = '';
        $exploder1 = explode('.', $_FILES["BI_k"]["name"]);
        $type1 =  strtolower(end($exploder1));
        $pathFil1 = '../../../media/files/';

        do{
            $randomName1 = (rand() + time());
            $randomFullName1 =$pathFil1 . $randomName1.'.'.$type1;
        }while (file_exists($randomFullName1));
        move_uploaded_file($_FILES["boletim_k"]["tmp_name"],$randomFullName1);
    }

    $tag = str_replace(' ','', $_POST['nome_k']);

	$prepa = $conn->prepare("
        INSERT INTO `memorial`(
            `nome`,
            `data_die`,
            `data_nascimento`,
            `foto`,
            `tag`,
            `capa`,
            `boletim`,
            `descricao`,
            `idPersonaCad`,
            `BI`
        ) VALUES (
            '".$_POST['nome_k']."',
            '".$_POST['data_morte_k']."',
            '".$_POST['data_nascimento_k']."',
            'blank.png',
            '@".$tag.date('Y')."',
            'blank.png',
            '".$randomName2."',
            '".$_POST['descricao_k']."',
            '".$UserCad."',
            '".$randomName1."'
        )");
    
    if ($prepa->execute()) {  

        $prepa2 = $conn->prepare("
            SELECT id 
            FROM memorial 
            ORDER BY id DESC LIMIT 1");

        $prepa2->execute();

	    while($linha = $prepa2->fetch(PDO::FETCH_ASSOC)){

            setcookie('memorialCadProgress',$linha['id']);

            if (isset($_SESSION['idUserPersona'])) {
                header('Location:../../../src/views/memorial/?id='.$linha['id']);
            }else{
                header('Location:../../../src/views/conta/signUp.php?p='.$linha['id']);
            }
	    }

    }else{
    	echo "404";
    }
                   
 ?>