<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#999" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <link rel="manifest" href="../../manifest.json">
  <link href="../../build/material/material-icons.css" rel="stylesheet">
	<link rel="shortcut icon" href="../../favicon.ico" />
	<title>Memorial Paul Allen | Kalunga</title>
	<!-- <link rel="stylesheet" href="../../node_modules/materialize-css/dist/css/materialize.min.css" /> -->
	<link rel="stylesheet" href="../../build/css/materialize.min.css" />
	<link rel="stylesheet" href="../../build/css/app.min.css" />
	<link rel="prefetch" href="../../src/img/bg-flowers.jpg" />
	  <script type="text/javascript">
	    
	   function mudar() {
	      var input = document.getElementById('filefoto');
	      if (input.files[0]) {
	        var reader = new FileReader();

	        reader.onload = function (e) {
	          var imgElement = document.getElementById('foto');
	          imgElement.src = e.target.result;
	        };

	        reader.readAsDataURL(input.files[0]);
	      }
	    }

	   function mudarCapa() {
	      var input = document.getElementById('capafoto');
	      if (input.files[0]) {
	        var reader = new FileReader();

	        reader.onload = function (e) {
	          var imgElement = document.getElementById('fotoCapa');
	          imgElement.src = e.target.result;
	        };

	        reader.readAsDataURL(input.files[0]);
	      }
	    }
	function publicar() {

		var fileInput = document.getElementById('filefoto');
		var fileInputCapa = document.getElementById('capafoto');
	    var fileBinary = fileInput.files[0];
	    var fileBinaryCapa = fileInputCapa.files[0];

	    var nome = document.getElementById('nome');
	    var data_nascimento = document.getElementById('data_nascimento');
	    var data_morte = document.getElementById('data_morte');
	    var bibliografia = document.getElementById('bibliografia');
	    var contacto = document.getElementById('contacto');

	    var year = new Date();

	    year = year.getYear().toString()

	    var data = new FormData();

	    data.append('file',fileBinary);
	    data.append('capa',fileBinaryCapa);

	    data.append('nome',nome.value);
	   	data.append('data_nascimento',data_nascimento.value);
	    data.append('data_morte',data_morte.value);
	    data.append('bibliografia',bibliografia.value);
	    data.append('contacto',contacto.value);
	    data.append('year',year);

	    var config = {
	      onUploadProgress: function(progressEvent) {
	        var percentCompleted = Math.round( (progressEvent.loaded * 100) / progressEvent.total );    
	      }
	    };

	    axios.post('../../V1/memorial/index.php',data,config)
	      .then(function (res) {
	        window.open('memorial.php?id='+res.data);
	        console.log(res.data);
	      })
	      .catch(function (err) {
	        console.log(res.data);
	      });		
	}
	  </script>
</head>
<body>
	
	<header>
		<nav class="navbar transparent z-depth-0">
					<button href="#!" data-target="slide-out" style="background-color: transparent !important; box-shadow: none!important;border:none !important" class="sidenav-trigger waves-effect btn-menu show-on-large">
						<i style="color: #e2e2e2!important" class="material-icons black-text">menu</i>
					</button>

					<form method="get" class="form-search">
						<i style="color: #3e3e3e;margin-left: 5px;" class="material-icons">search</i>
						<input style="border-radius: 20px!important;box-shadow: none!important;"  type="search"  list="datalist-name" id="search" class="kalunga input-search" name="query" placeholder="Pesquisar..." />
						<datalist onclick="alert('')" id="datalist-name">
						
						</datalist>
					</form>

					<button type="button" style="border-radius: 20px!important;color:#424242!important" class="btn-publish waves-effect"><a href="src/views/post.html" > <strong>voltar</strong></a></button>
		</nav>
		<ul id="slide-out" class="sidenav">
			    <li>
			    	<div class="user-view">
				      <div class="background">
				        <img src="../../src/img/plan-a-funeral-800x533.jpeg">
				      </div>
				      <a href="#user"><img class="circle" src="../../src/img/tod-freizeitpark.jpg"></a>
				      <a href="#name"><span class="white-text name">HL inc</span></a>
				      <a href="#email"><span class="white-text email">Kalunga</span></a>
			       </div>
				</li>
		  <li><a href="#!" class="waves-effect"><i class="material-icons">folder_open</i>Memoriais</a></li>
		  <li><a href="#!" class="waves-effect"><i class="material-icons">public</i>Serviços funerários</a></li>
		  <li><a href="#!" class="waves-effect"><i class="material-icons">card_giftcard</i>Ofertas e doações</a></li>
		  <li><a href="#!" class="waves-effect"><i class="material-icons">book</i>Livro de condolências</a></li>
		  <li><div class="divider"></div></li>
		  <li><a href="#!"><i class="material-icons">info</i>Informações funebres</a></li>
		  <li><a href="#!"><i class="material-icons">settings</i>Definições</a></li>
		  <li><a href="#!" class="sidenav-close">Fechar o menu</a></li>
		</ul>
		<div class="quotes center-align">
			
			<h1 class="white-text"><strong>Publicação</strong></h1>
			<blockquote class="white-text">
				"A morte é o destino que todos nós compartilhamos"
			</blockquote>
			<div class="quote-author white-text">Steve Jobs</div>
			<div class="death-date white-text">1955 - 2011</div>
		</div>
	</header>

	<main>

	<h2 class="title center-align">Informação do malogrado</h2>
    <label> 
        <img style=" border:none!important; height: 400px;width: 100%;border-style: ridge; background:grey;  border-color: grey" id="fotoCapa">
        <input style="display:none" type="file"  onchange="mudarCapa()" accept="image/*" name="foto" id="capafoto">
    </label>

<br><br><br>
      <div class="row">

      <div class="col s4">
		<p class="center-align">
            <label> 
                <img style="border:none!important;height: 200px;width: 200px;border-style: ridge; background:grey;  border-color: grey" id="foto">
                <input style="display:none" type="file"  onchange="mudar()" accept="image/*" name="foto" id="filefoto">
            </label>			
		</p>       
      </div>

      <div class="col s6">
					<form class="form-message">
						<input type="text" id="nome" placeholder="Nome" />
						<input type="date" id="data_nascimento" placeholder="Data de nascimento" />
						<input type="date" id="data_morte" placeholder="Data de morte" />
						<input type="text" id="contacto" placeholder="Telefone ou email da pessoa" />
						<textarea name="bibliografia" id="bibliografia" class="materialize-textarea" placeholder="bibliografia" cols="30" rows="10"></textarea>
						<div class="call-to-action" style="display: flex; justify-content: space-between; align-items: center;">
	
						    <button style="border-radius: 20px!important;color:#424242!important" type="button" onclick="publicar()" class="btn-publish kalunga waves-effect">Publicar</button>
						</div>
					</form>        
      </div>
    

    </div>  

	


	</main>
	<footer id="rodape" style="margin-top: 5rem;">
		
	</footer>

	<!-- <script src="../../node_modules/materialize-css/dist/js/materialize.min.js"></script> -->
	<script src="../../build/materialize.min.js"></script>
	<script src="../../build/axios.min.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
	    M.AutoInit();
	  });






	</script>
</body>
</html>