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

		<table class="table table-striped" id="tabela">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Cliente</th>
					<th scope="col">Serviço</th>
					<th scope="col">Data</th>
					<th scope="col">Horário</th>
					<th scope="col" class="text-center">Tempo</th>
					<th scope="col" class="text-right">Valor</th>
					<th> </th>
				</tr>
			</thead>
			<tbody>
				<?php
					$res = $mysqli->query("SELECT *
												, os.ID as ID_os
												, TIME_FORMAT(hora, '%H:%i') as hra
					
											 FROM report_os as os 
											
									   INNER JOIN report_cliente as cliente 
								 		       ON os.ID_cliente = cliente.ID 
													
									  	 ORDER BY data DESC");
					$res->data_seek(0);

					while ($row = $res->fetch_assoc()) 
					{
						echo "	<tr>
									<td><strong>{$row['ID_os']}</strong></td>
									<td>{$row['nome']}</td>
									<td>{$row['servico']}</td>
									<td>{$row['data']}</td>
									<td>{$row['hra']}</td>
									<td>{$row['tempo']}h</td>
									<td class='text-right'>R$ {$row['valor']}</td>
									<td>
										<a role='button' href='/os?edit={$row['ID_os']}' class='btn btn-sm btn-primary text-light'><i class='fa fa-edit'></i></a>
										<a role='button' href='/database/crud/os_delete.php?id={$row['ID_os']}'class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></button>
									</td>
								</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</div>