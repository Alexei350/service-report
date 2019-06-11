<script src="/scripts/go_back.js"></script>
<script src="scripts/valida_form.js"></script>

<div class="row justify-content-md-center">
	<div class="col-lg-6">
		<h4 class="mb-3" id="top_element">Dados pessoais</h4>
		<form class="needs-validation" action="crud/usuario_insert.php" method="post" novalidate>
			<div class="row">
				<div class="col-md-6 mb-3">
					<label for="nome">Nome</label>
					<input type="text" class="form-control" id="nome" name="nome" placeholder="" value="" required>
					<div class="invalid-feedback">
						É obrigatório inserir um nome válido.
					</div>
				</div>
				<div class="col-md-6 mb-3">
					<label for="sobrenome">Sobrenome</label>
					<input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="" value="" required>
					<div class="invalid-feedback">
						É obrigatório inserir um sobre nome válido.
					</div>
				</div>
			</div>

			<div class="mb-3">
				<label for="empresa">Empresa</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">&reg;</span>
					</div>
					<input type="text" class="form-control" id="empresa" name="empresa" placeholder="Empresa" required>
					<div class="invalid-feedback" style="width: 100%;">
						Sua Empresa é obrigatório.
					</div>
				</div>
			</div>

			<div class="mb-3">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="fulano@exemplo.com" required>
				<div class="invalid-feedback">
					Por favor, insira um endereço de e-mail válido.
				</div>
			</div>

			<div class="mb-3">
				<label for="senha">Senha</label>
				<input type="password" class="form-control" id="senha" name="senha" placeholder="" required>
				<div class="invalid-feedback">
					Por favor, insira uma senha válida.
				</div>
			</div>

			<div class="mb-3">
				<label for="endereco">Endereço</label>
				<input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua dos bobos, nº 0" required>
				<div class="invalid-feedback">
					Por favor, insira seu endereço.
				</div>
			</div>

			<div class="mb-3">
				<label for="cpfcnpj">CPF/CNPJ</label>
				<input type="text" class="form-control" id="cpfcnpj" name="cpfcnpj" placeholder="000.000.000-00" required>
				<div class="invalid-feedback">
					Seu CPF/CNPJ é obrigatório.
				</div>
			</div>

			<div class="row">
				<div class="col-md-5 mb-3">
					<label for="pais">País</label>
					<select class="custom-select d-block w-100" id="pais" name="pais" required>
						<option value="">Escolha...</option>
						<option>Brasil</option>
					</select>
					<div class="invalid-feedback">
						Por favor, escolha um país válido.
					</div>
				</div>
				<div class="col-md-4 mb-3">
					<label for="estado">Estado</label>
					<select class="custom-select d-block w-100" id="estado" name="estado" required>
						<option value="">Escolha...</option>
						<option>Acre</option>
					</select>
					<div class="invalid-feedback">
						Por favor, insira um estado válido.
					</div>
				</div>
				<div class="col-md-3 mb-3">
					<label for="cep">CEP</label>
					<input type="text" class="form-control" id="cep" name="cep" placeholder="" required>
					<div class="invalid-feedback">
						É obrigatório inserir um CEP.
					</div>
				</div>
			</div>

			<hr class="mb-4">

			<button class="btn text-primary btn-lg shadow-none" id="bottom_element" type="submit"><i class='far fa-save'></i> Salvar</button>
			<button class="btn text-danger btn-lg shadow-none" id="bottom_element" onclick="goBack()"><i class='fas fa-ban'></i> Cancelar</button>
		</form>
	</div>
</div>