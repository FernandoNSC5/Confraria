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
		<link rel="stylesheet" href="../assets/css/pagination.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		</head>
	<body>
		
		<!-- Nav -->
		<?php require('../assets/sass/navbar.php') ?>

		<!-- Database solutions -->
		<?php
			require('../assets/base/nmrConnection.php');

			$sql = "SELECT * from confraria";
			$res = mysqli_query($connection, $sql);

			//for conf
			$id = 1;
			$confName = "";
			$rep = "";
			$repEmail = "";
			$listNames = array();
			$listEmails = array();


		?>
		<div style="padding: 10%">
			<h1>Requisições de Confraria</h1>
			<form id="acept_confraria" action="#" method="POST" >
				<table>
					<?php while($r = mysqli_fetch_assoc($res)) { 
						//id
						//name -> nome da confraria
						//representative -> representante da confraria
						//rep_email -> email do representante
						//accepted -> bool conf aceita ou não
					?>
					<tr>
						<th><?php echo $r['name']; ?></th>
						<th style="text-align: right; padding: 1em;"><button id="<?php echo $r['id']; ?>" onclick="showModal()" >Ver mais</button></th>
					</tr>
					<?php } ?>
				</table>
			</form>	
		</div>

		<?php
			//Creating modal
			$sqlForConf = "SELECT * FROM confraria WHERE id = " . $id;
			$sqlForMembers = "SELECT * FROM conf_member WHERE confraria_id = " . $id;

			$resConf = mysqli_query($connection, $sqlForConf);
			$resMember = mysqli_query($connection, $sqlForMembers);
			$rc = mysqli_fetch_assoc($resConf);
		?>

		<!-- The modal -->
		<div id="modal" class="modal">
			<!-- Modal content -->
			<div class="modal-content">
				<div class="modal-header">
					<span class="close">&times;</span>
					<h2 class="table-title" style="text-align: center; color: white"><?php echo $rc['name'] ?></h2>
				</div>
				<div class="modal-body">
					
					<div style="padding-top: 3%">
						<form id="modal-acept-confraria" action="#" method="POST">
							
							<h4>Representante</h4>
							<table class="modal-table">

								<tr>
									<th><p><?php echo $rc['representative']; ?></p></th>
									<th></th>
								</tr>
								<tr>
									<th><p><?php echo $rc['rep_email']; ?></p></th>
									<th></th>
								</tr>

							</table>
							
							<h4>Integrantes</h4>
							<table class="modal-table">
								
								<?php while($rm = mysqli_fetch_assoc($resMember)) { ?>

								<tr>
									<th><?php echo $rm['name']; ?></th>
									<th><?php echo $rm['email']; ?></th>
								</tr>

							<?php } ?>

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

		<!-- Script for modal -->
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