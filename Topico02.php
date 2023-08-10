<?php
// EGPCE - Chama o conectamoodle.php
//require_once('conectamoodle.php');
?>

<?php
$page = 'Topico02';
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

                        <h2 class="Titulo">ÁGUA QUE VEM, ÁGUA QUE VAI</h2>
                        <hr>
                        <br>

                        <p>Aprendemos que nós somos água. E assim como ocorre o ciclo das águas na natureza (chove, escoa, infiltra, evapora, chove…), também existe um ciclo da água nos seres vivos.</p>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura12.png" data-bs-toggle="modal" data-bs-target="#Imagem12">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="350" class="img-fluid" src="imagens/Figura12.png" alt="Alt da imagem fica aqui">
                                <p class="TituloFigura">Ciclo da água na natureza. <br>Imagem: SEMA.</p>
                            </a>
                        </div>
                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura12.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 01 - End -->                        

                        <p>A vida é movimento, e esse movimento precisa de água. Bebemos água para nutrir o corpo, que está sempre em movimento (interno e externo). O fluxo do sangue, a limpeza de impurezas, a renovação das células, tudo isso é feito basicamente pela água que ingerimos.</p>

                        <p>O excedente dessa água ingerida vai ser eliminada através da urina, fezes, lágrimas, suor, saliva, etc. É por isso que precisamos sempre repor água no nosso organismo.</p>

                        <p>E para realmente fazer bem ao ser humano, a água de beber deve estar livre de micro-organismos nocivos à saúde. Assim, precisamos tratar a água que coletamos da natureza, seja qual for o recurso hídrico: um rio, açude, cacimba ou mesmo da chuva. Vamos saber mais sobre isso.</p>

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
                <a href="Topico01.6.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico02.1.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>