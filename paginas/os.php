<script src="/scripts/go_back.js"></script>
<script src="/scripts/busca_cep.js"></script>
<script src="/scripts/valida_form.js"></script>

<?php
	if(ISSET($_GET['edit']))
	{
		$target = "/crud/os_update.php?id={$_GET['edit']}";

		include 'crud/os_select.php';
		$res = SelectEdit($_GET['edit']);
		$reg = $res->fetch_assoc();
	}
	else
	{
		$target = "/crud/os_insert.php";
	}
?>

<div class="row justify-content-md-center">
	<div class="col-md-6 align-self-start">
		<div class="py-5 text-center">
			<img class="d-block mx-auto mb-4" id="img_os" src="/img/os.png" alt="ordens de serviço" width="72" height="72">
			<h1 class="cover-heading">Cadastro de Ordens de Serviço</h2>
		</div>

		<h4 class="mb-3">Dados do cliente</h4>

		<form class="needs-validation" action="<?= $target ?>" method="post" novalidate>
			<div class="row">
				<div class="col-md-6 mb-3">
					<label for="nome">Primeiro nome</label>
					<input type="text" class="form-control" id="nome" name="nome" placeholder="" value="<?=$reg['nome']?>" required>

					<div class="invalid-feedback">
						Primeiro nome válido é necessário.
					</div>
				</div>

				<div class="col-md-6 mb-3">
					<label for="sobrenome">Sobrenome</label>
					<input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="" value="<?=$reg['sobrenome']?>" required>

					<div class="invalid-feedback">
						Sobrenome válido é necessário.
					</div>
				</div>
			</div>

			<div class="mb-3">
				<label for="email">Email <span class="text-muted">(Opcional)</span></label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Ex: usuario@dominio.com" value="<?=$reg['email']?>">
			</div>

			<div class="row">
				<div class="col-md-4 mb-3">
					<label for="cep" ´>CEP</label>
					<input type="text" class="form-control" id="cep" name="cep" placeholder="" value="<?=$reg['cep']?>" onblur="pesquisacep(this.value);" required>

					<div class="invalid-feedback">
						Insira um CEP válido.
					</div>
				</div>

				<div class="col-md-4 mb-3">
					<label for="cidade">Cidade</label>
					<input type="text" class="form-control" id="cidade" name="cidade" placeholder="" value="<?=$reg['cidade']?>" required>

					<div class="invalid-feedback">
						Por favor informe um bairro válido.
					</div>
				</div>

				<div class="col-md-4 mb-3">
					<label for="estado">Estado</label>
					<input type="text" class="form-control" id="estado" name="estado" placeholder="" value="<?=$reg['estado']?>" required>

					<div class="invalid-feedback">
						Por favor selecione um estado válido.
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-8 mb-3">
					<label for="rua">Logradouro</label>
					<input type="text" class="form-control" id="rua" name="logradouro" placeholder="Ex: Av. Brasil" value="<?=$reg['logradouro']?>" required>

					<div class="invalid-feedback">
						Por favor insira o endereço.
					</div>
				</div>

				<div class="col-md-4 mb-3">
					<label for="numero">Número</label>
					<input type="text" class="form-control" id="numero" name="numero" placeholder="" value="<?=$reg['numero']?>" required>

					<div class="invalid-feedback">
						Por favor informe um número válido.
					</div>
				</div>
			</div>

			<hr class="mb-4">
			<h4 class="mb-3">Dados do serviço</h4>

			<div class="mb-3">
				<label for="servico">Tipo de serviço</label>
				<input type="text" class="form-control" id="servico" name="servico" placeholder="" value="<?=$reg['servico']?>" required>

				<div class="invalid-feedback">
					Informe um tipo de serviço
				</div>
			</div>

			<div class="row">
				<div class="col mb-3">
					<label for="data">Data</label>
					<input type="date" class="form-control" id="data" name="data" placeholder="" value="<?=$reg['data']?>" required>

					<div class="invalid-feedback">
						Informe uma data válida
					</div>
				</div>

				<div class="col mb-3">
					<label for="hora">Hora</label>
					<input type="time" class="form-control" id="hora" name="hora" placeholder="" value="<?=$reg['hora']?>" required>

					<div class="invalid-feedback">
						Informe uma hora válida
					</div>
				</div>

				<div class="col mb-3">
					<label for="valor">Valor(R$)</label>
					<input type="number" min="1" step="any" class="form-control" id="valor" name="valor" placeholder="" value="<?=$reg['valor']?>" required>

					<div class="invalid-feedback">
						Informe o valor cobrado em reais
					</div>
				</div>

				<div class="col mb-3">
					<label for="tempo">Tempo(horas)</label>
					<input type="number" min="1" step="any" class="form-control" id="tempo" name="tempo" placeholder="" value="<?=$reg['tempo']?>" required>

					<div class="invalid-feedback">
						Informe o tempo do serviço, em horas
					</div>
				</div>
			</div>

			<div class="mb-3">
				<label for="descricao">Descrição detalhada <span class="text-muted">(Opcional)</span></label>
				<textarea class="form-control" id="descricao" name="descricao" rows="3"><?=$reg['descricao']?></textarea>
			</div>

			<hr class="mb-4">

			<button class="btn text-primary btn-lg shadow-none" id="bottom_element" type="submit"><i class='far fa-save'></i> Salvar</button>
			<button class="btn text-danger btn-lg shadow-none" id="bottom_element" onclick="goBack()"><i class='fas fa-ban'></i> Cancelar</button>
		</form>
	</div>
</div>