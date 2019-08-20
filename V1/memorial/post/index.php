<?php 


	 include "../connect.php";


    $randomName = '';
    $randomFullName = '';

    $exploder = explode('.', $_FILES["file"]["name"]);

    $type =  strtolower(end($exploder));

    $pathFile = '../../media/photos/'; 

    if (isset($_FILES["file"])) {

        do{
            $randomName = (rand() + time());
            $randomFullName =$pathFile . $randomName.'.'.$type;

        }while (file_exists($randomFullName));

        move_uploaded_file($_FILES["file"]["tmp_name"],$randomFullName);

    }


    $randomName1 = '';
    $randomFullName1 = '';

    $exploder1 = explode('.', $_FILES["capa"]["name"]);

    $type1 =  strtolower(end($exploder1));

    $pathFile1 = '../../media/photos/'; 

    if (isset($_FILES["capa"])) {

        do{
            $randomName1 = (rand() + time());
            $randomFullName1 =$pathFile1 . $randomName1.'.'.$type1;

        }while (file_exists($randomFullName1));

        move_uploaded_file($_FILES["capa"]["tmp_name"],$randomFullName1);

    }


    $tag = str_replace(' ','', $_POST['nome']);

	$prepa = $conn->prepare("INSERT INTO `memorial`( `nome`, `data_die`, `data_nascimento`, `bibliografia`,  `telefone`,`foto`,`tag`,`capa`) VALUES ('".$_POST['nome']."','".$_POST['data_morte']."','".$_POST['data_morte']."','".$_POST['bibliografia']."','".$_POST['contacto']."','".$randomName.".".$type."','".$tag.$_POST['year']."','".$randomName1.".".$type1."')");
    


    if ($prepa->execute()) {  

        $prepa = $conn->prepare("select id from memorial order by id desc limit 1");
        $prepa->execute();

	    while($linha = $prepa->fetch(PDO::FETCH_ASSOC)){
	       	echo $linha['id'];
	    }    	
    }else{
    	echo "erro";
    }
                   
 ?>