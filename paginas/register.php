<script src="/scripts/go_back.js"></script>
<script src="/scripts/busca_cep.js"></script>
<script src="/scripts/valida_form.js"></script>

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
					<input type="text" class="form-control" id="empresa" name="empresa" placeholder="" required>
					<div class="invalid-feedback" style="width: 100%;">
						Sua Empresa é obrigatório.
					</div>
				</div>
			</div>

			<div class="mb-3">
				<label for="cpfcnpj">CPF/CNPJ</label>
				<input type="text" class="form-control" id="cpfcnpj" name="cpfcnpj" placeholder="" required>
				<div class="invalid-feedback">
					Seu CPF/CNPJ é obrigatório.
				</div>
			</div>

			<div class="mb-3">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="" required>
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

			<hr class="mb-4">
			<h4 class="mb-3">Endereço</h4>

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
					<input type="text" class="form-control" id="rua" name="logradouro" placeholder="" value="<?=$reg['logradouro']?>" required>

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

			<button class="btn text-primary btn-lg shadow-none" id="bottom_element" type="submit"><i class='far fa-save'></i> Salvar</button>
			<button class="btn text-danger btn-lg shadow-none" id="bottom_element" onclick="goBack()"><i class='fas fa-ban'></i> Cancelar</button>
		</form>
	</div>
</div>