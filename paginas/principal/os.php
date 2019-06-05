<style>
	.bd-placeholder-img {
		font-size: 1.125rem;
		text-anchor: middle;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}

	@media (min-width: 768px) {
		.bd-placeholder-img-lg {
			font-size: 3.5rem;
		}
	}

	#os {
		max-width: 960px;
	}

	.lh-condensed {
		line-height: 1.25;
	}
</style>

<script src="/scripts/validacao.js"></script>

<div class="row justify-content-md-center">
	<div class="col-lg-6">
		<div class="py-5 text-center">
			<img class="d-block mx-auto mb-4" src="/img/os.png" alt="" width="72" height="72">
			<h2>Cadastro de Ordens de Serviço</h2>
			<p class="lead">Forneça os dados do cliente, descrição dos serviços e informações para adicionar a ordem de serviço.</p>
		</div>
	</div>
</div>

<div class="row justify-content-md-center">
	<div class="col-md-6 align-self-start">
		<h4 class="mb-3">Dados do cliente</h4>

		<form class="needs-validation" novalidate>
			<div class="row">
				<div class="col-md-6 mb-3">
					<label for="firstName">Primeiro nome</label>
					<input type="text" class="form-control" id="firstName" placeholder="" value="" required>

					<div class="invalid-feedback">
						Primeiro nome válido é necessário.
					</div>
				</div>

				<div class="col-md-6 mb-3">
					<label for="lastName">Sobrenome</label>
					<input type="text" class="form-control" id="lastName" placeholder="" value="" required>

					<div class="invalid-feedback">
						Sobrenome válido é necessário.
					</div>
				</div>
			</div>

			<div class="mb-3">
				<label for="email">Email <span class="text-muted">(Opcional)</span></label>
				<input type="email" class="form-control" id="email" placeholder="Ex: usuario@dominio.com">

				<div class="invalid-feedback">
					Por favor insira um email válido.
				</div>
			</div>

			<div class="row">
				<div class="col-md-3 mb-3">
					<label for="zip" ´>CEP</label>
					<input type="text" class="form-control" id="zip" placeholder="" required>

					<div class="invalid-feedback">
						Insira um CEP válido.
					</div>
				</div>

				<div class="col-md-5 mb-3">
					<label for="country">País</label>
					<select class="custom-select d-block w-100" id="country" required>
						<option value="">Selecione...</option>
						<option>Brasil</option>
					</select>
					<div class="invalid-feedback">
						Por favor selecione um país válido.
					</div>
				</div>

				<div class="col-md-4 mb-3">
					<label for="state">Estado</label>
					<select class="custom-select d-block w-100" id="state" required>
						<option value="">Selecione...</option>
						<option>Acre (AC)</option>
						<option>Alagoas (AL)</option>
						<option>Amapá (AP)</option>
						<option>Amazonas (AM)</option>
						<option>Bahia (BA)</option>
						<option>Ceará (CE)</option>
						<option>Distrito Federal (DF)</option>
						<option>Espírito Santo (ES)</option>
						<option>Goiás (GO)</option>
						<option>Maranhão (MA)</option>
						<option>Mato Grosso (MT)</option>
						<option>Mato Grosso do Sul (MS)</option>
						<option>Minas Gerais (MG)</option>
						<option>Pará (PA)</option>
						<option>Paraíba (PB)</option>
						<option>Paraná (PR)</option>
						<option>Pernambuco (PE)</option>
						<option>Piauí (PI)</option>
						<option>Rio de Janeiro (RJ)</option>
						<option>Rio Grande do Norte (RN)</option>
						<option>Rio Grande do Sul (RS)</option>
						<option>Rondônia (RO)</option>
						<option>Roraima (RR)</option>
						<option>Santa Catarina (SC)</option>
						<option>São Paulo (SP)</option>
						<option>Sergipe (SE)</option>
						<option>Tocantins (TO)</option>
					</select>

					<div class="invalid-feedback">
						Por favor selecione um estado válido.
					</div>
				</div>
			</div>

			<div class="mb-3">
				<label for="address">Endereço</label>
				<input type="text" class="form-control" id="address" placeholder="Ex: Av. Brasil, 123" required>

				<div class="invalid-feedback">
					Por favor insira o endereço.
				</div>
			</div>

			<hr class="mb-4">
			<h4 class="mb-3">Dados do serviço</h4>

			<div class="row">
				<div class="col-md-6 mb-3">
					<label for="cc-name">Tipo de serviço</label>
					<input type="text" class="form-control" id="cc-name" placeholder="" required>

					<div class="invalid-feedback">
						Informe um tipo de serviço
					</div>
				</div>
				<div class="col-md-3 mb-3">
					<label for="cc-expiration">Valor</label>
					<input type="text" class="form-control" id="cc-expiration" placeholder="" required>

					<div class="invalid-feedback">
						Informe o valor cobrado em reais
					</div>
				</div>
				<div class="col-md-3 mb-3">
					<label for="cc-cvv">Tempo</label>
					<input type="text" class="form-control" id="cc-cvv" placeholder="" required>

					<div class="invalid-feedback">
						Informe o tempo do serviço, em horas
					</div>
				</div>
			</div>

			<div class="mb-3">
				<label for="address2">Descrição detalhada <span class="text-muted">(Opcional)</span></label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div>

			<hr class="mb-4">
			<button class="btn btn-outline-primary btn-lg" type="submit">Salvar</button>
			<button class="btn btn-outline-danger btn-lg" type="submit">Cancelar</button>
		</form>
	</div>
</div>