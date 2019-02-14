<!-------------------------------------
   @Author: Fernando N. S. Costa
   Enovírtua - O Portal Definitivo do Vinho
   https://www.linkedin.com/in/fernandonsc5/
--------------------------------------->

<?php
	//Connecting to base
	require('assets/base/nmrConnection.php');
	$sql = "SELECT postDate, postText, postTitle, postPhoto FROM post";

	$perPage = 2;

	if(isset($_GET['page']) & !empty($_GET['page'])){
		$curpage = $_GET['page'];
	} else {
		$curpage = 1;
	}

	$ReadSql = "SELECT * FROM post LIMIT 0, 2";
	$start = ($curpage * $perPage) - $perPage;
	$PageSql = "SELECT * FROM post";
	$pagers = mysqli_query($connection, $PageSql);
	$totalRes = mysqli_num_rows($pagers);

	$endpage = ceil($totalRes/$perPage);
	$startpage = $curpage + 1;
	$nextPage = $curpage + 1;
	$previousPage = $curpage - 1;

	$sql = "SELECT postDate, postText, postTitle, postPhoto FROM post LIMIT $start, $perPage";

	$res = mysqli_query($connection, $sql);
?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title>Enovírtua</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/pagination.css" />
	</head>

	<body class="landing">

		<?php require('assets/sass/navbar.php'); ?>

		<!-- Banner -->
			<section id="banner">
				<i><img style="width:10%" src="images/logo/logo.png"/></i>
				<h2 style="font-family: eurostyle">Enovírtua</h2>
				<p>O portal Definitivo do vinho</p>
				<ul class="actions">
					<li><a href="#" class="button big alt">Saiba mais</a></li>
				</ul>
			</section>

		<section class="wrapper style1">
			<div class="inner">
				<?php
					while($r = mysqli_fetch_assoc($res)){
					//postDate
					//postText
					//postTitle
					//postPhoto
				?>
				<article class="feature left">
					<span class="image"><img src="images/uploads/pic01.jpg" alt="" /></span>
						<div class="content">
							<h2><?php echo $r['postTitle']; ?></h2>
							<p><?php echo $r['postText']; ?></p>
							<ul class="actions">
								<li>
									<a href="#" class="button alt">Saiba Mais</a>
								</li>
							</ul>
						</div>
					</article>
				<?php } ?>
				<div class="pagination-grid">
					<div></div>
					<div class="pagination">
						<a href="#">&laquo;</a>
						<a href="#" class="active">1</a>
						<?php
							//This code calculates num of pages
							$pg = (int) $totalRes/$perPage;
							if($pg * $perPage < $totalRes) {
								$pg += 1;
							}
							for($i = 1; $i<=$pg ; $i++){
								echo '<a href="#">'.$i.'</a>';
							}
						?>
						<a href="#">&raquo;</a>
					</div>
				</div>
			</div>
		</section>

		<!-- About Enovirtua-->
			<section class="wrapper style3 special">
				<div class="inner">
					<header class="major narrow	">
						<h2>Requisite acesso</h2>
						<p>Requisite acesso de sua confraria em nosso portal <strong>Enovírtua</strong>. 
					</header>
					<ul class="actions">
						<li><a href="#" class="button big alt">Requisitar</a></li>
					</ul>
				</div>
			</section>

			<?php require('assets/sass/footer.php') ?>			

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>