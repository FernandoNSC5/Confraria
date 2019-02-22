<!-------------------------------------
   @Author: Fernando N. S. Costa
   Enovírtua - O Portal Definitivo do Vinho
   https://www.linkedin.com/in/fernandonsc5/
--------------------------------------->

<!-- Pagina de acesso exclusivo do ADM -->
<!DOCTYPE HTML>

<html lang="pt-br">
	<head>
		<title>Enovírtua</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" href="../assets/css/list.css" />
		<link rel="stylesheet" hred="../assets/css/pagination.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	 </head>
	<body>
		
		<!-- Nav -->
		<?php require('../assets/sass/navbar.php') ?>

		<!-- Database solutions -->
		<?php
			require('../assets/base/nmrConnection.php');

			$sql = "SELECT * FROM post WHERE accepted = 0";
			$res = mysqli_query($connection, $sql);

			$id = 1;

		?>

		<div style="padding: 10%">
			<h1>Requisições de Confraria</h1>
			<form id="acept_confraria" action="#" method="POST" >
				<table>
					<?php while($r = mysqli_fetch_assoc($res)) { 

					?>
					<tr>
						<th><?php echo $r['postTitle']; ?></th>
						<th style="text-align: right; padding: 1em;"><button id="<?php echo $r['id']; ?>">Ver mais</button></th>
					</tr>
					<?php } ?>
				</table>
			</form>	
		</div>

		<?php
			//Creating modal
			$sqlPost = "SELECT * from post WHERE id = " . $id;

			$resPost = mysqli_query($connection, $sqlPost);
			$rc = mysqli_fetch_assoc($resPost);

		?>

		<!-- The modal -->
		<div id="modal" class="modal" style="">
			<!-- Modal content -->
			<div class="modal-content">
				<div class="modal-header">
					<span class="close">&times;</span>
					<h2 class="table-title" style="text-align: center; color: white"><?php echo $rc['postTitle'] ?></h2>
				</div>
				<div class="modal-body">
					
					<div style="padding-top: 3%">
						<form id="modal-acept-confraria" action="#" method="POST">
							
							<h4>Texto</h4>
							<table class="modal-table">

								<tr>
									<th><p><?php echo $rc['postText']; ?></p></th>
									<th></th>
								</tr>
							</table>

						</form>
					</div>

				</div>
				<div class="modal-footer">
					<button>Aceitar</button>
					<button>Recusar</button>
				</div>
			</div>
		</div>
		<!-- Footer -->
		<?php require('../assets/sass/footer.php')?>

		<!-- Scripts -->
		<script src="../assets/js/jquery.min.js"></script>
		<script src="../assets/js/skel.min.js"></script>
		<script src="../assets/js/util.js"></script>
		<script src="../assets/js/main.js"></script>

		<script>
			
			var modal = document.getElementById("modal");

			function showModal(){
				modal.classList.add("modal-show");
			}

			function hideModal(){
				modal.classList.remove("modal-show");
			}
	
		</script>

	</body>
</html>