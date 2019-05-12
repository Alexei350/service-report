<!DOCTYPE html>
<html lang="br">
	<head>
		<title>OS Report Beta v0.1</title>
		<meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" /> 
	  	<!--meta charset="UTF-8"-->

	  	<link rel="shortcut icon" href="/img/logo-dark.png">

	  	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

		<style>
	    	#principal {
	    	  	padding-top: 50px;
	    	}
	    </style>
	</head>

	<body class="text-center">
	  	<header class="masthead mb-auto">
		    <div class="inner">
		      	<?include("menu.php")?>
		    </div>
		</header>

		<!--?php
			$mysqli = new mysqli("127.0.0.1", "root", "", "projeto", 3306);

			$res = $mysqli->query("SELECT * FROM report_os ORDER BY id ASC");
			$res->data_seek(0);

			$vet = array();
			$i = 0;
			while ($row = $res->fetch_assoc()) 
			{
				$vet[i][0] = $row['Valor'];
				$vet[i][1] = $row['Tempo'];
				$vet[i][2] = $row['Desc'];
				$i++;
			}
		?-->

	  	<main class="inner cover">
	  		<div class="row justify-content-md-center" id="principal">
		  		<div class="col-lg-6">
					<?
						$mysqli = new mysqli("127.0.0.1", "root", "", "projeto", 3306);

						$res = $mysqli->query("SELECT *
						
												FROM report_os as os 
												
											INNER JOIN report_cliente as cliente 
														ON os.ID_Cliente = cliente.ID 
														
											ORDER BY os.ID ASC");
						$res->data_seek(0);

						while ($row = $res->fetch_assoc()) 
						{
							echo "	<div class='row'>
										<div class='jumbotron jumbotron-fluid'>
											<div class='container'>
												<h3>{$row['Nome']} - {$row['Servico']}</h3>
												
												<p class = 'lead'>
													Valor: R$ {$row['Valor']}<br>
													Tempo: {$row['Tempo']}h<br>
													Descrição detalhada: {$row['Descricao']}
												</p>
											</div>
										</div>
									</div>";
						}
					?>
				</div>
			</div>
		</main>
	</body>
</html>