<div class='row justify-content-md-center'>
    <div class='col-lg-5'>
        <div class='py-5 text-center'>
            <!-- Imagem do topo da página -->
            <img class='d-block mx-auto mb-4' id='img_cover' src='img/cover.png' alt='' width='128' height='128'>
            
            <!-- Título -->
            <h1 class='cover-heading'>OS Report</h1>
            <!-- Apresentação -->
            <p class='lead'>
                O OS Report é um sistema web de gerenciamento<br>
                de ordens de serviço e geração de relatórios.
            </p>
            
            <?php
                if (isset($_SESSION['nome'])) 
                {
                    // Se o usuário estiver conectado mostra o nome
                    echo "  <p class='lead'>
                                Olá {$_SESSION['nome']}, bem vindo(a) de volta!
                            </p>";
                } 
                else 
                {
                    //Se o usuário não está conectado dá as boas-vindas
                    echo "  <p class='lead'>
                                Registre-se já para aproveitar os benefícios, ou faça login,<br>caso já seja cadastrado.
                            </p>";
                }
            ?>
        </div> 
    </div>
</div>