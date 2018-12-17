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
		<link rel="stylesheet" href="../assets/css/main.css" />

	</head>
	<body>
		
		<!-- Nav -->
		<?php require('../assets/sass/navbar.php') ?>

		<div style="padding: 10%;">

			<h1><span style="font-family: eurostyle">Enovírtua - Login</span></h1>
			<form  id="login-enovirtua" class="grid" action="#" method="POST">

				<input type="text" placeholder="Login"><br>
				<input type="password" placeholder="Senha"><br>

				<button type="submit">Login</button>
				<button type="button" onclick="goBack()">Voltar</button>

			</form>


			<hr>
			<p>Ainda não é cadastrado? Crie sua conta <a href="cadastro.php">aqui</a></p>
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

					window.history.back(-2);

				}
			</script>

	</body>
</html>