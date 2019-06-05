<script src="/scripts/validacao.js"></script>

<div class="row justify-content-md-center">
	<div class="col-lg-8">
		<h4 class="mb-3" id="top_element">Dados pessoais</h4>
		<form class="needs-validation" novalidate>
			<div class="row">
				<div class="col-md-6 mb-3">
					<label for="primeiroNome">Nome</label>
					<input type="text" class="form-control" id="primeiroNome" placeholder="" value="" required>
					<div class="invalid-feedback">
						É obrigatório inserir um nome válido.
					</div>
				</div>
				<div class="col-md-6 mb-3">
					<label for="sobrenome">Sobrenome</label>
					<input type="text" class="form-control" id="sobrenome" placeholder="" value="" required>
					<div class="invalid-feedback">
						É obrigatório inserir um sobre nome válido.
					</div>
				</div>
			</div>

			<div class="mb-3">
				<label for="nickname">Empresa</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">&reg;</span>
					</div>
					<input type="text" class="form-control" id="nickname" placeholder="Empresa" required>
					<div class="invalid-feedback" style="width: 100%;">
						Sua Empresa é obrigatório.
					</div>
				</div>
			</div>

			<div class="mb-3">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" placeholder="fulano@exemplo.com" required>
				<div class="invalid-feedback">
					Por favor, insira um endereço de e-mail válido.
				</div>
			</div>

			<div class="mb-3">
				<label for="senha">Senha</label>
				<input type="password" class="form-control" id="senha" placeholder="" required>
				<div class="invalid-feedback">
					Por favor, insira uma senha válida.
				</div>
			</div>

			<div class="mb-3">
				<label for="endereco">Endereço</label>
				<input type="text" class="form-control" id="endereco" placeholder="Rua dos bobos, nº 0" required>
				<div class="invalid-feedback">
					Por favor, insira seu endereço.
				</div>
			</div>

			<div class="mb-3">
				<label for="endereco2">CPF/CNPJ</label>
				<input type="text" class="form-control" id="cpfcnpj" placeholder="000.000.000-00" required>
				<div class="invalid-feedback">
					Seu CPF/CNPJ é obrigatório.
				</div>
			</div>

			<div class="row">
				<div class="col-md-5 mb-3">
					<label for="pais">País</label>
					<select class="custom-select d-block w-100" id="pais" required>
						<option value="">Escolha...</option>
						<option>Brasil</option>
					</select>
					<div class="invalid-feedback">
						Por favor, escolha um país válido.
					</div>
				</div>
				<div class="col-md-4 mb-3">
					<label for="estado">Estado</label>
					<select class="custom-select d-block w-100" id="estado" required>
						<option value="">Escolha...</option>
						<option>Acre</option>
					</select>
					<div class="invalid-feedback">
						Por favor, insira um estado válido.
					</div>
				</div>
				<div class="col-md-3 mb-3">
					<label for="cep">CEP</label>
					<input type="text" class="form-control" id="cep" placeholder="" required>
					<div class="invalid-feedback">
						É obrigatório inserir um CEP.
					</div>
				</div>
			</div>
			<hr class="mb-4">

			<hr class="mb-4">
			<button class="btn btn-outline-primary btn-lg btn-block" id="bottom_element" type="submit">Enviar</button>
		</form>
	</div>
</div>