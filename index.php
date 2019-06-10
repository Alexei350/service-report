<?php
	//define o id para chamar o modo dark
	if(file_exists("paginas/{$_GET['pagina']}.php"))
	{
		$id = $_GET['pagina'];
	}
	else
	{
		$id = "cover";
	}
?>

<!DOCTYPE html>
<html lang="br">
	<head>
		<title>OS Report Beta v0.1</title>
	  	<meta charset="UTF-8">

		<!--Ícone da página-->
	  	<link rel="shortcut icon" href="img/logo-dark.png">
		  
		<!--CSS do bootstrap-->
	  	<link rel="stylesheet" href="utilities/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="utilities/font_awesome/css/all.css">

		<!--Javascript da tela-->
		<script src="scripts/nav.js"></script>
		<script src="scripts/dark_mode.js"></script>
		
		<!--CSS global das telas-->
		<link rel="stylesheet" href="styles/global.css">
	</head>

	<body id='body' class="text-center">
		<!--Barra de navegação-->
		<div class="navbar navbar-expand sticky-top navbar-dark" style="background-color: #1f2833">
			<a class="navbar-brand" href="/">
				<img src="img/logo.png" width="30" height="30" alt="Logo">
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item" id="nav_cover">
						<a class="nav-link" href="/">Início</a>
					</li>

					<li class="nav-item" id="nav_os">
						<a class="nav-link" href="/os">Cadastrar</a>
					</li>

					<li class="nav-item" id="nav_pesquisa">
						<a class="nav-link" href="/pesquisar">Pesquisar</a>
					</li>

					<li class="nav-item" id="nav_relatorios">
						<a class="nav-link" href="/relatorios">Relatórios</a>
					</li>
				</ul>

				<?php
					session_start();
					
					//Verifica se usuário está logado
					if(ISSET($_SESSION['nome']))
					{
						echo "	<div style='padding-right:10px; color:#FFFFFF'>
									Olá {$_SESSION['nome']}!
								</div>

								<a role='button' href='../session/sessao_logout.php' class='btn text-danger shadow-none'>
									<i class='fas fa-sign-out-alt'></i> Logout
								</a>";
					}
					else
					{
						echo "	<form class='form-inline my-10 my-lg-0'>
									<a role='button' href='/login' class='btn text-primary shadow-none'>
										<i class='fas fa-sign-in-alt'></i> Login
									</a>
								</form>";
					}
				?>

				<!--Botão do modo escuro-->
				<button onclick="switchMode('<?= $id ?>')" class="btn text-light shadow-none"><i class='fas fa-adjust'></i></button>
			</div>
		</div>

		<!--Corpo da página-->
		<div class="row" id="main">
			<div class="col">
				<!--Chama a tela selecionada-->
				<?php
					//Se passar o nome da página por get acessa a página referida, senão acessa a página de boas-vindas, se não for logado vai pra tela de login
					if(file_exists("paginas/{$_GET['pagina']}.php") && !ISSET($_SESSION['nome']) && $_GET['pagina'] != 'login' && $_GET['pagina'] != 'register')
						header('location:/login');
						
					include('paginas/' . $id . '.php');
				?>
				
				<!--Define o ícone de página ativo na navbar-->
				<script type="text/javascript">
					selecionaItem('nav_<?= $id ?>');
					inicializaCookie('<?= $id ?>');
				</script>
			</div>
		</div>

		<!--Javascript para o bootstrap-->
		<script src="utilities/ajax-popper.min.js"></script>
		<script src="utilities/jquery-3.3.1.slim.min.js"></script>
		<script src="utilities/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>