<!-------------------------------------
   @Author: Fernando N. S. Costa
   Enovírtua - O Portal Definitivo do Vinho
   https://www.linkedin.com/in/fernandonsc5/
--------------------------------------->

<!-- Cadastro destinado ao perfil administrador -->
<!DOCTYPE HTML>

<html lang="pt-br">
	<head>
		<title>Enovírtua - ADM</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
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
		<?php require('../assets/sass/navbar.php') ?>

		<div style="padding: 10%;">

			<h1><span style="font-family: eurostyle">Cadastro de Cargos</span></h1>
			<hr>
			<form id="cadastro-cargos" action="#" method="POST">
				<h4>Dados Pessoais</h4>
				<div class="grid">
					<input type="text" placeholder="Nome Completo" required>
					<input type="email" placeholder="E-mail" required>
					<input type="email" placeholder="Confirmação de E-mail" required>
					<select name="member-type">
						<option value="membro_fundador">Membro Fundador</option>
						<option value="membro_efetivo">Membro Efetivo</option>
					</select>
					<select name="member-function">
						<option value="president">Presidente</option>
						<option value="sub-president">Vice-Presidente</option>
						<option value="sec-director">Diretor(a) Secretário(a)</option>
						<option value="cs-director">Diretor(a) Tesoureiro(a)</option>
						<option value="ev-director">Diretor de Eventos</option>
						<option value="member">Membro</option>
					</select>
				</div>
			</form>

		</div>

		<!-- Footer -->
		<?php require('../assets/sass/footer.php')?>

		<!-- Scripts -->
		<script src="../assets/js/jquery.min.js"></script>
		<script src="../assets/js/skel.min.js"></script>
		<script src="../assets/js/util.js"></script>
		<script src="../assets/js/main.js"></script>
		<script>
			function goBack() {
				window.location.href= "../index.php";
			}
		</script>

	</body>
</html>