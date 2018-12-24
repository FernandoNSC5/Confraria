<?php
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$str = substr($actual_link, 31, 5);
?>

<!-- Header for Enovírtua NavBar -->
<header id="header" >
	<h1><a href="../index.php" style="font-family: eurostyle">Enovírtua</a></h1>
	<a href="#nav">Menu</a>
</header>

<!-- NavBar -->
<?php
	if($str == "pages"){
		?>
		<nav id="nav">
			<ul class="links">
				<li><a href="../index.php">Início</a></li>
				<li><a href="about.php">Informações</a></li>
				<li><a href="requisicao_confraria.php">Cadastrar Confraria</a></li>
				<li><a href="#">Contato</a></li>
				<hr>
				<li><a href="login.php">Login</a></li>
			</ul>
		</nav>
<?php
	}else{ ?>
		<nav id="nav">
			<ul class="links">
				<li><a href="index.php">Início</a></li>
				<li><a href="pages/about.php">Informações</a></li>
				<li><a href="pages/requisicao_confraria.php">Cadastrar Confraria</a></li>
				<li><a href="#">Contato</a></li>
				<hr>
				<li><a href="pages/login.php">Login</a></li>
			</ul>
		</nav>
<?php } ?>