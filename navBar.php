<div class="navbar-fixed">
	<ul id="dropdown1" class="dropdown-content">
		<li><a href="#!">Alterar</a></li>
		<li><a href="src/views/signOut.php">Terminar</a></li>
	</ul>
	<nav class="z-depth-1 " style="background-color: #0e0e0e !important">
		<div class="nav-wrapper">
			<a href="#" class="brand-logo center"><strong>Kalunga</strong></a>

			<ul id="nav-mobile" class="right hide-on-med-and-down">

				<?php 

					include 'auto.php';		
				
					if (isset($_SESSION['idUserPersona'])) {
						echo '<li><a class="dropdown-trigger" href="#!" data-target="dropdown1">'.$_SESSION['nome'].'<i class="material-icons right">arrow_drop_down</i></a></li>';
					}else{
						echo '<li><a href="src/views/signIn.php">Entrar</a></li>
								<li><a href="src/views/signUp.php">Criar conta</a></li>
							';
					}
							
				?>  

			</ul>
		</div>
	</nav>		
</div>