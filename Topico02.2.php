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

                        <!-- Sub Título -->
                        <p class="SubTitulo"> ÁGUA QUE VAI </p>
                        <hr>

                        <p>Depois do consumo, as águas (que agora poderão conter micro-organismos ou substâncias nocivas) farão um caminho inverso ao do abastecimento, através do que chamamos de Sistema de Esgotamento Sanitário.</p>

                        <p>O esgotamento sanitário tem como finalidade coletar os esgotos domésticos, industriais e hospitalares, TRATÁ-LOS e levá-los a um destino final. É extremamente importante para evitar doenças e incômodos para as comunidades e proteger as fontes de abastecimento de água potável.</p>

                        <p>Tratar o esgoto significa eliminar da água detritos, substâncias químicas e microrganismos, deixando-a mais limpa possível antes de devolvê-la aos rios e aos mares. Do mesmo jeito do abastecimento, a água do esgoto percorre um longo caminho até seu destino final.</p>

                        Instalação da tubulação do esgotamento sanitário.
                        Foto: Badalo

                        <p>Após o uso, as águas das pias, chuveiros e descargas seguem pelos encanamentos até a rede coletora de esgoto, que deve estar disponível na região. De lá, se junta com o esgoto de outras pessoas, seguindo um longo caminho até a Estação de Tratamento de Esgoto (ETE). Na ETE, o esgoto será tratado, eliminando micro-organismos e substâncias nocivas ao meio ambiente. Após esse tratamento, a água já está bem mais limpa, e segue para ser despejada em um rio ou no oceano através de tubulações.</p>

                        Imagem: SEMA.

                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>Assista a esse vídeo para saber mais sobre abastecimento e esgotamento sanitário.

                                <!-- VÍDEO -->
                                <div class="video-responsive">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/2jajE-9Gpq0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                   </p>
                            </div>
                        </div>

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Eutrofização, do grego eutrophos, significa bem nutrido. É um processo observado em diferentes corpos d'água e que se caracteriza pelo aumento de nutrientes, especialmente fósforo e nitrogênio, o que provoca surgimento excessivo de organismos, como algas e cianobactérias.</p>
                            </div>
                        </div>

                        <p>Um ambiente eutrofizado acaba adquirindo uma coloração esverdeada e a quantidade de oxigênio diminui, o que causa a morte de várias espécies.</p>

                        <p>A eutrofização pode ocorrer como resultado da ação humana ou ainda possuir causa natural. O ser humano pode desencadear a eutrofização quando, por exemplo, lança no ambiente aquático resíduos, como esgoto doméstico e industrial SEM TRATAMENTO, ou faz a utilização inadequada de adubos orgânicos, que podem ser transportados para o ambiente aquático. Esse tipo de eutrofização é denominado de eutrofização cultural ou artificial.</p>


                        <p>A eutrofização pode indicar poluição ambiental. Foto: Itinerante Blogspot.</p>


                        <p>Esse fenômeno pode também apresentar uma causa natural, sendo observado, por exemplo, no curso normal do envelhecimento dos corpos d'água, uma vez que, com o passar do tempo, os nutrientes vão se acumulando no ambiente e favorecendo o desenvolvimento de algas. Diferentemente da eutrofização cultural, a eutrofização denominada de natural ocorre de maneira gradual e lenta.</p>

                        
                        <p class="text-end">Fonte: Brasil Escola (adaptado)</p>
                        

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
                <a href="Topico02.1.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico02.3.php" class="btn btn-primary" role="button" aria-pressed="true"> <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>