<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01.1';
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

                        <h2 class="SubTitulo"> Referências</h2>
                        <hr>
                        <br>

                        <p>Marcel Mazoyer e Laurence Roudart “História das agriculturas no mundo: Do neolítico à crise contemporânea” – Editora Unesp, 2010</p>
                        <p>Walter Steenbock - “A arte de guardar o sol: Padrões da Natureza na reconexão entre florestas, cultivos e gentes” – Bambual Editora, 2021</p>
                        <p>Zé Pedro de Oliveira Costa - “Uma história das florestas brasileiras” – Editora Autêntica, 2022</p>
                        <p>Dayana Andrade, Felipe Pasini - “Vida em Sintropia: Agricultura sintrópica de Ernst Götsch explicada” - Editora Labrador, 2022</p>
                        <p>Ana Primavesi - "Manual do Solo Vivo: Solo Sadio, Planta Sadia, ser Humano Sadio” – Editora Expressão Popular, 2016</p>

                        <p><a href="https://www.ihu.unisinos.br/noticias/558249-o-clima-na-era-dos-humanos" target="_blank">https://www.ihu.unisinos.br/noticias/558249-o-clima-na-era-dos-humanos</a></p>
                        <p><a href="https://www.bbc.com/portuguese/noticias/2015/08/150811_plantas_consumo_fn#:~:text=O%20fato%20%C3%A9%20que%20das,consumimos%20apenas%20cerca%20de%20200.&text=E%2C%20a%20maioria%20das%20prote%C3%ADnas,%3A%20milho%2C%20arroz%20e%20trigo" target="_blank">https://www.bbc.com/portuguese/noticias/2015/08/150811_plantas_consumo_fn#:~:text=O%20fato%20%C3%A9%20que%20das,consumimos%20apenas%20cerca%20de%20200.&text=E%2C%20a%20maioria%20das%20prote%C3%ADnas,%3A%20milho%2C%20arroz%20e%20trigo</a>.</p>
                        <p><a href="https://educa.ibge.gov.br/jovens/conheca-o-brasil/territorio/18311-flora-brasileira.html" target="_blank">https://educa.ibge.gov.br/jovens/conheca-o-brasil/territorio/18311-flora-brasileira.html</a></p>



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
                <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico01.2.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div>

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>