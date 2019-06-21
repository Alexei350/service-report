<div class='row justify-content-md-center'>
    <div class='col-lg-5'>
        <div class='py-5 text-center'>
            <!-- Imagem do topo da página -->
            <img class='d-block mx-auto mb-4' id='img_cover' src='img/cover.png' alt='' width='128' height='128'>

            <!-- Título -->
            <h1 class='cover-heading'>OS Report</h1>
            <!-- Apresentação -->

            <!-- <img class="my-image" src="/img/usuario/img_user_1.png" />
            <script>
                var basic = $('.my-image').croppie({
                    viewport: {
                        width: 150,
                        height: 200
                    }
                });
                basic.croppie('bind', {
                    url: 'demo/cat.jpg',
                    points: [77,469,280,739]
                });
                //on button click
                basic.croppie('result', 'html').then(function(html) {
                    // html is div (overflow hidden)
                    // with img positioned inside.
                });
            </script> -->

                <div id="demo-basic">
                </div>
            <style>
                #demo-basic {
                    width: 250px;
                    height: 250px;
                }
            </style>

            <script>
                $(function() {
                    var basic = $('#demo-basic').croppie({
                        viewport: 
                        {
                            width: 250,
                            height: 250,
                            type: 'circle'
                        }
                    });
                    basic.croppie('bind', {
                        url: '/img/usuario/img_user_1.png',
                        points: [77, 469, 280, 739]
                    });
                });
            </script>

            <p class='lead'>
                O OS Report é um sistema web de gerenciamento<br>
                de ordens de serviço e geração de relatórios.
            </p>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modo escuro</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            O modo escuro está disponível, basta clicar no botão à extrema direita na barra de navegação
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Entendi</button>
                        </div>
                    </div>
                </div>
            </div>

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
                            </p>
                            
                            <script type='text/javascript'>
                                $(document).ready(
                                    function()
                                    {
                                        $('#exampleModal').modal('show');
                                    }
                                );
                            </script>";
                }
            ?>
        </div>
    </div>
</div>