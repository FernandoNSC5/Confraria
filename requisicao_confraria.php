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

			.singleGrid {
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

				.singleGrid {
					display: grid;
					grid-template-columns: auto;
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

			<h1><span style="font-family: eurostyle">Requisição de Confraria - Enovírtua</span></h1>
			<hr>
			<form  id="requisicao-confraria" action="#" method="POST">
				<h4>Dados da Confraria</h4>
				<div class="grid">
					<input type="text" placeholder="Nome da Confraria" required>
					<input type="text" placeholder="Nome Completo - Representante" required>
					<input type="email" placeholder="E-mail" required>
					<input type="email" placeholder="Confirmação de E-mail" required>
				</div>
				
				<br>
				<hr>
				
				<h4>Integrantes</h4>
				<p>Atenção! O número mínimo de integrantes para se efetuar a requisição de confrarias é: <strong>Dez</strong>. Máximo de <strong>trinta</strong> integrantes.</p>

				<div class="grid" >
					<input type="text" placeholder="Nome Completo - Integrante" required>
					<input type="email" placeholder="E-mail" required>

					<input type="text" placeholder="Nome Completo - Integrante" required>
					<input type="email" placeholder="E-mail" required>

					<input type="text" placeholder="Nome Completo - Integrante" required>
					<input type="email" placeholder="E-mail" required>

					<input type="text" placeholder="Nome Completo - Integrante" required>
					<input type="email" placeholder="E-mail" required>

					<input type="text" placeholder="Nome Completo - Integrante" required>
					<input type="email" placeholder="E-mail" required>

					<input type="text" placeholder="Nome Completo - Integrante" required>
					<input type="email" placeholder="E-mail" required>

					<input type="text" placeholder="Nome Completo - Integrante" required>
					<input type="email" placeholder="E-mail" required>

					<input type="text" placeholder="Nome Completo - Integrante" required>
					<input type="email" placeholder="E-mail" required>

					<input type="text" placeholder="Nome Completo - Integrante" required>
					<input type="email" placeholder="E-mail" required>

					<input type="text" placeholder="Nome Completo - Integrante" required>
					<input type="email" placeholder="E-mail" required>
				</div>
				
				<br>

				<div class="grid" style="width: 40%">
					<button type="submit">Requisitar</button>
					<button type="button" onclick="goBack()">Cancelar</button>
				</div>

			</form>
		</div>

		<!-- Footer -->
		<?php require('assets/sass/footer.php') ?>

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
		<script>
			function goBack() {
				window.location.href= "index.php";
			}
		</script>

	</body>
</html>