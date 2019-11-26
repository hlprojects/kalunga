
<form class="form-message card bioBlack"  method="post" action="../../../V1/memorial/condolencias/adicionar/index.php">

	<div class="row">

		<div style="padding-right: 40px">
			<div class="col s12">
				<input required  type="text" placeholder="Seu nome" name="nome" id="nome">	
				<br><br>	
			</div>

			<div class="col s12">
				<select required name ="parentesco" id="parentesco">
					<option value="3">Conhecido</option>
					<option value="4">Desconhecido</option>
					<option value="2">Amigo</option>
					<option value="1">Família</option>
					
					
				</select>
				<br>			
			</div>			
		</div>		


		<div class="col s12">
			<textarea required name="message" id="user_message" class="materialize-textarea" placeholder="Escreva o corpo texto..." cols="30" rows="10"></textarea>
			<br>			
		</div>

		<div class="col s12">
			<input  type="text" style="display: none;" name="id" value = <?php echo $id ?> >				<br>
				<button type="submit"  style="border: none!important; margin-left: 10px;color: black!important" class="btn-publish kalunga waves-effect">Publicar</button>
				
			</div>		
		</div>

	</div>
</form>