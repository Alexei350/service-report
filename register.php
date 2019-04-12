<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>OS Report</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <h2>Cadastro</h2>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Seu carrinho</span>
            <span class="badge badge-secondary badge-pill">1</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Grátis</h6>
                <small class="text-muted">Funcionalidades limitadas(full por 30 dias)</small>
              </div>
              <span class="text-muted">R$0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Planinium</h6>
                <small class="text-muted">Funcionalidads completas</small>
              </div>
              <span class="text-muted">R$8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Gold</h6>
                <small class="text-muted">Funcionalidades extras(privilérgios)</small>
              </div>
              <span class="text-muted">R$10</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Código de promoção</h6>
                <small>CODIGOEXEMEPLO</small>
              </div>
              <span class="text-success">-R$2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (BRL)</span>
              <strong>R$0</strong>
            </li>
          </ul>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Código promocional">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Resgatar</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-8 order-md-1">
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
            <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Éverton Desenvolvedor Web</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacidade</a></li>
          <li class="list-inline-item"><a href="#">Termos</a></li>
          <li class="list-inline-item"><a href="#">Suporte</a></li>
        </ul>
      </footer>
    </div>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
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
  </body>
</html>