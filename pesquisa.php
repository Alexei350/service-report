<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>OS Report Beta v0.1</title>
		<meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" /> 
	  	<meta charset="UTF-8">

	  	<link rel="shortcut icon" href="/img/logo-dark.png">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

	  	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

		<style>
	    	#principal {
	    	  	padding-top: 50px;
	    	}

			#legenda_topo
			{
				padding-bottom: 30px;
			}

			#edit
			{
				height: 50px;
				weight: 50px;
			}
	    </style>
	</head>

	<body class="text-center">
	  	<header class="masthead mb-auto">
		    <div class="inner">
		      	<?include("menu.php")?>
		    </div>
		</header>

	  	<main class="inner cover">
	  		<div class="row justify-content-md-center" id="principal">
		  		<div class="col-lg-10">
				  <h1 class="cover-heading" id="legenda_topo">Serviços Prestados</h1>

				  	<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">Cliente</th>
								<th scope="col">Serviço</th>
								<th scope="col" class="text-center">Tempo</th>
								<th scope="col" class="text-right">Valor</th>
								<th> </th>
							</tr>
						</thead>
						<tbody>
							<?
								ini_set('default_charset', 'UTF-8');
								$mysqli = new mysqli("127.0.0.1", "root", "", "projeto", 3306);
								$mysqli->query("SET NAMES UTF8");

								$res = $mysqli->query("SELECT *
								
														FROM report_os as os 
														
													INNER JOIN report_cliente as cliente 
																ON os.ID_Cliente = cliente.ID 
																
													ORDER BY os.ID ASC");
								$res->data_seek(0);

								while ($row = $res->fetch_assoc()) 
								{
									echo "	<tr>
												<td>{$row['Nome']}</td>
												<td>{$row['Servico']}</td>
												<td>{$row['Tempo']}h</td>
												<td class='text-right'>R$ {$row['Valor']}</td>
												<td>
													<button class='btn btn-sm btn-primary'><i class='fa fa-edit'></i></button>
													<button class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></button>
												</td>
											</tr>";
								}
							?>
						</tbody>
                	</table>
				</div>
			</div>
		</main>
	</body>
</html>