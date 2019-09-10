<?php 


	include "../../connect.php";



	$prepa = $conn->prepare("select nome,tag, (YEAR(NOW())-YEAR(data_nascimento)) as idade from memorial where nome like '%".$_POST['texto']."%' or telefone like '%".$_POST['texto']."%' limit 6");

    if ($prepa->execute()) {
	    while($linha = $prepa->fetch(PDO::FETCH_ASSOC)){
	       echo "<option value='".$linha['nome'].", ".$linha['idade']." anos'>@".$linha['tag']."</option>";	
	    }     	
    }else{
    	echo "";
    }
                   
 ?>