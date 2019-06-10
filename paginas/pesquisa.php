<div class="row justify-content-md-center">
	<div class="col-lg-10">
		<div class="py-5 text-center">
			<img class="d-block mx-auto mb-4" id="img_pesquisa" src="img/os.png" alt="" width="72" height="72">
			<h1 class="cover-heading">Serviços Prestados</h1>
		</div>

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
					<th scope="col" class="text-right"> </th>
				</tr>
			</thead>
			<tbody>
				<?php
					include('connection/config.php');

					$res = $connection->query("SELECT *
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
									<td class='text-right'>
										<a role='button' href='os?edit={$row['ID_os']}' class='btn btn-sm text-primary shadow-none'><i class='fa fa-edit'></i></a>
										<a role='button' href='../crud/os_delete.php?ref=pesquisar&id={$row['ID_os']}'class='btn btn-sm text-danger shadow-none'><i class='fa fa-trash'></i></button>
									</td>
								</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</div>