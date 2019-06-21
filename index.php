<?php 
	session_start();

	$id = $_GET['pagina'];
	$img = file_exists("img/usuarios/img_user_{$_SESSION['ID']}.png") ? $_SESSION['ID'] : "default";
?>

<!DOCTYPE html>
<html lang="br">
	<head>
		<title>OS Report Beta v0.1</title>
	  	<meta charset="UTF-8">

		<!--Ícone da página-->
	  	<link rel="shortcut icon" href="/img/logo/logo-dark.png">
		  
		<!--CSS do bootstrap-->
	  	<link rel="stylesheet" href="/utilities/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/utilities/font_awesome/css/all.css">

		<!-- CSS do botão customizado para o Bootstrap -->
		<link rel="stylesheet" href="/styles/custom.css">

		<!-- CSS do Croppie (Cortar imagens) -->
		<link rel="stylesheet" href="/utilities/croppie/croppie.css">
		
		<!-- CSS global das telas -->
		<link rel="stylesheet" href="/styles/global.css">

		<!-- Javascript para o bootstrap -->
		<script src="/utilities/ajax-popper.min.js"></script>
		<script src="/utilities/jquery-3.3.1.slim.min.js"></script>
		<script src="/utilities/bootstrap/js/bootstrap.min.js"></script>

		<!-- Javascript do Croppie -->
		<script src="/utilities/croppie/croppie.js"></script>

		<!-- Javascript da tela -->
		<script src="/scripts/nav.js"></script>
		<script src="/scripts/dark_mode.js"></script>
	</head>

	<body id='body' class="text-center">
		<!--Barra de navegação-->
		<div class="navbar navbar-expand sticky-top navbar-dark" style="background-color: #1f2833">
			<a class="navbar-brand" href="/">
				<img src="/img/logo/logo.png" width="30" height="30" alt="Logo">
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

					<li class="nav-item" id="nav_about">
						<a class="nav-link" href="/sobre">Sobre os Criadores</a>
					</li>
				</ul>

				<?php					
					//Verifica se usuário está logado
					if(ISSET($_SESSION['nome']))
					{
						echo "	<div class='nav-item dropdown'>
									<button role='button' id='user_btn' role='button' data-toggle='dropdown' class='btn text-primary shadow-none'>
										<img src='/img/usuarios/img_user_{$img}.png' class='rounded-circle border border-primary' id='user_img'>{$_SESSION['nome']}
									</button>
									<div class='dropdown-menu dropdown-menu-right' aria-labelledby='user_btn'>
										<a class='btn text-dark dropdown-item' href='/register'>
											<i class='fas fa-cog' id='menu_item'></i>Minha conta
										</a>
										<button onclick=\"switchMode('{$id}')\" class='btn text-dark dropdown-item'>
											<i class='fas fa-adjust' id='menu_item'></i>Modo escuro
										</button>
										<div class='dropdown-divider'></div>
										<a class='btn text-danger shadow-none dropdown-item' href='/session/sessao_logout.php'>
											<i class='fas fa-sign-out-alt' id='menu_item'></i>Sair
										</a>
									</div>
								</div>";
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
			</div>
		</div>

		<!--Corpo da página-->
		<div class="row" id="main">
			<div class="col">
				<!--Chama a tela selecionada-->
				<?php
					//Se passar o nome da página por get acessa a página referida, senão acessa a página de boas-vindas, se não for logado vai pra tela de login
					if(file_exists("paginas/{$id}.php") && !ISSET($_SESSION['nome']) && $id != 'login' && $id != 'register' && $id != 'about' && $id != 'cover' && $id != '404')
							header('location:/login');
						
					include 'paginas/' . $id . '.php';
				?>
				
				<!--Define o ícone de página ativo na navbar-->
				<script type="text/javascript">
					selecionaItem('nav_<?= $id ?>');
					inicializaCookie('<?= $id ?>');
				</script>
			</div>
		</div>
	</body>
</html>