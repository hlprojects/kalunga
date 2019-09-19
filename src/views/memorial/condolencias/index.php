					<?php 

						if (isset($_SESSION['idUserPersona'])) {
							include 'condolencias/formulario_postar.php';
						}else{
							include '../formulario_redirecionar_login.php';
						}

					 ?>	