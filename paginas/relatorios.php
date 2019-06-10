<div class="row justify-content-md-center">
	<div class="col-lg-10">
		<div class="py-5 text-center">
			<img class="d-block mx-auto mb-4" id="img_relatorios" src="img/relatorios.png" alt="" width="72" height="72">
			<h1 class="cover-heading">Relatórios Mensais</h1>
		</div>

		<table class="table table-striped" id="tabela">
			<thead>
				<tr>
					<th scope="col">Mês</th>
					<th scope="col">Ano</th>
					<th scope="col">Serviços Prestados</th>
					<th scope="col">Tempo trabalhado</th>
					<th scope="col">Total de ganhos</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include 'crud/relatorio_select.php';

					while ($row = $res->fetch_assoc()) 
					{
						echo "	<tr>
									<td>" . ucfirst($row['mes']) . "</td>
									<td>{$row['ano']}</td>
									<td>{$row['qtd']}</td>
									<td>{$row['temp']}h</td>
									<td>R$ {$row['val']}</td>
								</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</div>