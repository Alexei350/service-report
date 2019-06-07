<style>
	#legenda_topo
	{
		padding-top: 30px;
		padding-bottom: 30px;
	}
</style>

<div class="row justify-content-md-center">
	<div class="col-lg-10">
		<h1 class="cover-heading" id="legenda_topo">Relatórios Mensais</h1>

		<table class="table table-striped" id="tabela">
			<thead>
				<tr>
					<th scope="col">Período</th>
					<th scope="col">Tempo trabalhado</th>
					<th scope="col">Total de ganhos</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$res = $mysqli->query("SET lc_time_names = 'pt_BR';");

					$res = $mysqli->query("SELECT DATE_FORMAT(os.data, '%M de %Y') AS dta
												, SUM(os.tempo) AS temp
												, SUM(os.valor) AS val 
												
											 FROM report_os AS os 
											 
									   INNER JOIN report_cliente AS cliente 
									   		   ON os.ID_cliente = cliente.id 
												  
										 GROUP BY DATE_FORMAT(os.data, '%Y-%m') 
										 
										 ORDER BY DATE_FORMAT(os.data, '%Y-%m') desc");
					$res->data_seek(0);

					while ($row = $res->fetch_assoc()) 
					{
						echo "	<tr>
									<td>" . ucfirst($row['dta']) . "</td>
									<td>{$row['temp']}h</td>
									<td>R$ {$row['val']}</td>
								</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</div>