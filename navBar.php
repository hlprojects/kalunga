


<?php 
session_start()
 ?>
<div class="navbar-fixed" id="topo">

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
						<i style="margin-right: 30px" class="material-icons black-text">menu</i> 	
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
					
						 	
						
						if (isset($_SESSION['idUserPersona'])) {
							echo '<a class="dropdown-trigger" href="#!" data-target="dropdown1"><i class="material-icons ">account_circle</i></a>
								';
						}else{
							echo '<a href="'.$initPath.'src/views/conta/signIn.php"><i class="material-icons ">account_circle</i></a>
								';
						}			
					?>					
										
			</div>


			<div id="nav-mobile" class="right  hide-on-small-only">
				<?php 
					
					if (isset($_SESSION['idUserPersona'])) {
						echo '<a class="dropdown-trigger" href="#!" data-target="dropdown1">'.$_SESSION['nome'].'<i class="material-icons left">account_circle</i></a>
							';
					}else{
						echo '<a href="'.$initPath.'src/views/conta/signIn.php"><i class="material-icons left">account_circle</i>Entrar</a>
							';
					}			
				?>  
			</div>

		</div>
	</nav>	



</div>		
		<ul id="slide-out" class="sidenav">
			<li><a href=<?php echo $initPath.'index.php';  ?> class="waves-effect"><i class="material-icons">home</i>Início</a></li>

			<?php 
				if (isset($_SESSION['idUserPersona'])) {
					echo '<li><a href="'.$initPath.'src/views/memoriais" class="waves-effect"><i class="material-icons">folder_open</i>Memoriais</a></li>';
				}

			 ?>
			


			<li><div class="divider"></div></li>
		
			<li><a href="#!" class="sidenav-close">Fechar o menu</a></li>

		</ul>



		<div class="popup" id="popup" style="display: none;">
			<article class="row" style="padding: 20px">

				<div class="col s12 l6 center-align">
					<h5 style="color: white"> Olá Precisamos ser avaliados!</h5>
									
				</div>

				<div class="col s12 l6 center-align" style="margin-top: 15px">
					
					<a type="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLScvHobLzBWrr_jZ_OYenHFokHnRKjkeitXWYxV96QWz0lgKiQ/viewform?usp=sf_link">
						<button style=" font-weight: bold!important;background-color: #ffffff !important;color: #040404!important; box-shadow: none!important;width: 250px; border-radius: 50px!important;    border: none!important; padding-left: 0px!important" type="submit"  class="btn-publish kalunga waves-effect">Avaliar
									
						</button>				
					</a>
			
					<a onclick="popup_cancel()" style="text-decoration: underline; color: white;font-weight: bold;" >Continuar usando</a>					
				</div>



				<p></p>				
			</article>


		</div>


<script type="text/javascript">

		function intervalo_callback() {
			var popup = document.getElementById('popup');
			popup.style.display = 'table';
		}

		function popup_cancel() {
			var popup = document.getElementById('popup');
			popup.style.display = 'none';
			var intervalo = setTimeout(intervalo_callback,40000);
		}
		document.addEventListener('DOMContentLoaded', function() {
			var intervalo = setTimeout(intervalo_callback,20000);
		});

</script>