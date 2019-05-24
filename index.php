<!DOCTYPE html>
<html lang="br">
	<head>
		<title>OS Report Beta v0.1</title>
	  	<meta charset="UTF-8">

	  	<link rel="shortcut icon" href="/img/logo-dark.png">

	  	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	</head>

	<body class="text-center">
		<header class="navbar navbar-expand sticky-top navbar-dark" style="background-color: #343050;">
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
					$logado = ISSET($_SESSION['Nome']);
					if($logado)
					{
						echo "<div style='padding-right:10px; color:#FFFFFF'>Olá {$_SESSION['Nome']}</div><a role='button' href='paginas/controle_sessao/logoff.php' class='btn btn-outline-danger'>Logoff</a>";
					}
					else
					{
						echo "	<form class='form-inline my-10 my-lg-0'>
										<div class='btn-group' role='group' aria-label='Basic example'>
										<a role='button' href='/login' class='btn btn-outline-primary'>Login</a>
										<a role='button' href='/register' class='btn btn-outline-light'>Registrar</a>
									</div>
								</form>";
					}
				?>
			</div>
		</header>

		<?
			if(file_exists("paginas/principal/{$_GET['pagina']}.php"))
				include("paginas/principal/{$_GET['pagina']}.php");
			else
				include('paginas/principal/cover.php');
		?>
	</body>
</html>