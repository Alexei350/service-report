        <main role="main" class="inner cover">
            <div class="container">
                <div class="py-5 text-center">
                    <img class="mb-4" src="/img/login.png" alt="" width="128" height="128">
                    <h2>Cadastro</h2>
                </div>

                <div class="row justify-content-md-center">
                    <div class="col-lg-8">
                        <h4 class="mb-3">Dados pessoais</h4>
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

                    <h4 class="mb-3">Pagamento</h4>

                    <div class="d-block my-3">
                    	<div class="custom-control custom-radio">
                        <input id="gratis" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                        <label class="custom-control-label" for="gratis">Grátis</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input id="credito" name="paymentMethod" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="credito">Cartão de crédito</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input id="debito" name="paymentMethod" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="debito">Cartão de débito</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="paypal">PayPal</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input id="boleto" name="paymentMethod" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="boleto">Boleto</label>
                      </div>
                    </div>
                    
                    <hr class="mb-4">
                    <button class="btn btn-outline-primary btn-lg btn-block" type="submit">Enviar</button>
                  </form>
                    </div>
                </div>
            </div>
        </main>

        <script>
          // Exemplo de JavaScript para desativar o envio do formulário, se tiver algum campo inválido.
          (function() {
            'use strict';

            window.addEventListener('load', function() {
              // Selecione todos os campos que nós queremos aplicar estilos Bootstrap de validação customizados.
              var forms = document.getElementsByClassName('needs-validation');

              // Faz um loop neles e previne envio
              var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                  if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                  }
                  form.classList.add('was-validated');
                }, false);
              });
            }, false);
          })();
        </script>