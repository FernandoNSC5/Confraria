<!-------------------------------------
   @Author: Fernando N. S. Costa
   Enovírtua - O Portal Definitivo do Vinho
   https://www.linkedin.com/in/fernandonsc5/
--------------------------------------->


<!-- INFORMAÇÕEOS PARA MIXA - Cliclou em "saiba mais" em "index" -->
<!-- CONECTAR AO BANCO E CARREGAR INFORMAÇÕES REFERENTES AO POST COM BASE NO ID DA PUBLICAÇÃO
	$ID_PUB = $_POST['ID']
-->

<!DOCTYPE HTML>

<html lang="pt-br">
	<head>
		<title>Enovírtua</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<?php require('assets/sass/navbar.php') ?>

		<!-- About Enovírtua -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major special">
						<h2><!-- TITULO -->Bla bla bla titulo</h2>
						<p><!-- SUBTITULO -->Pipipi popopo subtitulo</p>
					</header>

					<a href="#" class="image fit"><img src="images/pic11.jpg" alt="" /></a>
					<p>Da hadouken hyu<br> ibagem meramente ilustrativa, carregar outra co phpzudo</p>

					<div class="container-form-btn">
						<button class="form-btn" onclick="goBack()">
							Voltar
						</button>
					</div>

				</div>
			</section>

		<!-- Footer -->
		<?php require('assets/sass/footer.php')?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script>
				function goBack() {

					window.history.back();

				}
			</script>
	</body>
</html>