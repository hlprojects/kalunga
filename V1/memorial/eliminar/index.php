
 <?php 

    include "../../connect.php";

    try {
        if ($_POST['foto_antiga']!='blank.png') {
           unlink('../../../media/photos/'.$_POST['foto_antiga']);
        }
        if ($_POST['capa_antiga']!='blank.png') {
           unlink('../../../media/photos/'.$_POST['capa_antiga']);
        }
       unlink('../../../media/files/'.$_POST['boletim']);
       unlink('../../../media/files/'.$_POST['BI']); 

    } catch (Exception $e) {
        
    }
    
    $prepa = $conn->prepare("
        DELETE FROM `memorial`
        WHERE 
        id ='".$_POST['id']."'
        ");
    
    if ($prepa->execute()) {  
            header('Location:../../..');
    }else{
        echo "404";
    }
                   
 ?>