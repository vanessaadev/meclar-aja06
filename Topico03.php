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
<p class="SubTitulo">SEGUNDO ROLÊ INVESTIGATIVO </p>
<hr>

3. SANEAMENTO BÁSICO

As cidades, assim como nossos corpos, são entes que nascem, crescem, se desenvolvem, envelhecem e, se não cuidadas, adoecem e morrem.

No módulo anterior, aprendemos sobre o fluxo de mercadorias e alimentos e o resíduo por ele produzido. Aprendemos sobre a forma correta de descartar o resíduo sólido, de reduzir sua produção, de reutilizá-lo quando possível.

Neste módulo estamos aprendendo sobre a água, sua importância, e os fluxos que ela percorre até chegar a nossa casa. Como ela é tratada para o consumo, e como é feito o seu descarte correto.

Todo esse processo de controle dos fluxos de água, alimentos e demais produtos fundamentais para a nossa existência na cidade visa à manutenção da saúde da cidade e de seus habitantes. Esse processo é denominado Saneamento Básico.

Sanear significa manter limpos os locais habitados pelo ser humano, evitando e controlando as substâncias tóxicas e os microrganismos que afetam a saúde. Os serviços de saneamento devem ser executados pelo poder público visando à melhoria da qualidade de vida da população e preservação do meio ambiente. Porém, a contribuição de todas as pessoas é fundamental.


FIQUE LIGADO!

Tratar a água e o lixo é fundamental para garantir a nossa saúde e a do planeta. Daí vem o nome saneamento BÁSICO.


Os serviços de saneamento consistem em: abastecer as casas com água potável; coletar e tratar o esgoto; coletar e tratar o lixo; e prevenir enchentes através da drenagem urbana.

E na área rural? Como acontece o saneamento? Bora aprender.



<br><br>

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
<!--<a href=".php" class="btn btn-primary" role="button" aria-pressed="true"> <i class="fa fa-chevron-right"></i></a>-->
</div>

</div> <!-- CONTEUDO FIM -->

<!-- FOOTER -->
<?php include('layout/footer.php') ?>

</div> <!-- DIV MAIN FIM -->

<!-- FOOTER JS -->
<?php include('layout/js.php') ?>

</body>

</html>