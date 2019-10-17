
<form class="form-message card bioBlack " method="post" action="../../../V1/memorial/condolencias/adicionar/index.php">

	<div class="row">

		<div style="padding-right: 40px">
			<div class="col s12">
				<input required  type="text" placeholder="Seu nome" name="nome" id="nome">	
				<br><br>	
			</div>

			<div class="col s12">
				<select required name ="parentesco" id="parentesco">
					<option value="1">Família</option>
					<option value="2">Amigo</option>
					<option value="3">Conhecido</option>
				</select>
				<br>			
			</div>			
		</div>		


		<div class="col s12">
			<textarea required name="message" id="user_message" class="materialize-textarea" placeholder="Escreva o corpo texto..." cols="30" rows="10"></textarea>
			<br>			
		</div>

		<div class="col s12">
			<input  type="text" style="display: none;" name="id" value = <?php echo $id ?> >			
				
				<label>
					<input type="checkbox" id="notify" class=""  />
					<span>Notificar-me o funeral</span>
				</label> <br><br>
				<button type="submit"  style="border: none!important; margin-left: 10px" class="btn-publish kalunga waves-effect">Publicar</button>
				
			</div>		
		</div>

	</div>
</form>