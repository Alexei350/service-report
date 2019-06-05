<link href="cover.css" rel="stylesheet">

<div class='row justify-content-md-center'>
    <div class='col-lg-5'>
        <div class='py-5 text-center'>
            <img class='d-block mx-auto mb-4' src='/img/index.png' alt='' width='128' height='128'>
            
            <h1 class='cover-heading'>OS Report</h1>
            <p class='lead'>O OS Report é um sistema web de gerenciamento de ordens de serviço, geração de relatórios. Registre-se já para aproveitar os benefícios, ou faça login, caso já seja cadastrado.</p>
            
            <p class='lead'>
                <?php
                    if (isset($_SESSION['Nome'])) 
                    {
                        echo "Olá {$_SESSION['Nome']}, bem vindo(a) de volta!";
                    } 
                    else 
                    {
                        echo "  <a href='/login' class='btn btn-lg btn-outline-primary'>Login</a>
                                <a href='/register' class='btn btn-lg btn-outline-secondary'>Registrar</a>";
                    }
                ?>
            </p>
        </div> 
    </div>
</div>