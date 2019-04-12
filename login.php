<!DOCTYPE html>
<html>
	<head>
		<title>OS Report Beta v0.1</title>
	  	<meta charset="UTF-8">

	  	<link rel="shortcut icon" href="/img/logo-dark.png">

	  	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	
		<!--Estilo da página de login-->
		<style>
	    	.bd-placeholder-img 
	    	{
	    		font-size: 1.125rem;
	    		text-anchor: middle;
	    		-webkit-user-select: none;
	    		-moz-user-select: none;
	    		-ms-user-select: none;
	    		user-select: none;
	    	}

	    	@media (min-width: 768px) 
	    	{
	    	  	.bd-placeholder-img-lg 
	    	  	{
	    	  	  	font-size: 3.5rem;
	    	  	}
	    	}
	    </style>

	    <link rel="stylesheet" href="/login.css">
	</head>

	<body class="text-center">
		<header class="masthead mb-auto">
		    <div class="inner">
		      	<?include("menu.php")?>
		    </div>
		</header>

		<main role="main" class="inner cover">
	  		<form class="form-signin">
	  			<!--Cabeçalho do login-->
				<img class="mb-4" src="/img/login.png" alt="" width="128" height="128">
				<h1 class="h3 mb-3 font-weight-normal">Login</h1>

				<!--Email-->
				<label for="inputEmail" class="sr-only">Email</label>
				<input type="email" id="inputEmail" class="form-control" placeholder="Ex: usuario@dominio.com" required autofocus>
				
				<!--Senha-->
				<label for="inputPassword" class="sr-only">Senha</label>
				<input type="password" id="inputPassword" class="form-control" placeholder="Digite sua senha" required>
				
				<!--Lebrar usuário-->
				<div class="checkbox mb-3">
					<label>
						<input type="checkbox" value="remember-me"> Lembrar usuário
					</label>
				</div>

				<!--Botão de aceitar-->
				<button class="btn btn-lg btn-outline-primary btn-block" type="submit">Conectar</button>
			</form>
		</main>
	</body>
</html>