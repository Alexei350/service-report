<!DOCTYPE html>
<html lang="br">
	<head>
		<title>OS Report Beta v0.1</title>
	  	<meta charset="UTF-8">

	  	<link rel="shortcut icon" href="/img/logo-dark.png">

	  	<link rel="stylesheet" href="utilities/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="utilities/font_awesome/css/all.css">
	  	<link rel="stylesheet" href="styles/global.css">

		<script src="utilities/ajax-popper.min.js"></script>
		<script src="utilities/jquery-3.3.1.slim.min.js"></script>
		<script src="utilities/bootstrap/js/bootstrap.min.js"></script>
	</head>

	<body class="text-center">
		<?php
			include('database/config.php');
		?>

		<div class="navbar navbar-expand sticky-top navbar-dark" style="background-color: #1f2833">
			<a class="navbar-brand" href="/">
				<img src="/img/logo-white.png" width="30" height="30" alt="Logo">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="/">Início<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/os">Cadastrar</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="/pesquisar">Pesquisar</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/relatorios">Relatórios</a>
					</li>
				</ul>
				<?
					session_start();
					
					//Verifica se usuário está logado
					if(ISSET($_SESSION['Nome']))
					{
						echo "	<div style='padding-right:10px; color:#FFFFFF'>
									Olá {$_SESSION['Nome']}!
								</div>

								<a role='button' href='paginas/controle_sessao/logoff.php' class='btn text-danger'>
									<i class='fas fa-sign-out-alt'></i> Logout
								</a>";
					}
					else
					{
						echo "	<form class='form-inline my-10 my-lg-0'>
									<a role='button' href='/login' class='btn text-primary'>
										<i class='fas fa-sign-in-alt'></i> Login
									</a>
								</form>";
					}
				?>
			</div>
		</div>

		<?
			//Se passar o nome da página por get acessa a página referida, senão acessa a página de boas-vindas
			if(file_exists("paginas/principal/{$_GET['pagina']}.php"))
			{
				//Se o usuário não for cadastrado e for acessar alguma página volta para o início
				if(!ISSET($_SESSION['Nome']) && $_GET['pagina'] != 'login' && $_GET['pagina'] != 'register')
					header('location:/');

				include("paginas/principal/{$_GET['pagina']}.php");
			}
			else
				include('paginas/principal/cover.php');
		?>
	</body>
</html>