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
<script src="/scripts/busca_cep.js"></script>

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
				<div class="col-md-4 mb-3">
					<label for="cep" ´>CEP</label>
					<input type="text" class="form-control" id="cep" placeholder="" value="" onblur="pesquisacep(this.value);" required>

					<div class="invalid-feedback">
						Insira um CEP válido.
					</div>
				</div>

				<div class="col-md-4 mb-3">
					<label for="cidade">Cidade</label>
					<input type="text" class="form-control" id="cidade" placeholder="" value="" required>

					<div class="invalid-feedback">
						Por favor informe um bairro válido.
					</div>
				</div>

				<div class="col-md-4 mb-3">
					<label for="estado">Estado</label>
					<input type="text" class="form-control" id="estado" placeholder="" value="" required>

					<div class="invalid-feedback">
						Por favor selecione um estado válido.
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-9 mb-3">
					<label for="rua">Logradouro</label>
					<input type="text" class="form-control" id="rua" placeholder="Ex: Av. Brasil" value="" required>

					<div class="invalid-feedback">
						Por favor insira o endereço.
					</div>
				</div>

				<div class="col-md-3 mb-3">
					<label for="numero">Número</label>
					<input type="text" class="form-control" id="numero" placeholder="" value="" required>

					<div class="invalid-feedback">
						Um número válido é necessário.
					</div>
				</div>
			</div>

			<hr class="mb-4">
			<h4 class="mb-3">Dados do serviço</h4>

			<div class="mb-3">
				<label for="cc-name">Tipo de serviço</label>
				<input type="text" class="form-control" id="cc-name" placeholder="" required>

				<div class="invalid-feedback">
					Informe um tipo de serviço
				</div>
			</div>

			<div class="row">
				<div class="col mb-3">
					<label for="cc-name">Data</label>
					<input type="date" class="form-control" id="cc-data" placeholder="" required>

					<div class="invalid-feedback">
						Informe uma data válida
					</div>
				</div>
				<div class="col mb-3">
					<label for="cc-expiration">Valor</label>
					<input type="text" class="form-control" id="cc-expiration" placeholder="" required>

					<div class="invalid-feedback">
						Informe o valor cobrado em reais
					</div>
				</div>
				<div class="col mb-3">
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
			<button class="btn btn-outline-primary btn-lg" id="bottom_element" type="submit">Salvar</button>
			<button class="btn btn-outline-danger btn-lg" id="bottom_element" type="submit">Cancelar</button>
		</form>
	</div>
</div>