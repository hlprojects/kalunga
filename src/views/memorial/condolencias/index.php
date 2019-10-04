<h3 class="title">Deixe o seu apoio</h3>
<form class="form-message" method="post" action="../../../V1/memorial/condolencias/adicionar/index.php">


	<?php 
		$UID = 0;
		if (isset($_COOKIE['UID'])) {
			$UID = $_COOKIE['UID'];
		}else{
			$UID =  bin2hex(random_bytes(16));
			setcookie('UID',$UID);
		}

		echo '<input type="text" value="'.$UID.'" class="noDisplay" name="UID" />';
	 ?>
	<input  type="text" placeholder="Nome" name="nome" >

	<textarea required name="message" id="user_message" class="materialize-textarea" placeholder="A sua mensagem..." cols="30" rows="10"></textarea>	

	<select required name ="parentesco">
		<option value="1">Família</option>
		<option value="2">Amigo</option>
		<option value="3">Conhecido</option>
	</select>

	<input  type="text" style="display: none;" name="id" value = <?php echo $id ?> >


	<div class="call-to-action" style="display: flex; justify-content: space-between; align-items: center;">
		<label>
			<input type="checkbox" id="notify" class="filled-in" />
			<span>Notificar-me para funeral</span>
		</label>

		<button type="submit"  class="btn-publish kalunga waves-effect">Publicar</button>
	</div>
</form>