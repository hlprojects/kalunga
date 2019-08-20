<?php 


	include "../../connect.php";


	$prepa = $conn->prepare("select id,nome,tag,foto, (YEAR(NOW())-YEAR(data_nascimento)) as idade from memorial where nome like '%".$_POST['texto']."%' or telefone like '%".$_POST['texto']."%' limit 6");

    if ($prepa->execute()) {
	    while($linha = $prepa->fetch(PDO::FETCH_ASSOC)){
	       
			echo '<a href="./src/views/memorial.php?id='.$linha['id'].'"><div class="searchCover">
					<img src="media/photos/'.$linha['foto'].'">
					<div></div>
					<p class="topN center-align"><strong>'.$linha['nome'].'</strong></p>
					<p class="topN center-align">@'.$linha['tag'].'</strong></p>
				 </div></a>';

	    }     	
    }else{
    	echo "";
    }
                   
 ?>