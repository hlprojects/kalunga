<?php 

    session_start();

    $_SESSION['idUserPersona'] = '';
    $_SESSION['nome'] = '';
    header('Location:../../../index.php');
  	session_destroy();
                   
 ?>