<!-- PLUGIN DO FADE IN -->

<style>
        .MenuTopico {
            color: #274F23 !important;
            font-weight: bold !important;
        }

        #menuNumero {
            color: #274F23;
            font-weight: bold !important;
            font-size: 1.2rem;
            padding-right: 0.3rem;
            margin-left: 0;
            margin-right: 0.4rem;
            font-family: "Raleway";
            right: 0.8rem;
            margin-top: -0.23rem;
        }

        .ativo {
            background-color: #e1ebe3;
        }
    </style>

    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active ps">
                <div class="m-4 mx-auto text-center">
                    <!-- <a href="index.php">
                    <img class="img-fluid" src="https://atilasilvalima.a2hosted.com/projects/EGPCE/Cedis/cdn/imagens/egpce.png" alt="Logo EGPCE">
                </a> -->
                    <img class="img-fluid img-responsive" src="https://www.egp.ce.gov.br/wp-content/uploads/sites/8/2021/06/logo-egpce-250x170-1.png" height="140" width="140" alt="Logo EGPCE">
                </div>
                <div class="sidebar-menu">

                    <ul class="menu ms-3">

                    <li class="sidebar-item">
                        <div class="bd-callout-menu bd-callout-success-menu">
                            <a href="index.php" class="MenuTopico sidebar-link <?php if($page=='index'){echo'ativo';}?>"><span id="menuNumero"> </span>APRESENTAÇÃO</a>
                        </div>
                    </li>

                    <li class="sidebar-item has-sub">
                        <div class="bd-callout-menu bd-callout-success-menu">
                            <a href="#.php" class="MenuTopico sidebar-link <?php if($page=='Topico01'){echo'ativo';}?>"><span id="menuNumero">01 </span> MEIO AMBIENTE E EDUCAÇÃO AMBIENTAL</a>
                            <ul class="submenu">
                                <li class="sidebar-item">
                                    <a href="Topico01.php#Inicio" class="sidebar-sub <?php if($page=='Topico01'){echo 'ativo';}?>"><span id="menuNumero">
                                        01<span> Meio Ambiente e Educação Ambiental</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico01.1.php#SubTopico1.1" class="sidebar-sub <?php if($page=='Topico01.1'){echo 'ativo';}?>"><span id="menuNumero">
                                    01.1<span> Primeiro Rolê Investigativo Oficial</span>
                                    </a>
                                </li>                                  
                            </ul>

                        </div>
                    </li>

                    <li class="sidebar-item">
                        <div class="bd-callout-menu bd-callout-success-menu">
                            <a href="Topico02.php" class="MenuTopico sidebar-link <?php if($page=='Topico02'){echo'ativo';}?>"><span id="menuNumero">02 </span>CONSUMO E CONSCIÊNCIA</a>
                        </div>
                    </li>
                    
                    <li class="sidebar-item has-sub">
                        <div class="bd-callout-menu bd-callout-success-menu">
                            <a href="#.php" class="MenuTopico sidebar-link <?php if($page=='Topico03'){echo'ativo';}?>"><span id="menuNumero">03 </span>RESÍDUOS SÓLIDOS </a>
                            <ul class="submenu">
                                <li class="sidebar-item">
                                    <a href="Topico03.php#Inicio" class="sidebar-sub <?php if($page=='Topico03'){echo 'ativo';}?>"><span id="menuNumero">
                                        03<span> INÍCIO</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico03.1.php#SubTopico3.1" class="sidebar-sub <?php if($page=='Topico03.1'){echo 'ativo';}?>"><span id="menuNumero">
                                    03.1<span> Problemas Causados pelo Lixo</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico03.2.php#SubTopico3.2" class="sidebar-sub <?php if($page=='Topico03.2'){echo 'ativo';}?>"><span id="menuNumero">
                                    03.2<span> Segundo Rolê Investigativo</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico03.3.php#SubTopico3.3" class="sidebar-sub <?php if($page=='Topico03.3'){echo 'ativo';}?>"><span id="menuNumero">
                                    03.3<span> Gerenciamento de Resíduos Sólidos</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico03.4.php#SubTopico3.4" class="sidebar-sub <?php if($page=='Topico03.4'){echo 'ativo';}?>"><span id="menuNumero">
                                    03.4<span> Coleta Seletiva</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico03.5.php#SubTopico3.5" class="sidebar-sub <?php if($page=='Topico03.5'){echo 'ativo';}?>"><span id="menuNumero">
                                    03.5<span> Compostagem</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico03.6.php#SubTopico3.6" class="sidebar-sub <?php if($page=='Topico03.6'){echo 'ativo';}?>"><span id="menuNumero">
                                    03.6<span> Os Lixões</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico03.7.php#SubTopico3.7" class="sidebar-sub <?php if($page=='Topico03.7'){echo 'ativo';}?>"><span id="menuNumero">
                                    03.7<span> Aterro Sanitário</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico03.8.php#SubTopico3.8" class="sidebar-sub <?php if($page=='Topico03.8'){echo 'ativo';}?>"><span id="menuNumero">
                                    03.8<span> Consórcios de Resíduos Sólidos</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico03.9.php#SubTopico3.9" class="sidebar-sub <?php if($page=='Topico03.9'){echo 'ativo';}?>"><span id="menuNumero">
                                    03.9<span> Educação Ambiental com Foco em Resíduos Sólidos</span>
                                    </a>
                                </li>                                            
                            </ul>
                                
                            </div>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('ul li a').click(function() {
                $('li a').removeClass("ativo");
                $(this).addClass("ativo");
            });
        });
    </script>