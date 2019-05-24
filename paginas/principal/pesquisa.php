<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

<style>
	#legenda_topo
	{
		padding-top: 30px;
		padding-bottom: 30px;
	}
</style>

<div class="row justify-content-md-center">
	<div class="col-lg-10">
		<h1 class="cover-heading" id="legenda_topo">Serviços Prestados</h1>

		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Cliente</th>
					<th scope="col">Serviço</th>
					<th scope="col" class="text-center">Tempo</th>
					<th scope="col" class="text-right">Valor</th>
					<th> </th>
				</tr>
			</thead>
			<tbody>
				<?
					$xmldata = simplexml_load_file("database/config.xml") or die("Falha ao carregar XML");

					$host = $xmldata->host;
					$user = $xmldata->user;
					$password = $xmldata->password;
					$database = $xmldata->database;
					$port = (int)$xmldata->port;
					
					ini_set('default_charset', 'UTF-8');
					$mysqli = new mysqli($host, $user, $password, $database, $port);
					$mysqli->query("SET NAMES UTF8");

					$res = $mysqli->query("SELECT *
												, os.ID as ID_os
					
											FROM report_os as os 
											
										INNER JOIN report_cliente as cliente 
													ON os.ID_cliente = cliente.ID 
													
										ORDER BY os.ID ASC");
					$res->data_seek(0);

					while ($row = $res->fetch_assoc()) 
					{
						echo "	<tr>
									<td><strong>{$row['ID_os']}</strong></td>
									<td>{$row['nome']}</td>
									<td>{$row['servico']}</td>
									<td>{$row['tempo']}h</td>
									<td class='text-right'>R$ {$row['valor']}</td>
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