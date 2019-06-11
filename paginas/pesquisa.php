<div class="row justify-content-md-center">
	<div class="col-lg-10">
		<!-- Topo da página (imagem e título) -->
		<div class="py-5 text-center">
			<img class="d-block mx-auto mb-4" id="img_pesquisa" src="img/os.png" alt="" width="72" height="72">
			<h1 class="cover-heading">Serviços Prestados</h1>
		</div>

		<table class="table table-striped" id="tabela">
			<!-- Cabeçalho da tabela -->
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
			<!-- Carrega os dados no corpo da tabela -->
			<tbody>
				<?php
					include 'crud/os_select.php';
					$res = SelectTable();

					while ($row = $res->fetch_assoc()) 
					{
						echo "	<tr>
									<td><strong>{$row['ID_os']}</strong></td>
									<td>{$row['nome']} {$row['sobrenome']}</td>
									<td>{$row['servico']}</td>
									<td>{$row['dta']}</td>
									<td>{$row['hra']}</td>
									<td>{$row['tempo']}h</td>
									<td class='text-right'>R$ {$row['val']}</td>
									<td class='text-right'>
										<a role='button' href='os/{$row['ID_os']}' class='btn btn-sm text-primary shadow-none'><i class='fa fa-edit'></i></a>
										<a role='button' href='../crud/os_delete.php?ref=pesquisar&id={$row['ID_os']}'class='btn btn-sm text-danger shadow-none'><i class='fa fa-trash'></i></button>
									</td>
								</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</div>