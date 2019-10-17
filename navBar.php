

<div class="navbar-fixed">

	<ul id="dropdown1" class="dropdown-content">
		<li><a href="#!">Alterar</a></li>

		<li><a  href=<?php echo $initPath.'src/views/memoriais';  ?>  >Memoriais </a></li>

		<li><a href=<?php echo $initPath.'src/views/conta/signOut.php';  ?>>Terminar</a></li>

	</ul>

	<nav class="z-depth-3 " style="">
		<div class="nav-wrapper">
			<div  class="brand-logo left hide-on-small-only"> 

				
					<button style="height: 56px!important;" href="#!" data-target="slide-out"  class="sidenav-trigger  btn-menu show-on-large">
						<i style="margin-right: 30px" class="material-icons black-text">menu</i>
						<img height="40" class="hide-on-large-only" src=<?php echo $initPath.'src/img/logo_min.png';  ?>  >	
					<a style="width: auto;height: auto;" href=<?php echo $initPath.'index.php';  ?> class=" ">
						<img class="hide-on-med-only" height="40" src=<?php echo $initPath.'src/img/logo.png';  ?>  >
						
					</a>						
					</button>
			


				
			</div>

			<div class="show-on-small hide-on-med-and-up">

					<button  href="#!" data-target="slide-out"  class="sidenav-trigger  btn-menu show-on-large">
						<img height="40" src=<?php echo $initPath.'src/img/logo_min.png';  ?>  > 	
					</button>
			</div>		

			<form method="get" action=<?php echo $initPath.'src/views/memoriais/pesquisar.php';  ?> class="form-search center big hide-on-small-only">
				
					<input style="width: 50%!important"  type="search"  list="datalist-name" id="search" class="kalunga input-search" name="query" placeholder="Pesquisar" value=<?php if (isset($tag)) {echo '@'.$tag;} ?> >					
				
				
				<datalist onclick="" id="datalist-name">
				</datalist>

			</form>

			<form method="get" action=<?php echo $initPath.'src/views/memoriais/pesquisar.php';  ?> class="form-search center show-on-small big hide-on-med-and-up" style="margin-top: -55px;">					
				

					<input  type="search"  list="datalist-name" id="search" class="kalunga input-search" name="query" style="width: 60% !important;"placeholder="Pesquisar" value=<?php if (isset($tag)) {echo '@'.$tag;} ?>  >					
										
				
				<datalist onclick="" id="datalist-name">
				</datalist>

			</form>			

			<div id="nav-mobile" class="show-on-small right hide-on-med-and-up">
					
					<?php 
						session_start();
						if (isset($_SESSION['idUserPersona'])) {
							echo '<a class="dropdown-trigger" href="#!" data-target="dropdown1"><i class="material-icons ">person</i></a>
								';
						}else{
							echo '<a href="'.$initPath.'src/views/conta/signIn.php"><i class="material-icons ">person</i></a>
								';
						}			
					?>					
										
			</div>


			<div id="nav-mobile" class="right  hide-on-small-only">
				<?php 
					
					if (isset($_SESSION['idUserPersona'])) {
						echo '<a class="dropdown-trigger" href="#!" data-target="dropdown1">'.$_SESSION['nome'].'<i class="material-icons left">person</i></a>
							';
					}else{
						echo '<a href="'.$initPath.'src/views/conta/signIn.php"><i class="material-icons left">person</i>Entrar</a>
							';
					}			
				?>  
			</div>

		</div>
	</nav>	



</div>		
		<ul id="slide-out" class="sidenav">
			<li><a href=<?php echo $initPath.'index.php';  ?> class="waves-effect"><i class="material-icons">home</i>Início</a></li>
			<li><a href=<?php echo $initPath.'src/views/memoriais';  ?> class="waves-effect"><i class="material-icons">folder_open</i>Memoriais</a></li>
			<li><div class="divider"></div></li>
		
			<li><a href="#!" class="sidenav-close">Fechar o menu</a></li>

		</ul>