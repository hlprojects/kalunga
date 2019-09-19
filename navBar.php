

<div class="navbar-fixed">
	<ul id="dropdown1" class="dropdown-content">
		<li><a href="#!">Alterar</a></li>
		<li><a href=<?php echo $initPath.'src/views/conta/signOut.php';  ?>>Terminar</a></li>
	</ul>

	<nav class="z-depth-3 " style="">
		<div class="nav-wrapper">
			<a href=<?php echo $initPath.'index.php';  ?> class="brand-logo"><img style="" height="40" src=<?php echo $initPath.'src/img/logo.png';  ?>  > </a>

			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<?php 
					session_start();
					if (isset($_SESSION['idUserPersona'])) {
						echo '<li><a class="dropdown-trigger" href="#!" data-target="dropdown1">'.$_SESSION['nome'].'<i class="material-icons left">person</i></a></li>
							<li><a  href="'.$initPath.'src/views/memoriais" ><i class="material-icons left"></i>Memoriais </a></li>';
					}else{
						echo '<li><a href="'.$initPath.'src/views/conta/signIn.php"><i class="material-icons left">person</i>Entrar</a></li>
							<li><a href="'.$initPath.'src/views/conta/signUp.php"><i class="material-icons left"></i>Criar conta</a></li>
							';
					}			
				?>  
			</ul>
		</div>
	</nav>		
</div>