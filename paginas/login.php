<link rel="stylesheet" href="styles/login.css">

<body class="text-center">
	<main role="main" class="inner cover">
		<form class="form-signin" action="../session/sessao_login.php" method="post">
			<!--Cabeçalho do login-->
			<img class="mb-4" id="img_login" src="img/login.png" alt="" width="128" height="128">
			<h1 class="h3 mb-3 font-weight-normal">Login</h1>

			<!--Email-->
			<label for="inputEmail" class="sr-only">Email</label>
			<input type="email" id="inputEmail" name="email" class="form-control" placeholder="Ex: usuario@dominio.com" required autofocus>

			<!--Senha-->
			<label for="inputPassword" class="sr-only">Senha</label>
			<input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Digite sua senha" required>

			<!--Lembrar usuário-->
			<!-- <div class="checkbox mb-3">
				<label>
					<input type="checkbox" value="remember-me"> Lembrar usuário
				</label>
			</div> -->

			<!--Botão de aceitar-->
			<button class="btn btn-lg btn-outline-primary btn-block" type="submit">Conectar</button>
			<a role="button" href="/register" class="btn btn-md text-primary">Não possui uma conta?</button>
		</form>
	</main>
</body>