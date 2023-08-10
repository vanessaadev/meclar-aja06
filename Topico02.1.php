<?php
// EGPCE - Chama o conectamoodle.php
//require_once('conectamoodle.php');
?>

<?php
$page = 'Topico02.1';
include('layout/header.php');
?>


<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>
        <!-- CONTEUDO INICIO -->
        <div class="main-content container-fluid Texto">
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title">

                        <!-- Sub Título -->
                        <p class="SubTitulo">ÁGUA QUE VEM </p>
                        <hr>

                        <p>A água que chega na torneira de nossas casas, via de regra, percorre um longo caminho. Depois de ser captada em um recurso hídrico, ela é transportada por tubulações até uma Estação de Tratamento de Água (ETA), onde ela é filtrada e purificada. Da estação de tratamento, ela parte para um reservatório, de onde é distribuída novamente por um sistema de tubulações para todas as casas da região. Esse percurso é conhecido como Sistema de Abastecimento de Água.</p>

                        <p>Geralmente, as águas que abastecem as cidades são captadas dos rios, mas no Nordeste, a água subterrânea tem sido, muitas vezes, a única fonte de abastecimento.</p>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura14.png" data-bs-toggle="modal" data-bs-target="#Imagem14">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="350" src="imagens/Figura14.png" alt="Alt da imagem fica aqui">
                                <p class="TituloFigura">Etapas de um sistema de abastecimento de água. <br> Imagem: COPASA</p>
                            </a>
                        </div>
                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura14.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 01 - End -->

                        <p>Como vimos, é dos recursos hídricos que vem a água que bebemos, cozinhamos, lavamos as louça e as roupas, tomamos banho. E é para os recursos hídricos que enviamos as águas excedentes, que chamamos de esgoto.</p>

                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>NÃO ESQUEÇA ESTE PENSAMENTO: “Tudo o que consumimos vem da natureza, e um dia, acaba voltando pra ela.”</p>                                
                            </div>
                        </div>                        

                        <!-- SCRIPT LIGHTBOX -->
                        <script>
                            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                event.preventDefault();
                                $(this).ekkoLightbox();
                            });
                        </script>

                    </div> <!-- CLASS PAGE TITLE FIM -->
                </div> <!-- End col-md-10 -->
                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Topico02.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico02.2.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>