<?php 

	include "../../connect.php";

    $randomName = '';
    $type = '';
  
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

	$prepa = $conn->prepare("
        INSERT INTO `foto`(
            `idMemorial`,
            `foto`
        ) VALUES (
            '".$_POST['id']."',
            '".$randomName.".".$type."'
        )");
    

    if ($prepa->execute()) {  
            echo "1";
    }else{
    	echo "404";
    }
                   
 ?>