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
			<form  id="cadastro-usuario" action="#" method="POST">

				<h4>Dados Pessoais</h4>
				<div class="grid" >
					<input type="text" placeholder="Nome Completo" required>
					<input type="text" placeholder="Ocupação" required>
					<input type="email" placeholder="Email" required>
					<input type="email" placeholder="Confirmação de e-mail" required>
					<input type="text" placeholder="Nascimento" required>
					<input type="text" placeholder="Ofício" required>
					<input type="text" placeholder="Tipo de Membro" required>
					<br>
					<input type="text" placeholder="Celular" required>
					<input type="text" placeholder="Telefone" required>
				</div>

				<hr>
				<h4>Dados do Conjugue</h4>
				<p>ATENÇÃO! Em caso de ausência conjugal, não preencher os campos a seguir.</p>
				<div class="grid">
					<input type="text" placeholder="Nome da Esposa">
					<input type="text" placeholder="Nascimento da Esposa">
				</div>

				<hr>
				<h4>Dados dos Dependentes</h4>
				<p>ATENÇÃO! Em caso de ausência de dependentes, não preencher os campos a seguir.</p>
				
				<div class="grid">
					<input type="text" placeholder="Nome da Filho">
					<input type="text" placeholder="Nascimento do Filho">
				</div>

				<hr>
				<h4>Dados Residenciais</h4>
				
				<div class="grid">
					<input type="text" placeholder="País" required>
					<input type="text" placeholder="Estado" required>
					<input type="text" placeholder="Cidade" required>
					<input type="text" placeholder="CEP" required>
					<input type="text" placeholder="Rua" required>
					<input type="text" placeholder="Número da Residência" required><input type="text" placeholder="Complemento (Opcional)" >
				</div>

				<br>

				<div class="grid" style="width: 40%">
					<div class="grid">
						<button type="submit">Cadastrar</button>
						<button type="button" onclick="goBack()">Cancelar</button>
					</div>
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