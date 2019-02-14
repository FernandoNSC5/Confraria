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
						<th style="text-align: right; padding: 1em;"><button id="<?php echo $r['id']; ?>" onclick="getModalId(<?php echo $r['id']; ?>)">Ver mais</button></th>
					</tr>
					<?php } ?>
				</table>
			</form>	
		</div>

		<!-- The modal -->
		<div id="modal" class="modal">
			<!-- Modal content -->
			<div class="modal-content">
				<div class="modal-header">
					<span class="close">&times;</span>
					<h2>Modal Header</h2>
				</div>
				<div class="modal-body">
					<p>Some text in the body</p>
					<p>some text again</p>
				</div>
				<div class="modal-footer">
					<h3>Modal Footer</h3>
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

			var modal;
			//var btn = document.getElementById('modal-btn');
			var span = document.getElementsByClassName("close")[0];

			function getModalId(id){
				modal = document.getElementById(id);
			}

			//btn.onclick = function(){
			//	modal.style.display = "block";
			//}

			span.onclick = function(){
				modal.style.display = "none";
			}

			window.onclick = function(event){
				if(event.target == modal){
					modal.style.display = "none";
				}
			}

		</script>
	
	</body>
</html>