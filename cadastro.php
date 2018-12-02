<!-------------------------------------
   @Author: Fernando N. S. Costa
   Enovírtua - O Portal Definitivo do Vinho
   https://www.linkedin.com/in/fernandonsc5/
--------------------------------------->

<!DOCTYPE HTML>

<html lang="pt-br">
	<head>
		<title>Enovírtua</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Usefull form stylesheet -->
		<style>

			.grid {
				display: grid;
				grid-template-columns: auto;
				grid-column-gap:50px;
				grid-row-gap: 10px;
				align-items: center;
			}

			.dont-show {
				display: none !important;
			}

			@media screen and (min-width: 480px) {
				.grid{
					display: grid;
					grid-template-columns: auto auto;
					grid-column-gap:50px;
					grid-row-gap: 10px;
					align-items: center;
				}
			}

		</style>

	</head>
	<body>
		
		<!-- Nav -->
		<?php require('assets/sass/navbar.php') ?>

		<div style="padding: 10%;">

			<h1><span style="font-family: eurostyle">Cadastro de Usuário Enovírtua</span></h1>
			<hr>
			<form  id="cadastro-usuario" class="grid" action="#" method="POST">

				<input type="text" placeholder="Nome Completo" >
				<input type="text" placeholder="Ocupação">
				<input type="email" placeholder="Email" >
				<input type="email" placeholder="Confirmação de e-mail">
				<input type="text" placeholder="Celular" >
				<input type="text" placeholder="Telefone">
				<input type="text" placeholder="Nascimento">

				
				<!-- Esposa -->
				<div id="esposa" class="grid">
					Esposa
					<div>
						<input id="esposa-nao" name="radio-esposa" type="radio" checked>
						<label for="esposa-nao">Não</label>
						<input id="esposa-sim" name="radio-esposa" onclick="showSpouse()" type="radio">
						<label for="esposa-sim">Sim</label> 
					</div>
				</div>
				<input id="show_esposa" class="dont-show" type="text" placeholder="Nome da Esposa">
				<input id="show_esposa" class="dont-show" type="text" placeholder="Nascimento da Esposa">

				<input type="text" placeholder="Tipo de Membro" >

				<!-- Filhos -->
				<div id="filho" class="grid">
					Filhos  
					<div>
						<input type="radio" id="filho-nao" name="radio-filhos" value="1" checked>
						<label for="filho-nao">Não</label>
						<input type="radio" id="filho-sim" onclick="showFilho()" value="2" name="radio-filhos">
						<label for="filho-sim">Sim</label> 
					</div>
				</div>
				<input id="show_filho" class="dont-show" type="text" placeholder="Nome da Filho">
				<input id="show_filho" class="dont-show" type="text" placeholder="Nascimento do Filho">

				<input type="text" placeholder="Ofício">
				
				<input type="text" placeholder="País" >
				<input type="text" placeholder="Estado">
				<input type="text" placeholder="Cidade" >
				<input type="text" placeholder="CEP">
				<input type="text" placeholder="Rua" >
				<input type="text" placeholder="Número Residencial">
				
				<div class="grid">
					<button type="submit">Cadastrar</button>
					<button type="button" onclick="goBack()">Cancelar</button>
				</div>
			</form>
		</div>

		<!-- Footer -->
		<?php require('assets/sass/footer.php')?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script>
				function goBack() {

					window.location.href= "index.php";

				}

				function showFilho(){
					if(document.getElementById('filho-sim').checked){
						document.getElementById('show_filho').classList.remove('dont-show');
					}
				}

				function showSpouse(){
					if(document.getElementById('esposa-sim').checked){
						document.getElementById('show_esposa').classList.remove('dont-show');
					}
				}

			</script>

	</body>
</html>