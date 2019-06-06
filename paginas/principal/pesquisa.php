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
				<?php
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
										<a role='button' href='/os?edit={$row['ID_os']}' class='btn btn-sm btn-primary text-light'><i class='fa fa-edit'></i></a>
										<button class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></button>
									</td>
								</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</div>