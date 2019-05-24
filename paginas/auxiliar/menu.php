<nav class="navbar navbar-expand sticky-top navbar-dark" style="background-color: #343050;">
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
				echo "<div style='padding-right:10px; color:#FFFFFF'>Olá {$_SESSION['Nome']}</div><a role='button' href='logoff.php' class='btn btn-outline-danger'>Logoff</a>";
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
</nav>