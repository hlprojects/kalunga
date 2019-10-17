<?php 

	 include "../../../connect.php";

	 session_start();

	$prepa = $conn->prepare("INSERT INTO `condolencia`(`idMemorial`, `nome`, `texto`, `parentesco`) VALUES ('".$_POST['id']."','".$_POST['nome']."','".$_POST['message']."','".$_POST['parentesco']."')");


    if ($prepa->execute()) {
		 echo '
			<script type="text/javascript">
				window.history.back();
			</script>
		 ';    	
    }else{
    	
    }
                   
 ?>