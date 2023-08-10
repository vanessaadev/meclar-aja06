<?php
// EGPCE - Chama o conectamoodle.php
//require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01';
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
    <div id="Inicio"></div>
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

                        <h2 class="Titulo"> ÁGUA </h2>
                        <hr>

                        <p>Olá, AJA.</p>

                        <p>Como vai? Está curtindo sua caminhada? Sei que muitas descobertas devem estar acontecendo nessa jornada. Aprender não é necessariamente receber informações novas, mas EXPERIENCIAR o que nos é comum, de uma nova maneira. Aprender é redescobrir o mundo, ver o nosso mundo com um olhar mais aguçado, detalhado.</p>

                        <p>Hoje, nós vamos nos reencontrar com um dos elementos mais abundantes de nosso planeta. Esse elemento está a nossa volta, em nosso corpo, e sem ele nós nem existiríamos, mas pela sua abundância e sua presença constante, muitas vezes nós não lhe damos a devida atenção.</p>

                        <p>Nesse módulo vamos redescobrir a ÁGUA.</p>


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
            <br><br>

            <!-- Botões de navegação -->
            <div class="text-center">
                <!--<a href="Apresentacao.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>-->
                <a href="Topico01.1.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div>

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>